@extends('admin.layouts.app')
@section('title', 'Job Details')
@section('custom-css') 

<style>
    .d-none {
        display: none;
    }

    .see-more-btn {
        background: none;
        border: none;
        color: #007bff;
        cursor: pointer;
        text-decoration: underline;
        padding: 0;
    }

</style>


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
                                        @if($job_count == 0)
                                            0 Applied
                                        @else
                                            {{ $job_count }} Applied
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
                        <h3>{{ $job->job_title }}</h3>
                        <p>
                            @if($job_count == 0)
                                0 Applied
                            @else
                                {{ $job_count }} Applied
                            @endif
                        </p>
                    </div> 
                    
                    <div class="apply_candidate">
                        @foreach ($applications as $application)
                            <div class="single_candidate">
                                <div class="single_candidate_header">
                                    <img src="{{ asset('admin/assets/images/job/candidate/user.png') }}" alt="">
                                    <div class="candidate_info">
                                        <h3>{{ $application->full_name }}</h3>
                                        <p>{{ $application->location }}</p>
                                        <p>{{ $application->email }}</p>
                                    </div>
                                </div> 
                                <p>
                                    @php
                                        $words = explode(' ', $application->summary);
                                    @endphp
                                    @if (count($words) > 20)
                                        <span class="summary-short">{{ implode(' ', array_slice($words, 0, 20)) }}...</span>
                                        <span class="summary-full d-none">{{ $application->summary }}</span>
                                        <button class="see-more-btn" onclick="toggleSummary(this)">See More</button>
                                    @else
                                        {{ $application->summary }}
                                    @endif
                                </p>
                                <div class="candi_file">
                                    <div class="candi_file_name">
                                        <i class="fa-solid fa-file"></i>
                                        <p>Resume</p>
                                    </div> 
                                    <button>
                                        <a href="{{ asset($application->resume_path) }}" download>
                                            <i class="fa-solid fa-download"></i>
                                        </a>
                                    </button>
                                </div>
                                <div class="apply_date">
                                    <p>Applied: {{ $application->created_at->format('d M, Y') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    

                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
 

    <script> 
        function toggleSummary(button) {
            const summaryShort = button.previousElementSibling.previousElementSibling;
            const summaryFull = button.previousElementSibling;

            if (summaryFull.classList.contains('d-none')) {
                summaryShort.classList.add('d-none');
                summaryFull.classList.remove('d-none');
                button.textContent = 'See Less';
            } else {
                summaryShort.classList.remove('d-none');
                summaryFull.classList.add('d-none');
                button.textContent = 'See More';
            }
        }

    </script>


@endsection