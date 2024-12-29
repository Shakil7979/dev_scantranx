<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EbookDownloadController extends Controller
{
    public function show()
    {   
        // $contacts  = ContactMessage::all();    
        // return view('admin.contact' , compact('contacts'));
        return view('admin.ebook-download');
    } 
}
