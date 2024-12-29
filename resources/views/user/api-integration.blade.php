@extends('user.layouts.app')
@section('title', 'API Integration')
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
                            <h2>Develop and Integrate with <span>Scantranx API</span></h2> 
                            <p>Need to Integrate your existing solution or build a new one? Our simple yet powerful API allows you be in control of your data.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/API/banner.png')}} " alt="">
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

    <!--=====================  Start Quickbook Area  ====================--> 
    <section class="quickbook_area section_padding">
        <div class="container">
            <div class="quickbook_content">
                <div class="row gx-5 align-items-center">
                    <div class="col-md-6">
                        <div class="banner_left">
                            <h2>Develop custom app on Scantranx Platform</h2>
                            <p>Need more flexibility or want to be creative? Our developer friendly API offers you more than you can expect. Be creative and things will fall in line.</p> 
                            <p>We know how time consuming and overwhelming development could be without a good API and proper documentation. That is why we provide you with extensive <a href="#">documentation</a> and incase things get a bit tricky, just remember, we are available 24/7 to support.</p> 
                            <p>Check out <a href="#">Scantranx Rest API</a> for developing custom solutions on our platform.</p>   
                            <p>Send us email at <a href="mailto:support@scantranx.com">support@scantranx.com</a></p>   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/API/1.png')}} " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Quickbook Area  ====================-->  

    <!--=====================  Start Integration Area  ====================-->
    <section class="software_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>Your Ultimate <span>Retail</span> Toolkit</h2>
                <p>Empower your business with seamless integration, real-time insights, and responsive support. Discover how our platform’s extensive features transform your retail operations into a streamlined, data-driven experience.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/1.png')}} " alt="">
                        <h4>1 Retail Platform</h4>
                        <p>One comprehensive platform designed to streamline your retail operations, making management easier and more efficient.</p>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/2.png')}} " alt="">
                        <h4>100+ Merchant Integrations</h4>
                        <p>Seamlessly connect with over 100 merchant systems, enhancing compatibility and flexibility for your business needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/3.png')}} " alt="">
                        <h4>24hr Live Support</h4>
                        <p>Our dedicated support team is available 24/7 to assist you with any queries and ensure smooth operation.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/4.png')}} " alt="">
                        <h4>Real-Time Data Sync</h4>
                        <p>Instantly sync data across all your platforms, providing real-time updates for accurate inventory, sales, and customer information.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/5.png')}} " alt="">
                        <h4>Customizable Reports</h4>
                        <p>Generate tailored reports that provide deep insights into your business metrics, empowering you to make data-driven decisions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/6.png')}} " alt="">
                        <h4>99% Relative Update</h4>
                        <p>Stay updated with a 99% data accuracy rate, ensuring reliable insights and minimal discrepancies across your systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Integration Area  ====================-->  

    <!--=====================  Start Connectivity Area  ====================--> 
    <section class="connectivity_area section_padding">
        <div class="container">
            <div class="conntecitivity">
                <div class="section_title">
                    <h2>One Software, <span>Endless</span> Cloud Connectivity</h2>
                    <p>QuickBooks works in the cloud so you can access your business using any device and from anywhere. Access same information on your computer, iPad or Android tablet so you can stay productive on whichever device you use throughout your day.</p>
                    <a href="#" class="btn_2 free_demo_btn mt-5 open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section> 
    <!--=====================  End Connectivity Area  ====================-->  

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