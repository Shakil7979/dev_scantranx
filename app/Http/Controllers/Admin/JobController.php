<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'job_title' => 'required|string|max:255',
            'job_nature' => 'required|string',
            'location' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'summary' => 'required|string',
            'qualifications' => 'required|string',
            'application_instructions' => 'required|string',
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
            Job::create([
                'job_title' => $request->job_title,
                'job_nature' => $request->job_nature,
                'location' => $request->location,
                'experience' => $request->experience,
                'summary' => $request->summary,
                'qualifications' => $request->qualifications,
                'application_instructions' => $request->application_instructions,
            ]);

            // Return a success response
            return response()->json([
                'status' => true,
                'message' => 'Job created successfully!',
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to create job. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    } 
    public function update(Request $request)
    {

        $id = $request->id;
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'job_title' => 'required|string|max:255',
            'job_nature' => 'required|string',
            'location' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'summary' => 'required|string',
            'qualifications' => 'required|string',
            'application_instructions' => 'required|string',
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
            $job = Job::findOrFail($id);
            $job->update([
                'job_title' => $request->job_title,
                'job_nature' => $request->job_nature,
                'location' => $request->location,
                'experience' => $request->experience,
                'summary' => $request->summary,
                'qualifications' => $request->qualifications,
                'application_instructions' => $request->application_instructions,
            ]);
    
            // Return a success response
            return response()->json([
                'status' => true,
                'message' => 'Job updated successfully!',
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'Failed to update job. Please try again.',
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function edit($id)
    { 

        $job = Job::find($id); // Retrieve the job by ID
        
        if (!$job) {
            return response()->json(['status' => false, 'message' => 'Job not found.']);
        }
    
        return response()->json(['status' => true, 'data' => $job]);
    }

    public function destroy($id)
    {
        try {
            $job = Job::findOrFail($id); // Find the job
            $job->delete();             // Delete the job

            return response()->json([
                'status' => true,
                'message' => 'Job deleted successfully!',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete the job. ' . $e->getMessage(),
            ]);
        }
    }


    public function show($id)
    {
        // Find the job by its ID, or return a 404 if not found
        $job = Job::findOrFail($id);

        // Return the job details view and pass the job data
        return view('admin.job_details', compact('job'));
    }
 
    public function applyForJob(Request $request)
    {
        // Validate form data
        $validator = Validator::make($request->all(), [
            'job_id' => 'required|exists:jobs,id',  // Ensure job exists
            'full_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'linkedin' => 'nullable|string|max:255',
            'github_or_portfolio' => 'nullable|string|max:255',
            'years_of_experience' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'summary' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:10240', // Optional resume upload
        ]);

        // If validation fails, return the errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors(),
                'message' => 'Validation failed, please check your input fields.',
            ]);
        }

        // Handle file upload if present
        $uploadedFile = null;
        if ($request->hasFile('resume')) {
            try {
                // Assuming the user ID is available
                $userId = 1;  // Fetch the ID of the authenticated user 
                $filename = $userId . '.' . $request->resume->getClientOriginalExtension(); // User ID + file extension
    
                // Define the target directory
                $targetDirectory = public_path('admin/assets/images/job/candidate');
    
                // Ensure the directory exists
                if (!file_exists($targetDirectory)) {
                    mkdir($targetDirectory, 0777, true);
                }
    
                // Move the uploaded file to the target directory
                $request->file('resume')->move($targetDirectory, $filename);
    
                // Store the file path relative to the public directory
                $uploadedFile = 'admin/assets/images/job/candidate/' . $filename;

            } catch (\Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'File upload failed. Please try again.',
                    'error' => $e->getMessage(),
                ]);
            }
        }

        // Store the job application details in the database
        try {
            $jobApplication = JobApplication::create([
                'user_id' => Auth::id(), // Get the currently authenticated user
                'job_id' => $request->job_id, // The job the user is applying for
                'full_name' => $request->full_name,
                'location' => $request->location,
                'email' => $request->email,
                'linkedin' => $request->linkedin,
                'github_or_portfolio' => $request->github_or_portfolio,
                'years_of_experience' => $request->years_of_experience,
                'field_of_study' => $request->field_of_study,
                'summary' => $request->summary,
                'resume_path' => $uploadedFile, // Store the resume path
            ]);

            // Return a success response if application is successful
            return response()->json([
                'status' => true,
                'message' => 'Your application has been submitted successfully!',
                'job_application' => $jobApplication,
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while submitting your application. Please try again later.',
                'error' => $e->getMessage(),
            ]);
        }
    }

    
    public function job_get_info($id)
    { 
        $job = Job::findOrFail($id);
 
        return response()->json([ 
            'data' => $job
        ]);
    }

}


    
 
