<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EbookDownloadController extends Controller
{
    public function show()
    {   
        // $contacts  = ContactMessage::all();    
        // return view('admin.contact' , compact('contacts'));
        return view('admin.ebook-download');
    } 

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'business_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|unique:ebooks,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }

        $ebook = Ebook::create($request->all());

        if($ebook){
            return response()->json([
                'status' => true,
                'message' => 'Ebook details saved successfully',
                'data' => $ebook,
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'Ebook details save failed', 
            ]);
        }

        
    }
}
