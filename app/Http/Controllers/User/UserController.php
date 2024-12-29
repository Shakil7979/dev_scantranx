<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function homev2()
    {
        return view('user.home-v2');
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
        return view('user.blog');
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
        return view('user.job-opening');
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
