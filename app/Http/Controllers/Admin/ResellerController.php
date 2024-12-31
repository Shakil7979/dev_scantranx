<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Reseller;

class ResellerController extends Controller
{
    public function show()
    {   
        // $contacts  = ContactMessage::all();    
        // return view('admin.contact' , compact('contacts'));
        return view('admin.reseller');
    } 


    public function store(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'account_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|unique:resellers,email', 
            'reason' => 'required|string|max:255',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }

        // Store data in the database
        $reseller = Reseller::create($request->all());

        // Return a success response
        return response()->json([
            'status' => true,
            'message' => 'Reseller data saved successfully',
            'data' => $reseller,
        ]);
    }

}
