<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Job;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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
        $job = Job::orderBy('created_at', 'desc')->get(); 
        return view('user.job-opening', compact('job'));
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

}
