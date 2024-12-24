<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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
    
}
