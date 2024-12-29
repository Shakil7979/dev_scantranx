<?php

namespace App\Http\Controllers\User; 
use App\Http\Controllers\Controller;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function store(Request $request)
    {
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'account_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // If validation fails, return the errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }

        try {
            // Save the contact message to the database
            $contactMessage = ContactMessage::create([
                'account_name' => $request->input('account_name'),
                'phone_number' => $request->input('phone_number'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ]);

            // Return success response
            return response()->json([
                'status' => true,
                'message' => 'Your message has been sent successfully!',
                'contact_message' => $contactMessage,
            ]);

        } catch (\Exception $e) {
            // If something goes wrong, return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to send message. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
