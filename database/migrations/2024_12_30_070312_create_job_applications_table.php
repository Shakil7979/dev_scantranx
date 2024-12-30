<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creating the job_applications table
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key referencing users table
            $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade'); // Foreign key referencing jobs table
            $table->string('full_name'); // Full name of the applicant
            $table->string('location'); // Location of the applicant
            $table->string('email'); // Email of the applicant
            $table->string('linkedin')->nullable(); // LinkedIn profile (optional)
            $table->string('github_or_portfolio')->nullable(); // GitHub or Portfolio link (optional)
            $table->string('years_of_experience'); // Years of experience
            $table->string('field_of_study'); // Field of study
            $table->text('summary'); // A summary of why the applicant is a good fit for the job
            $table->string('resume_path')->nullable(); // Optional resume file path
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Dropping the job_applications table if rolled back
        Schema::dropIfExists('job_applications');
    }
};
