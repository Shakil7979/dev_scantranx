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
        return view('admin.blog');
    }
    public function post(Request $request)
    { 
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'files' => 'required|array', // Validate that 'files' is an array
            'files.*' => 'file|mimes:jpg,jpeg,png,gif|max:2048', // Validate individual files
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
            // Handle file uploads
            $uploadedFiles = [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    // Generate a random filename
                    $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();

                    // Store the file
                    $path = $file->storeAs('uploads/blogs', $filename, 'public');

                    // Save the file path
                    $uploadedFiles[] = $path;
                }
            }

            // Store the blog details in the database
            $blog = Blog::create([
                'title' => $request->input('title'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
                'images' => json_encode($uploadedFiles), // Store the images as JSON
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
