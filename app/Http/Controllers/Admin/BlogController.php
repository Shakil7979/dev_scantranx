<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function show()
    {   
        $blogs = Blog::all();  
        return view('admin.blog', compact('blogs'));
    }

    public function post(Request $request)
    {

        // Validate the form input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,gif|max:2048', // Validate the single file
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
                $targetDirectory = public_path('admin/assets/images/blog/post');
    
                // Ensure the directory exists
                if (!file_exists($targetDirectory)) {
                    mkdir($targetDirectory, 0777, true);
                }
    
                // Move the uploaded file to the target directory
                $file->move($targetDirectory, $filename);
    
                // Save the file path relative to the public directory
                $uploadedFile = 'admin/assets/images/blog/post/' . $filename;
            } 
    
            // Store the blog details in the database
            $blog = Blog::create([
                'title' => $request->input('title'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
                'image_path' => $uploadedFile, // Store the single image path
            ]);
    
            // Return a success response
            return response()->json([
                'status' => true,
                'message' => 'Blog post created successfully!',
                'blog' => $blog,
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to create blog post. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    } 

    public function edit_show($id)
    {  
        $job = Blog::find($id); // Retrieve the job by ID 
        if (!$job) {
            return response()->json(['status' => false, 'message' => 'Blog not found.']);
        } 
        return response()->json(['status' => true, 'data' => $job]); 
    }

    public function update(Request $request)
    {
        $id =$request->blog_id; 
    
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'title_update' => 'required|string|max:255',
            'category_update' => 'required|string',
            'description_update' => 'required|string',
            'file_update' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:2048', // File is optional
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ]);
        }
    
        try {
            $blog = Blog::findOrFail($id);
            Log::info('Found Blog: ', $blog->toArray());
    
            // Handle the single file upload
            $uploadedFile = $blog->image_path; // Retain old image if no new file is uploaded
            if ($request->hasFile('file_update')) {
                $file = $request->file('file_update');
    
                // Delete old image
                if ($blog->image_path && file_exists(public_path($blog->image_path))) {
                    unlink(public_path($blog->image_path));
                }
    
                // Generate a random 10-digit numeric filename
                $filename = substr(str_shuffle('0123456789'), 0, 10) . '.' . $file->getClientOriginalExtension();
    
                // Define the target directory within the public path
                $targetDirectory = public_path('admin/assets/images/blog/post');
    
                // Ensure the directory exists
                if (!file_exists($targetDirectory)) {
                    mkdir($targetDirectory, 0777, true);
                }
    
                // Move the uploaded file to the target directory
                $file->move($targetDirectory, $filename);
    
                // Save the file path relative to the public directory
                $uploadedFile = 'admin/assets/images/blog/post/' . $filename;
            }
    
            // Update blog record
            $blog->update([
                'title' => $request->input('title_update'),
                'category' => $request->input('category_update'),
                'description' => $request->input('description_update'),
                'image_path' => $uploadedFile,
            ]);
    
            return response()->json([
                'status' => true,
                'message' => 'Blog updated successfully!',
                'blog' => $blog->fresh(),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update blog post. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $job = Blog::findOrFail($id); // Find the job
            $job->delete();             // Delete the job

            return response()->json([
                'status' => true,
                'message' => 'Blog deleted successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete the blog. ' . $e->getMessage(),
            ]);
        }
    }
    
    
}
