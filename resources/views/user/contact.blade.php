@extends('user.layouts.app')
@section('title', 'Contact')
@section('custom-css')  

@endsection

@section('content')

<main class="main_area"> 
    <!--=====================  Start Banner Area  ====================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="banner_left">
                            <h2>We want to <span>hear</span> from you!</h2> 
                            <p>Leave your details and a member of our team will reach out within 24hrs.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/contact/banner.png')}} " alt="">
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

    <!--=====================  Start Partner Form Area  ====================-->  
    <section class="contact_us_area section_padding">
        <div class="container">
            <div class="mail_numbner">
                <ul>
                    <li><a href="mailto:support@scantranx.com"><i class="fa-regular fa-envelope"></i> support@scantranx.com</a></li>
                    <li><a href="tel:703-701-9964"><i class="fa-solid fa-phone"></i> 703-701-9964</a></li>
                    <li><a href="#">
                        <i class="fa-solid fa-location-dot"></i> 1867 Eglinton Avenue, Toronto, Ontario</a></li>
                </ul>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact_form">
                        <form action="#">
                            <div class="login_form"> 
                                <div class="form_group">
                                    <input type="text" placeholder="Account name">
                                    <i class="fa-regular fa-user"></i> 
                                </div>  
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form_group">
                                            <input type="text" placeholder="Phone number">
                                            <i class="fa-solid fa-phone"></i>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form_group">
                                            <input type="email" placeholder="Enter email">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div> 
                                    </div>
                                </div> 
                                <div class="form_group">
                                    <textarea placeholder="Write message" name="" id=""></textarea>
                                </div> 
                                <div class="btn_login">
                                    <button type="submit" class="btn_2 free_demo_btn">Send Message <i class="fa-solid fa-arrow-right"></i></button>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact_img">
                        <img src="{{asset('user/assets/images/contact/1.png')}} " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Partner Form Area  ====================-->    

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