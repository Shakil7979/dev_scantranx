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
                <div class="col-md-4">
                    <div class="single_blog_item">
                        <div class="blog_single_img">
                            <img src="{{asset('admin/assets/images/blog/1.png')}}" alt="">
                            <a href="#">Business</a>
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
                        <div class="blog_info">
                            <span>21 Oct, 2024 - 5min Reading</span>
                            <h3>How modern POS solutions streamline business operations.</h3>
                            <p>Point-of-sale (POS) software is a comprehensive solution for your business that allows you to process payments, manage and collect customer information, update inventory, and build a loyal customer base. </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_blog_item">
                        <div class="blog_single_img">
                            <img src="{{asset('admin/assets/images/blog/2.png')}}" alt="">
                            <a href="#">Retail</a>
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
                        <div class="blog_info">
                            <span>17 Aug, 2024 - 6min Reading</span>
                            <h3>Cloud-Based POS Software for Retailers: A Complete Guide</h3>
                            <p>Retailers are faced with a variety of challenges that can make it challenging to stay competitive. These challenges include managing inventory, hiring the right staff, and making sure your customers are happy.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_blog_item">
                        <div class="blog_single_img">
                            <img src="{{asset('admin/assets/images/blog/3.png')}}" alt="">
                            <a href="#">E-commerce</a>
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
                        <div class="blog_info">
                            <span>17 Aug, 2024 - 6min Reading</span>
                            <h3>Scantranx Named amongst the best eCommerce Companies in New Brunswick by Best Startup Canada.</h3>
                            <p>We are thrilled to announce we have been featured in the Best Startup Canada Magazine as one of the top e-Commerce Companies in New Brunswick, Canada. </p>
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
                                    <input type="file" name="files[]" class="file-upload-input" multiple="">
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
                            <button type="button"  class="btn_2 free_demo_btn" id="blog_post_btn" onclick="_run(this)" data-el="fg" data-form="blog_post_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="blog_post_callback" data-btnid="blog_post_btn">Create Blog <i class="fa-solid fa-arrow-right"></i></button> 
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