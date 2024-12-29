@extends('user.layouts.app')
@section('title', 'Stripe')
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
                            <h2>Easy and Seamless <span>Stripe Integration</span> with Scantranx POS to accept payments for online and in-store sales.</h2> 
                            <p>Accept payment easily with Scantranx POS and Stripe. Start accepting card payments in minutes from your online store.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/quickbook/banner.png')}} " alt="">
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
                            <h2>Accept secure and modern payment methods.</h2>
                            <p>Stripe is a technology company that builds economic infrastructure for the internet. Businesses of every size use Stripe to accept payments and manage their businesses online.</p>
                            <h5>Get started in minutes.</h5>
                            <p>Getting started with Stripe is very easy from Scantranx. Scantranx has a seamless integration with stripe to ensure you can setup your required payment solution in just few minutes.</p>
                            <h5>Sell Globally.</h5>
                            <p>You can accept payments in multiple currencies across the globe and increase your sales. All currency conversions are automatically processed securely by Stripe.</p>  
                            <h5>Highly Secure</h5>
                            <p>All transactions are secured and processed with high grade security.</p>   
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/stripe/1.png')}} " alt="">
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
                <h2>Power Up Your Business with Stripe Integration</h2>
                <p>Seamlessly accept payments, streamline operations, and boost your bottom line with our Stripe integration.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/1.png')}} " alt="">
                        <h4>Global Reach, Local Expertise</h4>
                        <p>Accept payments from customers worldwide with support for multiple currencies and payment methods.</p>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/2.png')}} " alt="">
                        <h4>Lightning-Fast Transactions</h4>
                        <p>Process payments instantly, reducing wait times and improving customer satisfaction.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/3.png')}} " alt="">
                        <h4>Ironclad Security</h4>
                        <p>Safeguard your business and customer data with industry-leading security standards and fraud prevention tools.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/4.png')}} " alt="">
                        <h4>Smart Insights, Smarter Decisions</h4>
                        <p>Gain valuable insights into your sales and customer behavior with detailed analytics and reporting.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/5.png')}} " alt="">
                        <h4>Customizable Checkout</h4>
                        <p>Create a personalized checkout experience that matches your brand and drives conversions.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/6.png')}} " alt="">
                        <h4>24/7 Support</h4>
                        <p>Get dedicated support from our team of experts to help you with any questions or issues.</p>
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