@extends('admin.layouts.app')
@section('title', 'FAQ')
@section('custom-css') 
 

@endsection

@section('content')

    <div class="blog_listttt_content">
        <div class="content_header">
            <h3>Manage FAQ's</h3>
            <a href="#" class="btn_1 add_new_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New <i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="blog_details_area">  
            <div class="faq_area">
                @foreach ($blogs as $faq)
                    <!-- Single FAQ -->
                    <div class="faq_single">
                        <h3>{{ $faq->title }}</h3>
                        <p>{{ $faq->answer }}</p>
                        <div class="job_right_btn"> 
                            <button class="job_edit_delete_btn"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="job_edit_delete_box">
                                <ul>
                                    <li>
                                        <button class="edit_btn" data-id="{{$faq->id}}" data-url="{{ route('faq.edit.show', $faq->id) }}" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                            <img src="{{ asset('admin/assets/images/job/Edit.png') }}" alt="">
                                            <span>Edit</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="job_delete_btn" data-url-delete="{{ route('faq.destroy', $faq->id) }}">
                                            <img src="{{ asset('admin/assets/images/job/Delete.png') }}" alt="">
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

    </div>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add FAQ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal_form">
                <form action="{{ route('faq.store') }}" id="faq_form" method="POST">
                    @csrf
                    <div class="login_form">  
                        <div class="form_group">
                            <input type="text" name="title" placeholder="FAQ title">
                            <i class="fa-regular fa-user"></i> 
                        </div>  
                        <div class="form_group">
                            <textarea placeholder="FAQ Answer" name="answer" id=""></textarea>
                        </div>  
                        <div class="btn_login"> 
                            <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="faq_btn" onclick="_run(this)" data-el="fg" data-form="faq_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="faq_callback" data-btnid="faq_btn">Add FAQ <i class="fa-solid fa-arrow-right"></i></button> 
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
          <h5 class="modal-title" id="staticBackdropLabel">Update FAQ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal_form">
                <form action="{{ route('faq.update') }}" id="faq_update_form" method="POST">
                    <input type="hidden" name="id" class="blog_update_set_id">
                    @csrf
                    <div class="login_form">  
                        <div class="form_group">
                            <input type="text" name="title_update" class="title_update" placeholder="FAQ title">
                            <i class="fa-regular fa-user"></i> 
                        </div>  
                        <div class="form_group">
                            <textarea placeholder="FAQ Answer" name="answer_update" class="answer_update" id=""></textarea>
                        </div>  
                        <div class="btn_login"> 
                            <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="faq_update_btn" onclick="_run(this)" data-el="fg" data-form="faq_update_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="faq_update_callback" data-btnid="faq_update_btn">Update FAQ <i class="fa-solid fa-arrow-right"></i></button> 
                        </div>
                    </div>
                </form>
            </div>
        </div> 
      </div>
    </div>
  </div>

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
                Are you sure you want to delete this FAQ?
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


        function faq_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#faq_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("faq_form", data.errors);
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