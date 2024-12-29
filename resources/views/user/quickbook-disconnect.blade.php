@extends('user.layouts.app')
@section('title', 'Quickbook Disconnect')
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
                            <h2>QuickBooks Integration <span>Disconnected</span></h2> 
                            <p>Your QuickBooks online integration has been disconnected. You will no longer be able to sync all business data from Scantranx to QuickBooks accounting platform.</p>
                            <p>If you would like to re-connect your Scantranx POS with QuickBooks, please follow the guide here</p> 
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

    <!--=====================  Start Quickbook Disconnect Area  ====================-->  
    <section class="quick_disc_area section_padding">

    </section>
    <!--=====================  End Quickbook Disconnect Area  ====================-->  
    
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