@extends('user.layouts.app')
@section('title', 'About Us')
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
                            <h2>Award Winning Retail <span>Technology</span> company</span></h2> 
                            <p>We are IT solutions provider with world-class recognition. We pride ourselves in bringing innovative solutions for better and more effective business process across domains.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly ">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/about/banner.png')}} " alt="">
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
                            <h2>Award winning & Innovative Retail Technology Company</h2>
                            <p>Scantranx Technologies is an IT company with focus on Mobile Innovations, and customized software applications for the retail sector. We pride ourselves in bringing innovative solutions for better and more effective business process across domains.</p>
                            <p>Our platform helps retailers to reduce operational costs and enhance customer experience by adopting Omni-channel retailing in a simple and effective model. Scantranx seamlessly Integrates In-Store and online channels into single easy-to-use platform. Leveraging Artificial Intelligence, we help retailers to analyze data-sets from different sales channels so consumers can enjoy smooth and transparent shopping experience across touch-points.</p>   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/about/1.png')}} " alt="">
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

    <!--=====================  Start Mission Area  ====================-->
    <section class="mission_area section_padding">
        <div class="container">
            <div class="quickbook_content">
                <div class="row gx-5 align-items-center"> 
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/about/2.png')}} " alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_left mission_text">
                            <h2>Our Mission</h2>
                            <p>To create a highly cost effective, reliable, robust and flexible support system for retail businesses that meets global standards.</p>
                            <h5>Our Objectives</h5>
                            <ul>
                                <li><p>Provide the right tools necessary for the growth and improvement of retail business through continuous research, development and implementation.</p></li>
                                <li><p>
                                    Break-down barriers and improve accessibility to state-of-the-art ICT tools that would help retail businesses maximize their potential.</p></li>
                                <li><p>
                                    Improve the functionality of POS system through product upgrade and continuous integration with powerful tools required to drive retail business growth</p></li>
                            </ul>  
                            <div class="mission_btn">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_partner">
                <div class="section_title">
                    <h2>Our Partners</h2> 
                </div>
                <div class="partners_row">
                    <div class="partners_single">
                        <img src="{{asset('user/assets/images/about/partner/1.png')}} " alt="">
                    </div>
                    <div class="partners_single">
                        <img src="{{asset('user/assets/images/about/partner/2.png')}} " alt="">
                    </div>
                    <div class="partners_single">
                        <img src="{{asset('user/assets/images/about/partner/3.png')}} " alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>   
    <!--=====================  End Mission Area  ====================-->   

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