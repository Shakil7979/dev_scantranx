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
                    @if($blog->skip(1)->take(1)->first()) <!-- Get the second blog -->
                        @php
                            $featuredBlog = $blog->skip(1)->take(1)->first(); 
                        @endphp
                        <div class="col-md-6">
                            <div class="feature_blog_img">
                                <img src="{{ asset($featuredBlog->image_path) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature_text">
                                <a href="#" class="btn_2">{{ $featuredBlog->category }}</a>
                                <span>{{ $featuredBlog->created_at->format('d M, Y') }} - 5min Reading</span>
                                <a href="{{ route('user.single.blog', $featuredBlog->id) }}" class="link_blog">{{ $featuredBlog->title }}</a>
                                <p>{{ $featuredBlog->description }}</p>
                            </div>
                        </div>
                    @else
                        <p>No featured blog available.</p>
                    @endif
                </div>
            </div>
            
            <div class="blog_box">
                <h3>Recent Articles</h3>
                <div class="row g-4">
                    @forelse ($blog as $item)
                        <div class="col-md-4">
                            <div class="single_blog_items">
                                <div class="feature_blog_img blog_item_img">
                                    <img src="{{ asset($item->image_path) }}" alt="">
                                    <a href="#" class="btn_2">{{ $item->category }}</a>
                                </div>
                                <div class="feature_text">
                                    <span>{{ $item->created_at->format('d M, Y') }} - 5min Reading</span>
                                    <a href="{{ route('user.single.blog', $item->id) }}"  class="link_blog_item">{{ $item->title }}</a>
                                    <p>{{ Str::limit($item->description, 100) }}</p> <!-- Limit description to 100 characters -->
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No recent articles available.</p>
                    @endforelse
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