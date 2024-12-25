@extends('admin.layouts.app')
@section('title', 'Testimonial')
@section('custom-css') 
 

@endsection

@section('content')

    <div class="blog_listttt_content">
        <div class="content_header">
            <h3>Manage Testimonial</h3>
            <a href="#" class="btn_1 add_new_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New <i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="blog_details_area"> 
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="assets/images/testimonial/customer/1.png" alt="">
                        </div> 
                        <div class="customer_content">
                            <p>"The best platform to manage all restaurant POS in one place. Very user-friendly and easily operative software. Provides all types of required data and reports in real-time that helps a lot in analyzing the growth and sales of the restaurants." </p>
                            <div class="customer_name">
                                <h5>Henry Jack</h5>
                                <span>Senior Manage IT, Belgian Waffer Co.</span>
                            </div>
                        </div>
                        <div class="job_right_btn"> 
                            <button class="job_edit_delete_btn"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="job_edit_delete_box">
                                <ul>
                                    <li><button><img src="assets/images/job/Edit.png" alt=""><span>Edit</span></button></li>
                                    <li><button><img src="assets/images/job/Delete.png" alt=""><span>Delete</span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="assets/images/testimonial/customer/2.png" alt="">
                        </div> 
                        <div class="customer_content">
                            <p>"Earlier the stock management tool that we were using didn’t show us the data in real-time, it used to take one full day to fetch that data. With Restroworks, we can check this data in real time, which helps us to place orders for raw materials efficiently." </p>
                            <div class="customer_name">
                                <h5>Micheal Noah</h5>
                                <span>CEO & Co-founder, Taco Bell Pvt Ltd.</span>
                            </div>
                        </div>
                        <div class="job_right_btn"> 
                            <button class="job_edit_delete_btn"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="job_edit_delete_box">
                                <ul>
                                    <li><button><img src="assets/images/job/Edit.png" alt=""><span>Edit</span></button></li>
                                    <li><button><img src="assets/images/job/Delete.png" alt=""><span>Delete</span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="assets/images/testimonial/customer/2.png" alt="">
                        </div> 
                        <div class="customer_content">
                            <p>"Earlier the stock management tool that we were using didn’t show us the data in real-time, it used to take one full day to fetch that data. With Restroworks, we can check this data in real time, which helps us to place orders for raw materials efficiently." </p>
                            <div class="customer_name">
                                <h5>Micheal Noah</h5>
                                <span>CEO & Co-founder, Taco Bell Pvt Ltd.</span>
                            </div>
                        </div>
                        <div class="job_right_btn"> 
                            <button class="job_edit_delete_btn"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="job_edit_delete_box">
                                <ul>
                                    <li><button><img src="assets/images/job/Edit.png" alt=""><span>Edit</span></button></li>
                                    <li><button><img src="assets/images/job/Delete.png" alt=""><span>Delete</span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Testimonial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal_form">
                <form action="#">
                    <div class="login_form"> 
                        <div class="job_apply_file">
                            <div class="file-upload-wrapper">
                                <label class="file-upload-box mb-0">
                                    <input type="file" class="file-upload-input" multiple="">
                                    <div class="upload-content"> 
                                         <img src="assets/images/job/Upload.png" alt="">
                                        <h5 class="mb-2">Upload Brand Logo</h5> 
                                    </div>
                                </label>
                                <div class="file-list"> 
                                </div>
                            </div> 
                        </div>
                        <div class="form_group">
                            <input type="text" placeholder="Person name">
                            <i class="fa-regular fa-user"></i> 
                        </div>    
                        <div class="form_group">
                            <input type="text" placeholder="Designation i.e Co-founder Taco Bell Pvt Ltd">
                            <i class="fa-regular fa-user"></i> 
                        </div>    
                        <div class="form_group">
                            <textarea placeholder="Write testimonial" name="" id=""></textarea>
                        </div>  
                        <div class="btn_login">
                            <button type="submit" class="btn_2 free_demo_btn">Add <i class="fa-solid fa-arrow-right"></i></button>  
                        </div>
                    </div>
                </form>
            </div>
        </div> 
      </div>
    </div>
  </div>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Testimonial</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal_form">
                <form action="#" id="test_post_form" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="login_form"> 
                        <div class="job_apply_file">
                            <div class="file-upload-wrapper">
                                <label class="file-upload-box mb-0">
                                    <input type="file" name="file" class="file-upload-input">
                                    <div class="upload-content">  
                                         <img src="{{asset('admin/assets/images/job/Upload.png')}}" alt="">
                                        <h5 class="mb-2">Upload Resume</h5> 
                                    </div>
                                </label>
                                <div class="file-list"> 
                                </div>
                            </div> 
                        </div>
                        <div class="form_group">
                            <input type="text" name="name" placeholder="Person name">
                            <i class="fa-regular fa-user"></i> 
                        </div>    
                        <div class="form_group">
                            <input type="text" name="designation" placeholder="Designation i.e Co-founder Taco Bell Pvt Ltd">
                            <i class="fa-regular fa-user"></i> 
                        </div>    
                        <div class="form_group">
                            <textarea placeholder="Write testimonial" name="testimonial" id=""></textarea>
                        </div>  
                        <div class="btn_login">  
                            <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="test_post_btn" onclick="_run(this)" data-el="fg" data-form="test_post_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="test_post_callback" data-btnid="test_post_btn">Add <i class="fa-solid fa-arrow-right"></i></button> 
 
                        </div>
                    </div>
                </form>
            </div>
        </div> 
      </div>
    </div>
  </div>
  
  
@endsection

@section('script')
 

    <script>   

        function test_post_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#test_post_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("test_post_form", data.errors);
            }
        }

        function faq_update_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#faq_update_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("faq_update_form", data.errors);
            }
        }

        // edit blog  
        $('.edit_btn').on('click', function () {
            var blog_id = $(this).data('id');
            $('.blog_update_set_id').val(blog_id);
            var url = $(this).data('url'); 
            // console.log(url);

            $.ajax({
                url: url,
                method: 'GET',
                success: function (response) {
                    populateBlogForm(response.data);  
                },
                error: function (xhr, status, error) { 
                    alert('Failed to fetch faq data. Please try again.');
                }
            });
        }); 

        // Function to populate the form fields
        function populateBlogForm(blogData) {    
            $('.answer_update').val(blogData.answer); 
            $('.title_update').val(blogData.title);   
            $('.blog_update_set_id').val(blogData.id);
        }


        // delete FAQ 
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
                        alert("An error occurred while trying to delete the faq. Please try again.");
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