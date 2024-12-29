@extends('user.layouts.app')
@section('title', 'Quickbook')
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
                            <h2>Integrate your <span>QuickBooks</span> Online Software with Scantranx POS for seamless data flow</h2> 
                            <p>Manage your business easily with Scantranx POS and QuickBooks online. Say goodbye to manual data entry into your QuickBooks accounting software.</p> 
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
                            <h2>Automatically Sync your Data with QuickBooks Online.</h2>
                            <p>Scantranx is well integrated with QuickBooks online to ensure you can manage your business easily. Scantranx is the simplest and easiest POS to manage your Retail Business with QuickBooks.</p>
                            <h5>Automatically Sync Sales with QuickBooks.</h5>
                            <p>All Sales records are sent to QuickBooks from the Scantranx POS in real-time. Whether a transaction occurred via e-commerce or InStore, Scantranx instantly send it to QuickBooks.</p>
                            <h5>Sync Invoices and Expenses with QuickBooks in Realtime.</h5>
                            <p>Invoices and Expenses records that are created from Scantranx are also sync with QuickBooks to simplify your accounting tasks.</p> 
                            <h5>Manage Vendors and Customers</h5>
                            <p>All Vendors and Customers records created in Scantranx are automatically sync to QuickBooks.</p>  
                            <h5>Simple and Seamless Integration</h5>
                            <p>Connecting Scantranx and QuickBooks online is very easy and straightforward, with just a click of button, your QuickBooks will be integrated with Scantranx seamlessly.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/quickbook/data.png')}} " alt="">
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
                <h2>Smart POS & <span>QuickBooks</span> Integration</h2>
                <p>Effortlessly link your POS with QuickBooks for seamless sales syncing, flexible data exports, and real-time financial insights—ideal for streamlined business management.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/1.png')}} " alt="">
                        <h4>Set up in minutes</h4>
                        <p>With single sign-on feature offered by QuickBooks, you can link your retail POS with your accounting software in just a few clicks.</p>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/2.png')}} " alt="">
                        <h4>Flexible</h4>
                        <p>You can choose to sync individual transactions or daily register summaries. You have total control over how details are exported from your POS to your accounting software.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/3.png')}} " alt="">
                        <h4>Automatic sync</h4>
                        <p>All sales are automatically imported from Hike into QuickBooks Online. You can also choose to sync historical data from your Hike account.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/4.png')}} " alt="">
                        <h4>Order Details</h4>
                        <p>Each sale, returns and refund transactions you export from Hike into QuickBooks Online will include all line items, taxes and discounts.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/5.png')}} " alt="">
                        <h4>Inventory sync</h4>
                        <p>Automatically send all product details & movements from Hike to QuickBooks including inventory levels, purchase orders, and inventory adjustments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/6.png')}} " alt="">
                        <h4>Financial Overview</h4>
                        <p>All payments and outstanding balances are tracked seamlessly, ensuring you have a clear, up-to-date view of your financials in both your POS and QuickBooks.</p>
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