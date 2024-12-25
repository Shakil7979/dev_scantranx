<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{ 
    public function show()
    {   
        // $blogs = Faq::all();   
        // return view('admin.faq', compact('blogs'));
        return view('admin.testimonial');
    }
}
