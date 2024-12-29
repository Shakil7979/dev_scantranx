@extends('user.layouts.app')
@section('title', 'Hardware')
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
                            <h2>Reliable, Rugged and Powerful Modern <span>POS Hardware</span></h2>
                            <p>Scantranx provides you with hassle free hardware at affordable prices. We will ship all the required hardware to get your business rolling directly to you. Already Got your own hardware? No Problem - Scantranx is compatible with most hardware in the market.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/hardware/banner.png')}} " alt="">
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

    <!--=====================  Start Hardware Area  ====================--> 
    <section class="hardware_area section_padding">
        <div class="container">
            <div class="hardwarea">
                <div class="section_title">
                    <h2>One Software, Endless <span>Device</span> Support</h2>
                    <p>Our POS supports a range of devices—Android screens, thermal printers, and more—for a fully integrated retail experience.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="single_ware">
                            <div class="hardware_img">
                                <img src="{{asset('user/assets/images/hardware/1.png')}} " alt="">
                            </div>
                            <div class="hardware_content">
                                <h4>Android POS Hardware</h4>
                                <ul> 
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>15 inches Touch Screen</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Dual Screen</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Rugged & Dust Proof</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Android OS</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_ware">
                            <div class="hardware_img">
                                <img src="{{asset('user/assets/images/hardware/2.png')}} " alt="">
                            </div>
                            <div class="hardware_content">
                                <h4>Thermal Receipt Printer</h4>
                                <ul>  
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p> USB Connectivity</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Highly Durable</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Rugged & Dust Proof</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>High Speed Printing</p></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_ware">
                            <div class="hardware_img">
                                <img src="{{asset('user/assets/images/hardware/3.png')}} " alt="">
                            </div>
                            <div class="hardware_content">
                                <h4>2D Barcode Scanner</h4>
                                <ul>   
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Supports 1D/2D Barcodes</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Buzzer</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Plug and Play</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Fast Recognition</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_ware">
                            <div class="hardware_img">
                                <img src="{{asset('user/assets/images/hardware/4.png')}} " alt="">
                            </div>
                            <div class="hardware_content">
                                <h4>Card Reader (Verifone P400)</h4>
                                <ul>    
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>EMV Enabled</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Accepts Mobile Wallets</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>NFC Enabled</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Capacitive Touch screen</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_ware">
                            <div class="hardware_img">
                                <img src="{{asset('user/assets/images/hardware/5.png')}} " alt="">
                            </div>
                            <div class="hardware_content">
                                <h4>Tablet POS</h4>
                                <ul>     
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>10" Touch Screen</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Android OS</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Rugged & Dust Proof</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Includes Printer & Scanner</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_ware">
                            <div class="hardware_img">
                                <img src="{{asset('user/assets/images/hardware/6.png')}} " alt="">
                            </div>
                            <div class="hardware_content">
                                <h4>SumUp Bluetooth Card Reader</h4>
                                <ul>      
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Contactless Payments</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Highly Durable</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Supports Chip & Magstripe</p></li>
                                    <li><img src="{{asset('user/assets/images/hardware/check.png')}} " alt=""><p>Bluetooth Connectivity</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hardware_blur">
            <img src="{{asset('user/assets/images/hardware/blur.png')}} " alt="">
        </div>
    </section>
    <!--=====================  End Hardware Area  ====================-->  

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