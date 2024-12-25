<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head-->

<head>
    
    <title>{{config('app.name')}} || @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content=""> 
    <link rel="icon" href="{{asset('admin/assets/images/fav.png')}}">

    
    <!-- CSS File -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/normalize.css')}}">  
    <link rel="stylesheet" href="{{asset('admin/assets/fonts/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/responsive.css')}}"> 

    {{-- common css  --}}
    <link href="{{asset('common/css/toastr.min.css')}}" rel="stylesheet" type="text/css')}}" />
    <link href="{{asset('common/css/ext-component-toastr.css')}}" rel="stylesheet" type="text/css')}}" />
    <link href="{{asset('common/css/ext-component-sweet-alerts.css')}}" rel="stylesheet" type="text/css')}}" />
    <link href="{{asset('common/css/form-validation.css')}}" rel="stylesheet" type="text/css" />

    <style>
        .error-msg {
            color: rgb(206, 53, 53);
            font-size: 14px;
        }
        .logo_img {
            width: 150px;
        }
    </style>

    @yield('custom-css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body>
@php 
    use Carbon\Carbon;

    // Retrieve the user's time zone from the session or default to UTC
    $timezone = session('user_timezone', 'UTC');
    $hour = Carbon::now($timezone)->hour;

    if ($hour < 12) {
        $greeting = "Good Morning";
    } elseif ($hour < 18) {
        $greeting = "Good Afternoon";
    } else {
        $greeting = "Good Evening";
    }
@endphp

    <!--Start main Area-->
    <section class="main-area">
        <div class="sidebar-area">
            <a href="#" class="sidebar_close"><i class="fas fa-times"></i></a>
            <div class="logo">
                <a href="index.html"><img src="{{asset('admin/assets/images/logo.svg')}}" alt=""></a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                            <img src="assets/images/sidebar/Search.png" alt="">Jobs
                        </a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'blog.show' ? 'active' : '' }}" href="{{ route('blog.show') }}">
                            <img src="assets/images/sidebar/Paper.png" alt="">Blog
                        </a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'faq.show' ? 'active' : '' }}" href="{{ route('faq.show') }}">
                            <img src="assets/images/sidebar/Danger Circle.png" alt="">FAQ's
                        </a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() == 'testimonial.show' ? 'active' : '' }}" href="{{ route('testimonial.show') }}">
                            <img src="assets/images/sidebar/Star.png" alt="">Testimonial
                        </a>
                    </li>
                    <li>
                        <a href="contact-form.html">
                            <img src="assets/images/sidebar/Call.png" alt="">Contact form
                        </a>
                    </li>
                    <li>
                        <a href="reseller.html">
                            <img src="assets/images/sidebar/Profile.png" alt="">Reseller
                        </a>
                    </li>
                    <li>
                        <a href="download-e-book.html">
                            <img src="assets/images/sidebar/Download.png" alt="">E-book download
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
        <div class="main-content-area">
            <!-- header area  -->
            <div class="header-area">
                <div class="header-title">
                    <a href="#" class="bars_icon"><i class="fas fa-bars"></i></a>
                    <div class="header_text_box"> 
                        <h3>{{ $greeting }}, Admin!</h3>
                        <p>Welcome back</p>
                    </div>
                </div>
                <div class="header-user"> 
                    <div class="header-user-img"> 
                        <a href="#" class="header_user_btn"><img src="{{asset('admin/assets/images/user.png')}}" alt=""> <i class="fa-solid fa-angle-down"></i> </a>
                        <ul class="logut_btn">
                            <li>
                                <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" style="background: none; border: none; color: inherit; text-decoration: none;">
                                        <i class="fa-solid fa-right-from-bracket"></i> &nbsp; Logout
                                    </button>
                                </form>
                            </li>
                            {{-- <li><a href="{{ route('admin.logout') }}"><i class="fa-solid fa-right-from-bracket"></i> &nbsp; Logout</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div> 

            <div class="main_content_box">
                <!-- add here is your content  -->

                @yield('content')

            </div>
        </div>
    </section>
    <!--End main Area-->   
     

     



    <!-- Javascript Files
    ================================================== --> 

    <!-- JS File -->
    <script src="{{asset('admin/assets/js/modernizr-3.11.2.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script> 
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>

    
    <!-- {{-- common js  --}} -->
    <script src="{{asset('common/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('common/js/common-ajax.js')}}"></script>
    <script src="{{asset('common/js/confirm-alert.js')}}"></script>
    <script src="{{asset('common/js/custom-validation.js')}}"></script>
    <script src="{{asset('common/js/toastr.min.js')}}"></script>  

    <link href="{{asset('common/css/toastr.min.css')}}" rel="stylesheet" type="text/css" /> 
    <link href="{{asset('common/css/ext-component-toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('common/css/ext-component-sweet-alerts.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('common/css/form-validation.css')}}" rel="stylesheet" type="text/css" />


    <!-- BEGIN: Page Vendor JS--> 

    @yield('script')

    <script>
        // Detect the user's time zone and send it to the backend
        const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        fetch('/set-timezone', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ timezone: userTimeZone })
        });
    </script>
    

  
</body>

</html>