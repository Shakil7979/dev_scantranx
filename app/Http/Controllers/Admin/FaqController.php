<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{

    public function show()
    {   
        $blogs = Faq::all();   
        return view('admin.faq', compact('blogs'));
    }

    public function store(Request $request)
    {
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255', 
            'answer' => 'required|string', 
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }

        try {
            // Store the job details in the database
            Faq::create([
                'title' => $request->title,
                'answer' => $request->answer, 
            ]);

            // Return a success response
            return response()->json([
                'status' => true,
                'message' => 'FAQ created successfully!',
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to create FAQ. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    } 

    public function edit_show($id)
    { 

        $job = Faq::find($id); // Retrieve the job by ID
        
        if (!$job) {
            return response()->json(['status' => false, 'message' => 'Faq not found.']);
        }
    
        return response()->json(['status' => true, 'data' => $job]);
    }

    public function update(Request $request)
    {

        $id = $request->id;
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'title_update' => 'required|string|max:255', 
            'answer_update' => 'required|string', 
        ]);
    
        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }
    
        try {
            // Find the job by ID and update its details
            $job = Faq::findOrFail($id);
            $job->update([
                'title' => $request->title_update,
                'answer' => $request->answer_update, 
            ]);
    
            // Return a success response
            return response()->json([
                'status' => true,
                'message' => 'Faq updated successfully!',
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to update faq. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $job = Faq::findOrFail($id); // Find the job
            $job->delete();             // Delete the job

            return response()->json([
                'status' => true,
                'message' => 'Faq deleted successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete the faq. ' . $e->getMessage(),
            ]);
        }
    }
    
}
