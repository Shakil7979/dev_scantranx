<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $faq = Faq::orderBy('created_at', 'asc')->get();
        $testimonial = Testimonial::orderBy('created_at', 'asc')->get();
        return view('user.home', compact('faq','testimonial'));
    }
    public function homev2()
    {
        $faq = Faq::orderBy('created_at', 'asc')->get();
        $testimonial = Testimonial::orderBy('created_at', 'asc')->get();
        return view('user.home-v2', compact('faq','testimonial'));
    }
    public function about()
    {
        return view('user.about-us');
    }
    public function api_integration()
    {
        return view('user.api-integration');
    }
    public function blog()
    {    
        $blog = Blog::orderBy('created_at', 'desc')->get(); 
        return view('user.blog', compact('blog'));
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function features()
    {
        return view('user.features');
    }
    public function hardware()
    {
        return view('user.hardware');
    }
    public function job_opening()
    { 
        $userId = Auth::id(); 
        $job = Job::orderBy('created_at', 'desc')->get(); 
        $appliedJobIds = JobApplication::where('user_id', $userId)->pluck('job_id')->toArray();
        return view('user.job-opening', compact('job','appliedJobIds'));
    }
    public function pricing()
    {
        return view('user.pricing');
    }
    public function privecy_policy()
    {
        return view('user.privecy-policy');
    }
    public function quickbook_disconnect()
    {
        return view('user.quickbook-disconnect');
    }
    public function quickbook()
    {
        return view('user.quickbook');
    }
    public function reseller()
    {
        return view('user.reseller');
    }
    public function stripe()
    {
        return view('user.stripe');
    }




    // User Registraion 
    public function register(Request $request)
    {
        // Validation rules for the registration form
        $validator = Validator::make($request->all(), [
            'account_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email', 
            'terms' => 'nullable', // Ensure terms are accepted
            'password' => 'required|string|min:8|confirmed', 
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }

        $account_name = $request->account_name.'.scantranx.com';

        // Create the user if validation passes
        $user = User::create([
            'name' => $account_name,
            'business_name' => $request->business_name,
            'country' => $request->country,
            'phone_number' => $request->phone_number,
            'email' => $request->email, 
            'user_role' => 'user', // Default user role
            'user_type' => 'user', // Default user type 
            'password' => Hash::make($request->input('password')),  
        ]);

        // Return success response
        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'data' => $user,
        ]);
    }

    public function login(Request $request)
    {
        // Validation rules for login form
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }

        // Attempt to log the user in with provided credentials
        $credentials = $request->only('email', 'password'); 

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json([
                'status' => true,
                'message' => 'Login successful', 
            ]);
        } else {
            // Authentication failed
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password',
            ]);
        }
    }

    public function logout()
    { 
        Auth::logout();
        return response()->json(['status' => 'success']);
    }

}
