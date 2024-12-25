<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    

    

}
