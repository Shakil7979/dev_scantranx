@extends('user.layouts.app')
@section('title', 'Home')
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
                                <a target="_blank" href="https://www.scantranx.com/Flenjorfoods-Success-Story.pdf">Read How this Retailer increase sales with over 30% in just 6 Months with Scantranx Omnichannel Retail POS.</a>
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
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{asset('user/assets/images/home/customer/3.png')}} " alt="">
                        </div> 
                        <div class="customer_content">
                            <p> "What I like most about Scantranx is that it provides all the services that I need for my eCommerce retail business on one seamless platform." </p>
                            <div class="customer_name">
                                <h5>Erin Ann Flood</h5>
                                <span>CEO, GoDo, Canada</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{asset('user/assets/images/home/customer/4.png')}} " alt="">
                        </div> 
                        <div class="customer_content">
                            <p> "We needed a solution that could give us our key performance reports on a single dashboard and Scantranx was able to do that. The staff are quite knowledgeable and the support is top-notch." </p>
                            <div class="customer_name">
                                <h5>Oladiwura Fakiyesi</h5>
                                <span>CEO, Flenjorfoods Canada</span>
                            </div>
                        </div>
                    </div> 
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{asset('user/assets/images/home/customer/5.jpeg')}} " alt="">
                        </div> 
                        <div class="customer_content">
                            <p> "Scantranx has really helped me in managing my business and track its growth. Scantranx is a great platform for any retail business." </p>
                            <div class="customer_name">
                                <h5>Bolaji Akintola</h5>
                                <span>Owner, Divine African Mkt Canada</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{asset('user/assets/images/home/customer/2.png')}} " alt="">
                        </div> 
                        <div class="customer_content">
                            <p>"Earlier the stock management tool that we were using didn’t show us the data in real-time, it used to take one full day to fetch that data. With Restroworks, we can check this data in real time"</p>
                            <div class="customer_name">
                                <h5>Micheal Noah</h5>
                                <span>CEO & Co-founder, Taco Bell Pvt Ltd.</span>
                            </div>
                        </div>
                    </div> 
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{asset('user/assets/images/home/customer/1.png')}} " alt="">
                        </div> 
                        <div class="customer_content">
                            <p>"The best platform to manage all restaurant POS in one place. Very user-friendly and easily operative software. Provides all types of required data and reports in real-time that helps a lot in analyzing."</p>
                            <div class="customer_name">
                                <h5>Henry Jack</h5>
                                <span>Senior Manage IT, Belgian Waffer Co.</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_customer">
                        <div class="single_customer_img">
                            <img src="{{asset('user/assets/images/home/customer/2.png')}} " alt="">
                        </div> 
                        <div class="customer_content">
                            <p>"Earlier the stock management tool that we were using didn’t show us the data in real-time, it used to take one full day to fetch that data. With Restroworks, we can check this data in real time."</p>
                            <div class="customer_name">
                                <h5>Micheal Noah</h5>
                                <span>CEO & Co-founder, Taco Bell Pvt Ltd.</span>
                            </div>
                        </div>
                    </div> 
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
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is Scantranx ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>Scantranx is a cloud based Inventory management, Point of Sales (POS) and eCommerce solution designed to effectively and efficiently manage your inventory operations and sales transactions. It works optimally for both single and multiple sales channels. Whether it is Online Store only, multiple physical stores or a combination of physical and online sales channels. </p>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What hardware do you provide for retailers?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>We can provide you with a complete desktop POS system i.e. Cash register, Thermal printer, Customer Display Unit, Laser Scanner, Barcode Printer and Cash Box or parts.</p>
                            </div>
                        </div>
                        </div>

                        
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I use my hardware with the Scantranx POS application?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, you can but to get the best user experience we recommend the Scantranx Hardware.</p>
                            </div>
                        </div>
                        </div>
                        

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How do I accept payment from my customers?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You can accept payment through bank transfer, credit card, Cash, Gift cards, Coupons. Possible payment mode is a function of the platform of transaction.</p>
                            </div>
                        </div>
                        </div>
                        

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                I want an Online store only. Can I use Scantranx?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Absolutely, Scantranx has an e-commerce platform with professional website templates to ensure you set up your online store as quickly as possible. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Is there a limit to the number of POS system I can use with my account?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, the number of POS you can use depends on your service subscription plan. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Can I still use Scantranx POS during internet down-time ?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, Scantranx POS has an offline mode that enables you to continue your transaction whenever there is internet downtime, once internet connection is restored, all data would be synchronized.  </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                All I need is to manage my inventory, can Scantranx work for me ?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, it can perfectly work for you. You can decide to sign up and not install the point of sale application software if you do not need it. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_9" aria-expanded="false" aria-controls="collapse_9">
                                How much does it cost to Start using to Scantranx?
                            </button>
                        </h2>
                        <div id="collapse_9" class="accordion-collapse collapse" aria-labelledby="heading_9" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>On sign-up, you would be given full free access based on your selected package for 14 days. Subsequently, you would be required to pay a monthly access fee of $19.99, $49.99 and $99.99 for the BASIC, STARTER and PRO plan respectively. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_10" aria-expanded="false" aria-controls="collapse_10">
                                On sign-up, you would be given full free access based on your selected package for 14 days. Subsequently, you would be required to pay a monthly access fee of $19.99, $49.99 and $99.99 for the BASIC, STARTER and PRO plan respectively. 
                            </button>
                        </h2>
                        <div id="collapse_10" class="accordion-collapse collapse" aria-labelledby="heading_10" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Scantranx is available in three subscription packages: BASIC STARTER, and PRO Packages at $19.99, $49.99 and $49 respectively. We also provide custom service which works on special terms and conditions. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_11" aria-expanded="false" aria-controls="collapse_11">
                                Can Scantranx manage more than one physical store ?
                            </button>
                        </h2>
                        <div id="collapse_11" class="accordion-collapse collapse" aria-labelledby="heading_11" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, Scantranx is built to effectively manage multiple physical stores and its also a great choice in managing single store. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_12" aria-expanded="false" aria-controls="collapse_12">
                                What if I sell through my physical store, e-commerce website and/or a mobile commerce application
                            </button>
                        </h2>
                        <div id="collapse_12" class="accordion-collapse collapse" aria-labelledby="heading_12" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Scantranx would help you eliminate the stress of maintaining different inventory for your different sales channels, this means you can centrally and effectively manage all your sales channels with Scantranx. This is one of the ways we help retailers to save stress, money and time. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_13" aria-expanded="false" aria-controls="collapse_13">
                                My business operates several locations/branches with a central office, would Scantranx be sufficient for our inventory operations ?
                            </button>
                        </h2>
                        <div id="collapse_13" class="accordion-collapse collapse" aria-labelledby="heading_13" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, Scantranx can centrally manage all your business locations including warehouse in an efficient and effective way. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_14">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_14" aria-expanded="false" aria-controls="collapse_14">
                                How do I easily migrate my product and customer data to Scantranx ?
                            </button>
                        </h2>
                        <div id="collapse_14" class="accordion-collapse collapse" aria-labelledby="heading_14" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You can migrate your inventory easily by simply importing your item list in excel format. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_15">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_15" aria-expanded="false" aria-controls="collapse_15">
                                Can I change my subscription plan anytime I deem necessary ?
                            </button>
                        </h2>
                        <div id="collapse_15" class="accordion-collapse collapse" aria-labelledby="heading_15" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Yes, you have the liberty to either upgrade your subscription plan anytime you need to.</p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_16">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_16" aria-expanded="false" aria-controls="collapse_16">
                                If I operate a seasonal business can I halt subscription and still keep my data till next business season?
                            </button>
                        </h2>
                        <div id="collapse_16" class="accordion-collapse collapse" aria-labelledby="heading_16" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You need to make a special request to our customer support service which would be treated as required. Our system keeps inactive account record for a stipulated period.  </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_17">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_17" aria-expanded="false" aria-controls="collapse_17">
                                Is Scantranx compatible with my already existing hardware ?
                            </button>
                        </h2>
                        <div id="collapse_17" class="accordion-collapse collapse" aria-labelledby="heading_17" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Scantranx is compatible with most hardware, giving you one time seamless connection to your system unit and peripherals. However, you can check our recommended hardware with required minimum specification. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_18">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_18" aria-expanded="false" aria-controls="collapse_18">
                                Can I use Scantranx on my tablet and mobile phone ?
                            </button>
                        </h2>
                        <div id="collapse_18" class="accordion-collapse collapse" aria-labelledby="heading_18" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You can easily access your back office using any hardware type, tablet, minimum of 7" tablet and your computer systems. While transaction checkouts can be effectively carried out using a tablet or computer system. </p>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_19">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_19" aria-expanded="false" aria-controls="collapse_19">
                                How do I accept payment from my customers during checkout ?
                            </button>
                        </h2>
                        <div id="collapse_19" class="accordion-collapse collapse" aria-labelledby="heading_19" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>You can accept payment through bank transfer, credit card, Cash, Gift cards, Coupons. Possible payment mode is a function of the platform of transaction. </p>
                            </div>
                        </div>
                        </div>
                        

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