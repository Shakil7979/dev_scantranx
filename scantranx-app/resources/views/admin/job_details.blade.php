@extends('admin.layouts.app')
@section('title', 'Job Details')
@section('custom-css') 



@endsection

@section('content')

    <div class="job_details_content">
        <div class="row">
            <div class="col-md-6">
                <div class="job_requirements_box">
                    <a href="{{route('admin.dashboard')}}"><i class="fa-solid fa-angle-left"></i> Back</a>
                    <div class="job_requirement">
                        <div class="job_details_content">
                            <div class="job_content_left job_content_date">
                                <div class="job_apply_head">
                                    <h3>{{ $job->job_title }}</h3>  
                                    <p>
                                        @if($job->applications_count == 0)
                                            0 Applied
                                        @else
                                            {{ $job->applications_count }} Applied
                                        @endif
                                    </p>
                                </div>
                                <p>{{ $job->job_type }}</p>  
                                <div class="job_ul">
                                    <ul>
                                        <li>
                                            <img src="{{asset('admin/assets/images/job/Location.png')}}" alt="">
                                            <p>{{ $job->location }}</p>  
                                        </li>
                                        <li>
                                            <img src="{{asset('admin/assets/images/job/Calendar.png')}}" alt="">
                                            <p>{{ $job->experience }} experience</p>  
                                        </li>
                                        <li>
                                            <img src="{{asset('admin/assets/images/job/clock.png')}}" alt="">
                                            <p> {{ $job->created_at->diffForHumans() }}</p> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="job_content_left">
                                <h3>Responsibilities:</h3>
                                <ul class="job_for_requirements"> 
                                    <li><p>{{ $job->summary }}</p></li> 
                                </ul>
                            </div>
                        
                            <div class="job_content_left">
                                <h3>Qualifications:</h3>
                                <ul class="job_for_requirements"> 
                                    <li><p>{{ $job->qualifications }}</p></li>  
                                </ul>
                            </div>
                        
                            <div class="job_content_left">
                                <h3>How to Apply:</h3>
                                <p>To apply for the {{ $job->job_title }} position, please send your CV and cover letter to {{ $job->application_email }}. Include "{{ $job->job_title }} Application - {{ $job->location }}" in the subject line.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="job_applied_box">
                    <div class="apply_title">
                        <h3>Software Engineer</h3>
                        <p>
                            @if($job->applications_count == 0)
                                0 Applied
                            @else
                                {{ $job->applications_count }} Applied
                            @endif
                        </p>
                    </div>
                    <div class="apply_candidate">
                        <div class="single_candidate">
                            <div class="single_candidate_header">
                                <img src="{{asset('admin/assets/images/job/candidate/user.png')}}" alt="">
                                <div class="candidate_info">
                                    <h3>Aqib Javid</h3>
                                    <p>Toronto, Canada</p>
                                    <p>aqib.official@gmail.com</p>
                                </div>
                            </div>
                            <p>I’m excited to apply for the Software Engineer position With a Bachelor’s in Computer Science and 5 years of experience in software development, including expertise in Java, C#, and database management, <button>See More</button></p>
                            <div class="candi_file">
                                <div class="candi_file_name">
                                    <i class="fa-solid fa-file"></i>
                                    <p>Resume</p>
                                </div>
                                <button><i class="fa-solid fa-download"></i></button>
                            </div>
                            <div class="apply_date">
                                <p>Applied: 07 July, 2024</p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
 

    <script> 

    </script>


@endsection