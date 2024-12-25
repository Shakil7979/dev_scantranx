@extends('admin.layouts.app')
@section('title', 'Blog List')
@section('custom-css') 

<style>
    .file-upload-box .error-msg {
        position: absolute;
        bottom: -21px;
        left: 0;
    }
</style>

@endsection

@section('content')

    <div class="blog_listttt_content">
        <div class="content_header">
            <h3>Manage Blog</h3>
            <a href="#" class="btn_1 add_new_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New <i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="blog_details_area"> 
            <div class="row g-4">  
                @foreach ($blogs as $blog)  
                    
                    <div class="col-md-4">
                        <div class="single_blog_item">
                            <div class="blog_single_img">
                                <img src="{{ asset($blog->image_path) }}" alt="Blog Image">
                                <a href="#">{{ $blog->category }}</a>
                                <div class="job_right_btn"> 
                                    <button class="job_edit_delete_btn">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="job_edit_delete_box">
                                        <ul>
                                            <li>
                                                <button>
                                                    <img src="{{ asset('admin/assets/images/job/Edit.png') }}" alt="">
                                                    <span>Edit</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button>
                                                    <img src="{{ asset('admin/assets/images/job/Delete.png') }}" alt="">
                                                    <span>Delete</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_info">
                                <span>{{ $blog->created_at->format('d M, Y') }} - {{ $blog->created_at->diffForHumans() }}</span> 
                                <h3>{{ $blog->title }}</h3>
                                <p>{{ Str::limit($blog->description, 150, '...') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach  
            </div>
        </div>

    </div>

      <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Create Blog</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="modal_form">
                <form action="{{ route('blog.post') }}" id="blog_post_form" method="POST" enctype="multipart/form-data">

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
                            <input type="text" name="title" placeholder="Blog title">
                            <i class="fa-regular fa-user"></i> 
                        </div>  
                        <div class="form_group"> 
                            <select name="category" id="">
                                <option value="" disabled selected>Category</option>  
                                <option value="Business">Business</option>  
                                <option value="Retail">Retail</option>  
                                <option value="E-commerce">E-commerce</option>  
                            </select> 
                            <i class="fa-solid fa-location-dot"></i>
                        </div>  
                        <div class="form_group">
                            <textarea name="description" placeholder="Write detail description for blog" name="" id=""></textarea>
                        </div>  
                        <div class="btn_login">  
                            <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="blog_post_btn" onclick="_run(this)" data-el="fg" data-form="blog_post_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="blog_post_callback" data-btnid="blog_post_btn">Create Blog <i class="fa-solid fa-arrow-right"></i></button> 
 
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


        function blog_post_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#blog_post_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("blog_post_form", data.errors);
            }
        }


    </script>


@endsection