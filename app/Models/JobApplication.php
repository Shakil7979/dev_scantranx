<?php

// app/Models/JobApplication.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_id',
        'full_name',
        'location',
        'email',
        'linkedin',
        'github_or_portfolio',
        'years_of_experience',
        'field_of_study',
        'summary',
        'resume_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // User who applied
    }

    public function job()
    {
        return $this->belongsTo(Job::class); // The job they applied for
    }
}
