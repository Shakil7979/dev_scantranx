@extends('user.layouts.app')
@section('title', 'Job Opening')
@section('custom-css')  

@endsection

@section('content')
  

    <!-- Modal for job --> 
    <div class="modal_main_job"> 
        <div class="login_modal">
            <div class="sk_modal_content">
                <div class="modal_header">
                    <div class="modal_title">  
                        <h3>Job Detail</h3> 
                    </div>
                    <button class="close_modal"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal_form">
                    <div class="job_details_content">
                        <div class="job_content_left job_content_date">
                            <h3>Software Engineer</h3>
                            <p>Full-time</p>
                            <div class="job_ul">
                                <ul>
                                    <li><img src="assets/images/job/Location.png" alt=""><p>Toronto, Canada</p></li>
                                    <li><img src="assets/images/job/Calendar.png" alt=""><p>1-2 year experience</p></li>
                                    <li><img src="assets/images/job/clock.png" alt=""><p>2day ago posted</p></li>
                                </ul>
                            </div>
                        </div> 
                        <div class="job_content_left">
                            <h3>Responsibilities:</h3> 
                            <ul class="job_for_requirements">
                                <li><p>Develop and maintain features for POS software.</p></li>
                                <li><p>Collaborate with UX/UI designers to implement user-friendly interfaces.</p></li>
                                <li><p>Optimize software performance and scalability.</p></li>
                                <li><p>Conduct code reviews and provide constructive feedback.</p></li> 
                            </ul> 
                        </div> 
                        <div class="job_content_left">
                            <h3>Qualifications:</h3> 
                            <ul class="job_for_requirements">
                                <li><p>Bachelor’s degree in Computer Science or related field.</p></li>
                                <li><p>Proficiency in Java, C#, or Python.</p></li>
                                <li><p>Experience with RESTful APIs and database management.</p></li>
                                <li><p>Strong problem-solving skills and attention to detail.</p></li> 
                            </ul> 
                        </div>   
                        <div class="job_content_left">
                            <h3>How to Apply:</h3> 
                            <p>To apply for the Software Engineer position, please send your CV and cover letter to [Your Email Address]. Include "Software Engineer Application - Canada" in the subject line.</p>
                        </div>    
                        <div class="job_requirement_btn">
                            <button class="btn_2 free_demo_btn apply_confirm">Apply <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>   
    </div>  

    <!-- Modal apply job --> 
    <div class="modal_main_apply_job"> 
        <div class="login_modal">
            <div class="sk_modal_content">
                <div class="modal_header">
                    <div class="modal_title">  
                        <h3>Apply For Job</h3> 
                    </div>
                    <button class="close_modal"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal_form">
                    <form action="#">
                        <div class="login_form"> 
                            <div class="form_group">
                                <input type="text" placeholder="Full name">
                                <i class="fa-regular fa-user"></i> 
                            </div> 
                            <div class="form_group"> 
                                <input type="text" placeholder="Location">
                                <i class="fa-solid fa-location-dot"></i>
                            </div> 
                            <div class="form_group">
                                <input type="email" placeholder="Email address">
                                <i class="fa-regular fa-envelope"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" placeholder="Linkedin (option)">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" placeholder="GitHub or Portfolio Link (optional)">
                                <i class="fa-solid fa-link"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" placeholder="Years of experience">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div> 
                            <div class="form_group">
                                <input type="text" placeholder="Field of study">
                                <i class="fa-solid fa-book"></i>
                            </div>  
                            <div class="form_group">
                                <textarea placeholder="A short summary on why you think are the best fit for this" name="" id=""></textarea>
                            </div>  
                            <div class="job_apply_file">
                                <div class="file-upload-wrapper">
                                    <label class="file-upload-box mb-0">
                                        <input type="file" class="file-upload-input" multiple>
                                        <div class="upload-content">
                                            <!-- <i class="fas fa-cloud-upload-alt upload-icon"></i> -->
                                             <img src="assets/images/job/Upload.png" alt="">
                                            <h5 class="mb-2">Upload Resume</h5> 
                                        </div>
                                    </label>
                                    <div class="file-list"> 
                                    </div>
                                </div> 
                            </div>
                            <div class="btn_login">
                                <button class="btn_2 free_demo_btn">Apply <i class="fa-solid fa-arrow-right"></i></button> 
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>   
    </div>   

    <main class="main_area"> 
        <!--=====================  Start Banner Area  ====================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="banner_left">
                                <h2>Come and Build your <span>career</span> with us. Explore Our <span>Job</span> Openings.</span></h2> 
                                <p>We recognize that our employees are central to the success of our company.</p> 
                                <div class="banner_btn mt-5">
                                    <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                    <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_img">
                                <img src="{{asset('user/assets/images/job/banner.png')}} " alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner_blur_1">
                <img src="{{asset('user/assets/images/home/banner/banner_blur_1.png')}} " alt="">
            </div>
            <div class="banner_blur_2">
                <img src="{{asset('user/assets/images/home/banner/banner_blur_2.png')}} " alt="">
            </div>
        </section>
        <!--=====================  End Banner Area  ====================--> 

        <!--=====================  Start Job Area  ====================-->  
        <section class="job_area section_padding">
            <div class="container">
                <div class="search_filter">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="search_input">
                                <div class="input_group">
                                    <input type="search" name="" placeholder="Search for jobs or keywords" id="">
                                    <img src="{{asset('user/assets/images/job/Search.png')}} " alt="">
                                </div>
                                <div class="search_input_btn">
                                    <button class="btn_2 free_demo_btn" type="submit">Search <i class="fa-solid fa-arrow-right"></i> </button> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search_filter_select">
                            <div class="single_filter">
                                    <select name="" id="">
                                        <option value="">Experience</option>
                                        <option value="">Experience</option>
                                        <option value="">Experience</option>
                                        <option value="">Experience</option>
                                    </select>
                                    <img src="{{asset('user/assets/images/job/Calendar.png')}} " alt="">
                            </div>
                            <div class="single_filter">
                                    <select name="" id="">
                                        <option value="">Date posted</option>
                                        <option value="">Date posted</option>
                                        <option value="">Date posted</option>
                                        <option value="">Date posted</option>
                                    </select>
                                    <img src="{{asset('user/assets/images/job/Calendar.png')}} " alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="job_serach_content">

                    <div class="job_serach_single">
                        <div class="job_content_left">
                            <h3>Software Engineer</h3>
                            <p>Full-time</p>
                            <div class="job_ul">
                                <ul>
                                    <li><img src="{{asset('user/assets/images/job/Location.png')}} " alt=""><p>Toronto, Canada</p></li>
                                    <li><img src="{{asset('user/assets/images/job/Calendar.png')}} " alt=""><p>1-2 year experience</p></li>
                                    <li><img src="{{asset('user/assets/images/job/clock.png')}} " alt=""><p>2day ago posted</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="job_right_btn">
                            <a href="#" class="btn_2 free_demo_btn" type="submit">Apply <i class="fa-solid fa-arrow-right"></i> </a> 
                        </div> 
                    </div>
                    

                    <div class="job_serach_single">
                        <div class="job_content_left">
                            <h3>Customer Support Specialist</h3>
                            <p>Full-time (Remote)</p>
                            <div class="job_ul">
                                <ul>
                                    <li><img src="{{asset('user/assets/images/job/Location.png')}} " alt=""><p>Toronto, Canada</p></li>
                                    <li><img src="{{asset('user/assets/images/job/Calendar.png')}} " alt=""><p>1-2 year experience</p></li>
                                    <li><img src="{{asset('user/assets/images/job/clock.png')}} " alt=""><p>2day ago posted</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="job_right_btn">
                            <a href="#" class="btn_2 free_demo_btn" type="submit">Apply <i class="fa-solid fa-arrow-right"></i> </a> 
                        </div> 
                    </div>

                    <div class="job_serach_single">
                        <div class="job_content_left">
                            <h3>Sales Executive</h3>
                            <p>Full-time</p>
                            <div class="job_ul">
                                <ul>
                                    <li><img src="{{asset('user/assets/images/job/Location.png')}} " alt=""><p>Toronto, Canada</p></li>
                                    <li><img src="{{asset('user/assets/images/job/Calendar.png')}} " alt=""><p>1-2 year experience</p></li>
                                    <li><img src="{{asset('user/assets/images/job/clock.png')}} " alt=""><p>2day ago posted</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="job_right_btn">
                            <a href="#" class="btn_2 free_demo_btn" type="submit">Apply <i class="fa-solid fa-arrow-right"></i> </a> 
                        </div> 
                    </div>

                </div>
            </div>
        </section>
        <!--=====================  End Job Area  ====================-->  

        <!--=====================  Start Operations Area  ====================--> 
        <section class="operation_area section_padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="operation_left">
                            <h3>Streamline your <span>operations</span> with Scantranx</h3>
                            <p>Make your restaurant prosperous with our cloud based restaurant management software.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="operation_btn"> 
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================  End Operations Area  ====================--> 

    </main>


            

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