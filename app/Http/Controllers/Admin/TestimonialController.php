<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class TestimonialController extends Controller
{ 
    public function show()
    {   
        $testimonials  = Testimonial::all();    
        return view('admin.testimonial' , compact('testimonials'));
    } 

    public function store(Request $request)
    {

        // Validate the form input
        $validator = Validator::make($request->all(), [  
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,gif|max:2048',
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
            // Handle the single file upload
            $uploadedFile = null;
            if ($request->hasFile('file')) {
                $file = $request->file('file');

                
                // Generate a random 10-digit numeric filename
                $filename = substr(str_shuffle('0123456789'), 0, 10) . '.' . $file->getClientOriginalExtension();
    
                // Define the target directory within the public path
                $targetDirectory = public_path('admin\assets\images\testimonial\post'); 
    
                // Ensure the directory exists
                if (!file_exists($targetDirectory)) {
                    mkdir($targetDirectory, 0777, true);
                }
    
                // Move the uploaded file to the target directory
                $file->move($targetDirectory, $filename);
    
                // Save the file path relative to the public directory
                $uploadedFile = 'admin/assets/images/testimonial/post/' . $filename;
            } 
    
            // Store the blog details in the database
            $blog = Testimonial::create([
                'name' => $request->input('name'),
                'designation' => $request->input('designation'),
                'testimonial' => $request->input('testimonial'),
                'resume_path' => $uploadedFile, // Store the single image path
            ]); 
            // Return a success response
            return response()->json([
                'status' => true,
                'message' => 'Testimonial created successfully!',
                'blog' => $blog,
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to create testimonial post. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    } 

    
    public function edit_show($id)
    {  

        $job = Testimonial::find($id); // Retrieve the job by ID 
        if (!$job) {
            return response()->json(['status' => false, 'message' => 'Testimonial not found.']);
        } 
        return response()->json(['status' => true, 'data' => $job]); 

    }

    public function update(Request $request)
    {
        $id = $request->id;
    
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'name_update' => 'required|string|max:255',
            'designation_update' => 'required|string|max:255',
            'testimonial_update' => 'required|string',
            'file_update' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }
    
        try {
            $blog = Testimonial::findOrFail($id);
    
            // Handle file upload if provided
            if ($request->hasFile('file_update')) {
                $file = $request->file('file_update');
    
                // Delete the old image if it exists
                if ($blog->resume_path && file_exists(public_path($blog->resume_path))) {
                    unlink(public_path($blog->resume_path));
                }
    
                // Generate a unique filename and move the file
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $targetDirectory = public_path('admin/assets/images/testimonial/post');
    
                if (!file_exists($targetDirectory)) {
                    mkdir($targetDirectory, 0777, true);
                }
    
                $file->move($targetDirectory, $filename);
    
                // Update the image path in the model
                $blog->resume_path = 'admin/assets/images/testimonial/post/' . $filename;
            }
    
            // Update other fields
            $blog->name = $request->input('name_update');
            $blog->designation = $request->input('designation_update');
            $blog->testimonial = $request->input('testimonial_update');
    
            // Save changes
            $blog->save();
    
            return response()->json([
                'status' => true,
                'message' => 'Testimonial updated successfully!',
                'blog' => $blog->fresh(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update testimonial post. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $job = Testimonial::findOrFail($id); // Find the job
            $job->delete();             // Delete the job

            return response()->json([
                'status' => true,
                'message' => 'Testimonial deleted successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete the testimonial. ' . $e->getMessage(),
            ]);
        }
    }
    
    
    


}
