@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('custom-css') 



@endsection

@section('content')

    <div class="dashboard_content">
        <div class="content_header">
            <h3>Manage Job</h3>
            <a href="#" class="btn_1 add_new_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New <i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="job_serach_content"> 

            @foreach ($jobs as $job)
            <div class="job_serach_single">
                <div class="job_content_left">
                    <a href="{{ route('job.show', $job->id) }}">{{ $job->job_title }}</a>
                    <p>{{ $job->job_nature }}</p>
                    <div class="job_ul">
                        <ul>
                            <li><img src="assets/images/job/Location.png" alt=""><p>{{ $job->location }}</p></li>
                            <li><img src="assets/images/job/Calendar.png" alt=""><p>{{ $job->experience }} years experience</p></li>
                            <li><img src="assets/images/job/clock.png" alt=""><p>{{ $job->created_at->diffForHumans() }}</p></li>
                        </ul>
                    </div>
                </div>
                <div class="job_right_text">
                    <p>{{ $job->application_count  ?? '0' }} Applied</p>
                </div> 
                <div class="job_right_btn"> 
                    <button class="job_edit_delete_btn"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                    <div class="job_edit_delete_box">
                        <ul>
                            <li>
                                <button class="edit_btn" data-url="{{ route('job.edit', $job->id) }}" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" job_id="{{$job->id}}">
                                    <img src="assets/images/job/Edit.png" alt="">
                                    <span>Edit</span>
                                </button>
                            </li>
                            <li>
                                <button class="job_delete_btn" data-url-delete="{{ route('job.destroy', $job->id) }}">
                                    <img src="assets/images/job/Delete.png" alt="">
                                    <span>Delete</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Create Job</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_form">
                    <form action="{{ route('job.store') }}" id="job_store_form" method="POST">
                        @csrf
                        <div class="login_form"> 
                            <div class="form_group">
                                <input type="text" name="job_title" placeholder="Job title" required>
                                <i class="fa-regular fa-user"></i> 
                            </div>  
                            <div class="form_group"> 
                                <select name="job_nature" id="" required>
                                    <option value="" disabled selected>Job nature i.e full time</option> 
                                    <option value="Full Time">Full Time</option> 
                                    <option value="Part Time">Part Time</option> 
                                    <option value="Remote">Remote</option>  
                                </select>
                                <i class="fa-solid fa-location-dot"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" name="location" placeholder="Location" required>
                                <i class="fa-solid fa-location-dot"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" name="experience" placeholder="Years of experience" required>
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>  
                            <div class="form_group">
                                <textarea name="summary" placeholder="A short summary on why you think are the best fit for this" required></textarea>
                            </div> 
                            <div class="form_group">
                                <textarea name="qualifications" placeholder="Write Qualification Required using bullet point" required></textarea>
                            </div> 
                            <div class="form_group text_area_create_job">
                                <textarea name="application_instructions" placeholder="To apply for the Software Engineer position, please send your CV and cover letter to [Your Email Address]. Include 'Software Engineer Application - Canada' in the subject line." required></textarea>
                            </div> 
                            <div class="btn_login">  
                                <button type="button" class="btn_2 free_demo_btn" id="job_store_btn" onclick="_run(this)" data-el="fg" data-form="job_store_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="job_store_callback" data-btnid="job_store_btn">Create Job <i class="fa-solid fa-arrow-right"></i></button> 
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div> 
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Create Job</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_form">
                    <form action="{{ route('job.update') }}" id="job_update_form" method="POST">
                        @csrf
                        <input type="hidden" name="id" class="job_update_set_id" value="">
                        <div class="login_form"> 
                            <div class="form_group">
                                <input type="text" name="job_title" class="job_title_update" placeholder="Job title" required>
                                <i class="fa-regular fa-user"></i> 
                            </div>  
                            <div class="form_group"> 
                                <select name="job_nature" id="" class="job_nature_update" required>
                                    <option value="" disabled selected>Job nature i.e full time</option> 
                                    <option value="Full Time">Full Time</option> 
                                    <option value="Part Time">Part Time</option> 
                                    <option value="Remote">Remote</option>  
                                </select>
                                <i class="fa-solid fa-location-dot"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" class="location_update" name="location" placeholder="Location" required>
                                <i class="fa-solid fa-location-dot"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" class="experience_update" name="experience" placeholder="Years of experience" required>
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>  
                            <div class="form_group">
                                <textarea name="summary" class="summary_update" placeholder="A short summary on why you think are the best fit for this" required></textarea>
                            </div> 
                            <div class="form_group">
                                <textarea name="qualifications" class="qualifications_update" placeholder="Write Qualification Required using bullet point" required></textarea>
                            </div> 
                            <div class="form_group text_area_create_job">
                                <textarea name="application_instructions" class="application_instructions_update" placeholder="To apply for the Software Engineer position, please send your CV and cover letter to [Your Email Address]. Include 'Software Engineer Application - Canada' in the subject line." required></textarea>
                            </div> 
                            <div class="btn_login">  
                                <button type="button" class="btn_2 free_demo_btn" id="job_update_btn" onclick="_run(this)" data-el="fg" data-form="job_update_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="job_update_callback" data-btnid="job_update_btn">Update Job <i class="fa-solid fa-arrow-right"></i></button> 
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div> 
          </div>
        </div>
      </div>

      <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this job?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
 

<script>
    function job_store_callback(data){
        if (data.status == true) {
            notify('success', data.message, 'Success');
            $('#job_store_form')[0].reset();
            setTimeout(function() {
                window.location.reload(); 
            }, 1000 * 2);
        } else {
            notify('error', data.message, 'Error');
            $.validator("job_store_form", data.errors);
        }
    }
    
    function job_update_callback(data){
        if (data.status == true) {
            notify('success', data.message, 'Success');
            setTimeout(function() {
                window.location.reload(); 
            }, 1000 * 2);
        } else {
            notify('error', data.message, 'Error');
            $.validator("job_update_form", data.errors);
        }
    }
 
    $('.edit_btn').on('click', function () {
        var jobId = $(this).data('job_id');
        $('.job_update_set_id').val(jobId);
        var url = $(this).data('url');

        $.ajax({
            url: url,
            method: 'GET',
            success: function (response) {
                populateJobForm(response.data);
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', error);
                alert('Failed to fetch job data. Please try again.');
            }
        });
    }); 

    // Function to populate the form fields
    function populateJobForm(jobData) { 
        $('.job_update_set_id').val(jobData.id);  
        $('.job_title_update').val(jobData.job_title);
        $('.location_update').val(jobData.location);
        $('.experience_update').val(jobData.experience);
        $('.summary_update').val(jobData.summary);
        $('.qualifications_update').val(jobData.qualifications);
        $('.application_instructions_update').val(jobData.application_instructions); 
        $('.job_nature_update').val(jobData.job_nature);
    }


    // job delete 
    var deleteUrl = ''; // Variable to store the URL dynamically

    // When the delete button is clicked
    $(document).on('click', '.job_delete_btn', function (e) {
        e.preventDefault(); // Prevent default behavior

        deleteUrl = $(this).attr('data-url-delete'); // Get the URL from the data attribute

        // Show the Bootstrap modal
        $('#deleteConfirmationModal').modal('show');
    });

    // When the "Delete" button in the modal is clicked
    $(document).on('click', '#confirmDeleteButton', function () {
        if (deleteUrl) {
            $.ajax({
                url: deleteUrl,  // Use the dynamic URL
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for Laravel
                },
                success: function (response) {
                    $('#deleteConfirmationModal').modal('hide'); // Hide the modal 
                    if (response.status) {
                        notify('success', response.message, 'Success');
                        setTimeout(function() {
                            window.location.reload(); 
                        }, 1000 * 2);
                    } else {
                        notify('error', response.message, 'Error'); 
                    }
                },
                error: function (xhr, status, error) {
                    $('#deleteConfirmationModal').modal('hide'); // Hide the modal
                    console.error('AJAX Error:', error);

                    // Show error alert
                    alert("An error occurred while trying to delete the job. Please try again.");
                }
            });
        }
    });

    // Function to display Bootstrap alerts dynamically
    function showAlert(type, message) {
        var alertHtml = `
            <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `;
        $('body').prepend(alertHtml); // Append alert to the top of the page

        // Automatically hide the alert after 3 seconds
        setTimeout(function () {
            $('.alert').alert('close');
        }, 3000);
    }

    $(document).on('click', '.close, .btn-secondary', function () {
        $('#deleteConfirmationModal').modal('hide');
    });






</script>


@endsection