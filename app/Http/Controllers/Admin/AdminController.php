<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // Show the admin login form
    public function admin_redirect()
    {
        return redirect()->route('admin.login');
    }

    // Show the admin login form
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Handle the admin login
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
                'redirect_url' => url('/dashboard'), // Example redirect to dashboard
            ]);
        } else {
            // Authentication failed
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password',
            ]);
        }
    }

    // // Show the admin dashboard
    public function dashboard(Request $request)
    {
        // $jobs = Job::all(); 
        $jobs = Job::all()->map(function ($job) {
            $job->application_count = JobApplication::where('job_id', $job->id)->count();
            return $job;
        });
        return view('admin.dashboard', compact('jobs')); 
    }

    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Redirect to the login page
        return redirect()->route('admin.login');
    }
}
