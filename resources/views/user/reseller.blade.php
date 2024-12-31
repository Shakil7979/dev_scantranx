@extends('user.layouts.app')
@section('title', 'Reseller')
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
                            <h2>Become Our <span>Reseller</span> today!</span></h2> 
                            <p>Partner with us to grow your business by reselling our technology worldwide. Get the opportunity to resell and work with an Innovative retail-technology company. We provide all support needed to set you up for success.Complete the Partner Application form below to get started.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/reseller/banner.png')}} " alt="">
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
    <section class="partner_form section_padding">
        <div class="container">
            <div class="section_title">
                <h2>Fill Partner Form</h2>
                <p>Partner with us to grow your business by reselling our technology worldwide.</p>
            </div>
            <div class="partner_form">
                <form action="{{ route('reseller.store') }}" id="reseller_form" method="POST">
                    @csrf
                    <div class="login_form"> 
                        <div class="form_group">
                            <input type="text" name="account_name" placeholder="Account name" required>
                            <i class="fa-regular fa-user"></i> 
                        </div> 
                        <div class="form_group">
                            <input type="text" name="company_name" placeholder="Company name" required>
                            <i class="fa-regular fa-envelope"></i>
                        </div>  
                        <div class="form_group">
                            <input type="text" name="phone_number" placeholder="Phone number" required>
                            <i class="fa-solid fa-phone"></i>
                        </div> 
                        <div class="form_group">
                            <input type="email" name="email" placeholder="Enter email" required>
                            <i class="fa-regular fa-envelope"></i>
                        </div> 
                        <div class="form_group"> 
                            <select name="reason" required>
                                <option value="">Select a reason</option>
                                <option value="I want to resell Scantranx solutions">I want to resell Scantranx solutions</option>
                                <option value="Other">Other</option>
                            </select>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="form_group"> 
                            <select name="country" required>
                                <option value="">Select a country</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="India">India</option>
                            </select>
                            <i class="fa-solid fa-location-dot"></i>
                        </div> 
                        <div class="btn_login">  
                            <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="reseller_btn" onclick="_run(this)" data-el="fg" data-form="reseller_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="reseller_callback" data-btnid="reseller_btn">Submit <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
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


        function reseller_callback(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                $('#reseller_form')[0].reset();
                setTimeout(function() {
                    window.location.reload(); 
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("reseller_form", data.errors);
            }
        } 

    </script>


@endsection