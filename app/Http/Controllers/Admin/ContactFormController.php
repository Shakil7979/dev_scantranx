<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function show()
    {   
        $contacts  = ContactMessage::all();    
        return view('admin.contact' , compact('contacts'));
    } 
}
