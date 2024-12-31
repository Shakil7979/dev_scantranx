@extends('user.layouts.app')
@section('title', 'Blog Details')
@section('custom-css')  

@endsection

@section('content')
  

<main class="main_area"> 
    <!--=====================  Start Blog Area  ====================--> 
    <section class="blog_area blog_details_area">
        <div class="container"> 
            <div class="blog_box blog_box_details">
                <ul>
                    <li>
                        <a href="{{route('user.blog')}}">Blog</a>
                    </li>
                    <li><span>/</span></li>
                    <li>
                        <a href="#">Blog Details</a>
                    </li>
                </ul>
                <div class="blog_details"> 
                    <div class="feature_blog_img blog_details_img">
                        <!-- Use dynamic image path -->
                        <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}">
                    </div> 
                    <div class="feature_text blog_details_text">
                        <div class="blog_details_btn"> 
                            <!-- Display the blog category -->
                            <a href="#" class="btn_2">{{ $blog->category }}</a>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- Display the blog creation date and reading time -->
                        <span>{{ $blog->created_at->format('d M, Y') }} - 5min Reading</span>
                        <!-- Display the blog title -->
                        <a class="link_blog">{{ $blog->title }}</a>
                        <!-- Display the blog description -->
                        <p>{{ $blog->description }}</p>
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


@endsection