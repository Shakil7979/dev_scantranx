@extends('user.layouts.app')
@section('title', 'Blog')
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
                            <h2>Get the Best <span>News</span> and <span>Tips</span> for your Retail Business.</h2> 
                            <p>
                                Scantranx provide you with 360° Retail Solution and unique features for modern business. We provide you with News and Tips that help the digital transformation of your retail business.</p> 
                            <div class="banner_btn mt-5">
                                <a href="#" class="btn_2 free_demo_btn open-calendly">Get Free Demo <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn_1 wathc_video"><i class="fa-regular fa-circle-play"></i> Watch Video</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner_img">
                            <img src="{{asset('user/assets/images/blog/banner.png')}} " alt="">
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

    <!--=====================  Start Blog Area  ====================--> 
    <section class="blog_area section_padding">
        <div class="container">
            <div class="section_title">
                <h2>Latest <span>Insights</span> & Updates</h2>
                <p>Stay informed with our newest articles on industry trends, tips, and product updates to help your business thrive.</p>
            </div>
            <div class="feature_box">
                <h3>Featured Article</h3>
                <div class="row gx-5">
                    <div class="col-md-6">
                        <div class="feature_blog_img">
                            <img src="{{asset('user/assets/images/blog/feature.png')}} " alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature_text">
                            <a href="#" class="btn_2">Business</a>
                            <span>21 Oct, 2024 - 5min Reading</span>
                            <a class="link_blog">How modern POS solutions streamline business operations.</a>
                            <p>Point-of-sale (POS) software is a comprehensive solution for your business that allows you to process payments, manage and collect customer information, update inventory, and build a loyal customer base. Whether you own a physical business, a retail merchant, an online business, or a restaurant chain, the modern POS system will help you achieve your business goals while providing excellent customer experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_box">
                <h3>Recent Articles</h3>
                <div class="row g-4"> 
                    <div class="col-md-4">
                        <div class="single_blog_items">
                            <div class="feature_blog_img blog_item_img">
                                <img src="{{asset('user/assets/images/blog/item/1.png')}} " alt=""> 
                                <a href="#" class="btn_2">Business</a>
                            </div>
                            <div class="feature_text">
                                <span>21 Oct, 2024 - 5min Reading</span>
                                <a href="#" class="link_blog_item">How modern POS solutions streamline business operations.</a>
                                <p>Point-of-sale (POS) software is a comprehensive solution for your business that allows you to process payments, manage and collect customer information, update inventory, and build a loyal customer base. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_blog_items">
                            <div class="feature_blog_img blog_item_img">
                                <img src="{{asset('user/assets/images/blog/item/2.png')}} " alt=""> 
                                <a href="#" class="btn_2">Retail</a>
                            </div>
                            <div class="feature_text">
                                <span>17 Aug, 2024 - 6min Reading</span>
                                <a href="#" class="link_blog_item">Cloud-Based POS Software for Retailers: A Complete Guide</a>
                                <p>Retailers are faced with a variety of challenges that can make it challenging to stay competitive. These challenges include managing inventory, hiring the right staff, and making sure your customers are happy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_blog_items">
                            <div class="feature_blog_img blog_item_img">
                                <img src="{{asset('user/assets/images/blog/item/3.png')}} " alt=""> 
                                <a href="#" class="btn_2">E-commerce</a>
                            </div>
                            <div class="feature_text">
                                <span>17 Aug, 2024 - 6min Reading</span>
                                <a href="#" class="link_blog_item">Scantranx Named amongst the best eCommerce Companies in New Brunswick by Best Startup Canada.</a>
                                <p>We are thrilled to announce we have been featured in the Best Startup Canada Magazine as one of the top e-Commerce Companies in New Brunswick, Canada. </p>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="single_blog_items">
                            <div class="feature_blog_img blog_item_img">
                                <img src="{{asset('user/assets/images/blog/item/1.png')}} " alt=""> 
                                <a href="#" class="btn_2">Business</a>
                            </div>
                            <div class="feature_text">
                                <span>21 Oct, 2024 - 5min Reading</span>
                                <a href="#" class="link_blog_item">How modern POS solutions streamline business operations.</a>
                                <p>Point-of-sale (POS) software is a comprehensive solution for your business that allows you to process payments, manage and collect customer information, update inventory, and build a loyal customer base. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_blog_items">
                            <div class="feature_blog_img blog_item_img">
                                <img src="{{asset('user/assets/images/blog/item/2.png')}} " alt=""> 
                                <a href="#" class="btn_2">Retail</a>
                            </div>
                            <div class="feature_text">
                                <span>17 Aug, 2024 - 6min Reading</span>
                                <a href="#" class="link_blog_item">Cloud-Based POS Software for Retailers: A Complete Guide</a>
                                <p>Retailers are faced with a variety of challenges that can make it challenging to stay competitive. These challenges include managing inventory, hiring the right staff, and making sure your customers are happy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_blog_items">
                            <div class="feature_blog_img blog_item_img">
                                <img src="{{asset('user/assets/images/blog/item/3.png')}} " alt=""> 
                                <a href="#" class="btn_2">E-commerce</a>
                            </div>
                            <div class="feature_text">
                                <span>17 Aug, 2024 - 6min Reading</span>
                                <a href="#" class="link_blog_item">Scantranx Named amongst the best eCommerce Companies in New Brunswick by Best Startup Canada.</a>
                                <p>We are thrilled to announce we have been featured in the Best Startup Canada Magazine as one of the top e-Commerce Companies in New Brunswick, Canada. </p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <!--=====================  End Blog Area  ====================-->   

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