@extends('user.layouts.app')
@section('title', 'Home V2')
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
                            <h2>Grow your <span>business</span> faster with a Cloud-Based Omnichannel POS and e-Commerce solution.</h2>
                            <p>Empower your retail business with Scantranx, an omnichannel point of sale software that streamline your operations in the cloud. </p>
                            <p>Increase sales. Reduce costs. Enhance Customer Experience</p>
                            <h5>Trusted by 20,000+ customer globally</h5>
                            <div class="banner_btn">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div>
                            <div class="banner_intergrates">
                                <ul>
                                    <li class="integrate_with"><p>Integrates With:</p></li>
                                    <li><img src="{{asset('user/assets/images/home/banner/1.png')}} " alt=""></li>
                                    <li><img src="{{asset('user/assets/images/home/banner/2.png')}} " alt=""></li>
                                    <li><img src="{{asset('user/assets/images/home/banner/3.png')}} " alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img home_page_bnr_img">
                            <img src="{{asset('user/assets/images/home/banner/banner.png')}} " alt="">
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

    <!--=====================  Start Business Area  ====================--> 
    <section class="business_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>One Software for all your <span>Business</span> needs</h2>
                <p>A Complete POS & E-commerce Management Software. Designed & developed for businesses in different sectors!</p>
            </div>
        </div>
        <div class="business_retail_video"> 
            <iframe  src="https://www.youtube.com/embed/HkvqZ5vKctY?si=Yt1tJmQ2TxAf4A5w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="our_platform_area">
            <div class="container">
                <div class="section_title">
                    <h2>Our platform empowers restaurant operators with control, visibility and insights in making the <span>right decisions</span> to improve bottom-line efficiency.
                        Get Free Demo</h2> 
                    <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>    
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Business Area  ====================-->  

    <!--=====================  Start Software Area  ====================--> 
    <section class="software_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>One Software for all your <span>Business</span> needs</h2>
                <p>A Complete POS & E-commerce Management Software. Designed & developed for businesses in different sectors!</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/1.png')}} " alt="">
                        <h4>Smart Inventory Management</h4>
                        <p>Manage Inventory across your Warehouse, Brick-and-Mortar and online stores from a centralized dashboard and sync in real-time. No more tedious task of managing inventory.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/2.png')}} " alt="">
                        <h4>Integrated Loyalty Program</h4>
                        <p>Built-In Customer Loyalty Plan, All from your POS - No Additional Hardware or Software required. Scantranx Loyalty Plan works both In-Store and Online.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/3.png')}} " alt="">
                        <h4>Omnichannel POS</h4>
                        <p>Convert all Touchpoints to Sales. Sell In-Store, online, Mobile and Third-party market place with just one retail software - No Plugins or Expensive Add-ons required.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/4.png')}} " alt="">
                        <h4>Easy Marketing</h4>
                        <p>Enjoy stress free marketing with our Integrated campaign tools, you can easily communicate with your customers about any special offers and increase customer retention.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/5.png')}} " alt="">
                        <h4>Reporting & Analytics</h4>
                        <p>Scantranx easy reporting tools provide you with full visibility of your business at the click of a button. Monitor all aspect of your business from any part of the world in real-time.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single_software">
                        <img src="{{asset('user/assets/images/home/software/6.png')}} " alt="">
                        <h4>Simple API Integration</h4>
                        <p>Develop custom apps, Integrate with legacy systems or Third-party systems with our flexible and simple API. No limitations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Software Area  ====================--> 

    <!--=====================  Start Possible Area  ====================--> 
    <section class="possible_area section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner_img">
                        <img src="{{asset('user/assets/images/home/possible/possible.png')}} " alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_left possible_right">
                        <h2>One Platform, Many <span>Possibilities</span>.</h2>
                        <p>Seamlessly Integrate your In-store and online sales channels for Unique Customer Experience.</p>
                        <div class="possible_cont">
                            <a target="_blank" href="https://www.scantranx.com/assets/Flenjorfoods-Success-Story.pdf">Read How this Retailer increase sales with over 30% in just 6 Months with Scantranx Omnichannel Retail POS.</a>
                        </div>
                        <p>Start Accepting modern payment methods in just minutes. - Credit, Debit and Contactless. </p>
                        <p>Ready-to-go Integration with Stripe and Elavon</p>  
                        <div class="banner_intergrates possible_img ">
                            <ul> 
                                <li><img src="{{asset('user/assets/images/home/possible/1.png')}} " alt=""></li>
                                <li><img src="{{asset('user/assets/images/home/possible/2.png')}} " alt=""></li>
                                <li><img src="{{asset('user/assets/images/home/possible/3.png')}} " alt=""></li>
                                <li><img src="{{asset('user/assets/images/home/possible/4.png')}} " alt=""></li> 
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--=====================  End Possible Area  ====================--> 

    <!--=====================  Start System Area  ====================--> 
    <section class="system_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner_left possible_right">
                        <h2>The right <span>POS system</span> for any industry</h2>
                        <p>Whether you're looking for in-person payment processing solutions, online ordering systems, ecommerce platforms or debit machines, find an industry-tailored solution built for you and backed by our experts. </p> 
                    </div>
                </div>
                <div class="col-md-8 system_contetnt">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/1.png')}} " alt="">
                                <h5>Clothing Store</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/2.png')}} " alt="">
                                <h5>Gift Shop</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/1.png')}} " alt="">
                                <h5>Grocery Store</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/2.png')}} " alt="">
                                <h5>Furniture Store</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/1.png')}} " alt="">
                                <h5>Supermarket</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/2.png')}} " alt="">
                                <h5>Liquor Store</h5>
                            </div>
                        </div> 
                        <div class="col-md-6"> 
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/1.png')}} " alt="">
                                <h5>Jewellery Store </h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_system">
                                <img src="{{asset('user/assets/images/home/system/2.png')}} " alt="">
                                <h5>Pet Store</h5>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End System Area  ====================--> 

    <!--=====================  Start Customer Area  ====================--> 
    <section class="customer_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>Don't take our words for it. Here's what our <span>customers</span> are saying</h2>
                <p>Join Hundreds of Customers worldwide using Scantranx to drive business growth.</p>
            </div>
            <div class="customer_carousel owl-carousel owl-theme">
                @foreach($testimonial as $item)
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{ $item->resume_path }}" alt="">
                        </div>
                        <div class="customer_content">
                            <p>"{{ $item->testimonial }}"</p>
                            <div class="customer_name">
                                <h5>{{ $item->name }}</h5>
                                <span>{{ $item->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </section>
    <!--=====================  End Customer Area  ====================--> 

    <!--=====================  Start Question Area  ====================-->
    <section class="question_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>Frequently Ask <span>Question’s</span></h2>
                <p>Check out my frequently ask questions to easily understand our App and how it work.</p>
            </div>

            <div class="question_accordion">
                <div class="accordion" id="faqAccordion">
                    @foreach($faq as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $item->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                                    {{ $item->title }}
                                </button>
                            </h2>
                            <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $item->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> 
    <!--=====================  End Question Area  ====================--> 

    <!--=====================  Start Trusted Area  ====================--> 
    <section class="trusted_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>Trusted by <span>1000+</span> retailers</h2>
                <p>Join us as we already trusted by multiple retailers in different industry</p>
            </div>
            <div class="trusted_img owl-carousel owl-theme">
                <div class="single_trusted">
                    <img src="{{asset('user/assets/images/home/trusted/1.png')}} " alt="">
                </div>
                <div class="single_trusted">
                    <img src="{{asset('user/assets/images/home/trusted/2.png')}} " alt="">
                </div>
                <div class="single_trusted">
                    <img src="{{asset('user/assets/images/home/trusted/3.png')}} " alt="">
                </div>
                <div class="single_trusted">
                    <img src="{{asset('user/assets/images/home/trusted/4.png')}} " alt="">
                </div>
                <div class="single_trusted">
                    <img src="{{asset('user/assets/images/home/trusted/5.png')}} " alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Trusted Area  ====================--> 

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