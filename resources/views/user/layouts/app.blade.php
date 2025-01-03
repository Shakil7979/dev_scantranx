<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">  
        <link rel="icon" href="{{asset('user/assets/images/fav.png')}}">

        <!-- Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!-- Normalize -->
        <link rel="stylesheet" href="{{asset('user/assets/css/owl.carousel.min.css')}}"> 
        <link rel="stylesheet" href="https://assets.calendly.com/assets/external/widget.css">
        <link rel="stylesheet" href="{{asset('user/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/fonts/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/css/normalize.css')}}">
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{asset('user/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('user/assets/css/responsive.css')}}">

        
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
            #toast-container { 
                z-index: 999999999999 !important; 
            } 
            .toast-message {
                font-size: 14px !important; 
            }
            .toast-title{
                font-size: 16px !important;  

            }
        </style>

        
        @yield('custom-css')
    </head>
    <body> 

        
        <!--=====================  Start Header Area  ====================-->
        <header class="header_area">
            <div class="top_header">
                <div class="container">
                    <div class="top_header_content">
                        <p>Get a <button class="free_e_book_modal_show">FREE</button> e-book on 4 proven strategies to increase your sale</p>
                    </div>
                </div>
            </div>
            <div class="main_header">
                <div class="container">
                    <div class="header">
                        <div class="logo">
                            <a href="{{ route('user.home') }}">
                                <img src="{{ asset('user/assets/images/logo.svg') }}" alt="Logo">
                            </a>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="{{ route('user.home') }}">Home</a></li>
                                <li><a href="{{ route('user.features') }}">Features</a></li>
                                <li><a href="{{ route('user.hardware') }}">Hardware</a></li>
                                <li><a href="{{ route('user.pricing') }}">Pricing</a></li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Integration <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="drop_down_menu">
                                        <li><a href="{{ route('user.quickbook') }}">QuickBooks</a></li>
                                        <li><a href="{{ route('user.stripe') }}">Stripe</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">Resources <i class="fa-solid fa-angle-down"></i></a>
                                    <ul class="drop_down_menu">
                                        <li><a href="{{ route('user.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('user.api.integration') }}">API</a></li>
                                        <li><a href="{{ route('user.about') }}">About</a></li>
                                        <li><a href="{{ route('user.job.opening') }}">Careers</a></li>
                                        <li><a href="{{ route('user.reseller') }}">Resellers</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('user.contact') }}">Contact</a></li>
                                <li>
                                    <button type="button" class="btn_1 mobile_show login_show_form">Login</button>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="header_login_btn">
                            <ul>
                                <li> 
                                    <!-- Show the Login button if the user is NOT logged in (with 'user' role) -->
                                    @if (!Auth::check() || Auth::user()->role != 'user')
                                    <button type="button" class="btn_1 desktop_show login_show_form">Login</button>
                                    @endif

                                    <!-- Show the Logout button if the user is logged in and has the 'user' role -->
                                    @if (Auth::check() && Auth::user()->role == 'user')
                                    <a href="{{route('user.logout')}}" class="btn_1 desktop_show logout_button">Logout</a>
                                    @endif
                                </li>

                                <li><a href="#" class="btn_2 free_demo_btn open-calendly">Free Demo <i class="fa-solid fa-arrow-right"></i></a></li>
                                <li><a href="#" class="mobile_bars"><i class="fas fa-bars"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
        <!--=====================  End Header Area  ====================-->
 
        @yield('content')   
                
        <!--=====================  Start Header Area  ====================-->
        <footer class="footer_area">
            <div class="container">
                <div class="footer">
                    <div class="footer_single">
                        <h3>Company</h3>
                        <ul>  
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="privecy-policy.html">Privacy Policy</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li> 
                        </ul>
                    </div>
                    <div class="footer_single">
                        <h3>Platform</h3>
                        <ul>   
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="hardware.html">Hardware</a></li>
                            <li><a href="partners.html">Partners</a></li>
                            <li><a href="faq.html">FAQ’s</a></li> 
                        </ul>
                    </div>
                    <div class="footer_single">
                        <h3>Features</h3>
                        <ul class="feature_item_link">   
                            <li><a href="features.html#Inventory">Inventory Management</a></li>
                            <li><a href="features.html#Omni">Omni- channel solution</a></li>
                            <li><a href="features.html#POS">Point of Sale (POS)</a></li> 
                            <li><a href="features.html#ecommerce">E-commerce</a></li> 
                            <li><a href="features.html#Customer">Customer Management</a></li> 
                            <li><a href="features.html#Accounting">Accounting Tools</a></li> 
                            <li><a href="features.html#Reporting">Reporting & Analytics</a></li> 
                            <li><a href="features.html#Data">Data Management</a></li> 
                            <li><a href="features.html#Store">Store Management</a></li> 
                        </ul>
                    </div>
                    <div class="footer_single">
                        <h3>Support</h3>
                        <ul>   
                            <li><a href="support-center.html">Support Center</a></li>
                            <li><a href="login.html">Login</a></li> 
                            <li><a href="download.html">Download AnyDesk</a></li> 
                            <li><a href="privecy-policy.html">Privacy policy</a></li> 
                            <li><a href="terms-conditions.html">Terms and Condition</a></li>  
                        </ul>
                    </div>
                    <div class="footer_single">
                        <h3>Socials</h3>
                        <ul>
                            <li><a href="https://twitter.com/scantranx">Twitter</a></li> 
                            <li><a href="https://www.instagram.com/scantranx">Instagram</a></li> 
                            <li><a href="https://www.linkedin.com/company/scantranx">LinkedIn</a></li> 
                            <li><a href="https://www.facebook.com/scantranx">Facebook</a></li>  
                        </ul>
                    </div>
                </div>
                <div class="footer_bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="footer_left">
                                <a href="#"><img src="{{asset('user/assets/images/logo.svg')}}" alt=""></a>
                                <p>Scantranx is a Cloud Based Omnichannel Retail POS solution that helps businesses to increase sales, save costs, and enhance customer experience by integrating online & in-store sales. Our platform provides retailers with integrated components such as powerful Smart Inventory management system, POS Software, e-Commerce, API for third party integration, and a powerful analytics dashboard to make informed business decisions in real-time.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_copy_right">
                    <p>Copyright © 2024 Scantranx. All rights reserved. Scantranx is a registered trademark.</p>
                </div>
            </div>
        </footer>
        <!--=====================  End Header Area  ====================-->

            <!-- modal is here  --> 
    <div class="modal_area"> 
        <div class="modal_close_overlay"></div>
        <!-- login modal  -->
        <div class="modal_main_login"> 
            <div class="login_modal">
                <div class="sk_modal_content">
                    <div class="modal_header">
                        <h3>Scantranx Login</h3>
                        <button class="close_modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal_form">
                        <form action="{{ route('user.login') }}" id="user_login_form" method="POST">
                            @csrf
                            <div class="login_form"> 
                                <div class="form_group">
                                    <input type="email" name="email" placeholder="Enter email">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                                <div class="form_group">
                                    <input type="password" name="password" id="password" placeholder="Enter password">
                                    <i class="fa-solid fa-lock"></i>
                                    <button class="eye_password"><i class="fa-regular fa-eye"></i></button>
                                </div>
                                <a href="#">Forget password</a>
                                <div class="btn_login"> 

                                    <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="user_login_btn" onclick="_run(this)" data-el="fg" data-form="user_login_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="user_login_callback" data-btnid="user_login_btn">Login <i class="fa-solid fa-arrow-right"></i></button> 


                                    <p>Don’t have an account? <button class="btn_log_reg show_registraion_modal">Register</button></p>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>   
        </div>  

        <!-- registraion modal  -->
        <div class="modal_main_registraion"> 
            <div class="login_modal">
                <div class="sk_modal_content">
                    <div class="modal_header">
                        <div class="modal_title">  
                            <h3>Create your free Scantranx Account</h3>
                            <p>Enjoy 14 days free Trial on paid plans. No Credit Card Required.</p>
                        </div>
                        <button class="close_modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal_form">
                        <form action="{{ route('user.registration') }}" id="user_registration_form" method="POST">
                            @csrf 
                            <div class="login_form"> 
                                <div class="form_group">
                                    <input type="text" name="account_name" placeholder="Account name">
                                    <i class="fa-regular fa-user"></i>
                                    <span class="email_for_reg">.scantranx.com</span>
                                </div> 
                                <div class="form_group">
                                    <input type="text" name="business_name" placeholder="Business name">
                                    <i class="fa-regular fa-envelope"></i>
                                </div> 
                                <div class="form_group"> 
                                    <select name="country" id="">
                                        <option value="Country">Country</option>
                                        <option value="bangladesh">Bangladesh</option>
                                        <option value="usa">USA</option>
                                        <option value="uk">UK</option>
                                        <option value="india">India</option>
                                    </select>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div> 
                                <div class="form_group">
                                    <input type="text" name="phone_number" placeholder="Phone number">
                                    <i class="fa-solid fa-phone"></i>
                                </div> 
                                <div class="form_group">
                                    <input type="email" name="email" placeholder="Enter email">
                                    <i class="fa-regular fa-envelope"></i>
                                </div> 
                                {{-- <div class="form_group"> 
                                    <select name="plan" id="">
                                        <option value="">Select plan i.e Basic - $19.99/month</option>
                                        <option value="basic">Basic - $19.99/month</option>
                                        <option value="premium">Premium - $29.99/month</option>
                                    </select>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>  --}}
                                <div class="form_group">
                                    <input type="password" id="rg_password" name="password"placeholder="Enter password">
                                    <i class="fa-solid fa-lock"></i> 
                                </div>
                                <div class="form_group">
                                    <input type="password" id="rg_confirm_password" name="password_confirmation"placeholder="Enter confirm password">
                                    <i class="fa-solid fa-lock"></i> 
                                </div>
                                <div class="form_group check_box">
                                    <input class="checkbox-input" type="checkbox" name="terms" id="checkbox-1" />
                                    <label for="checkbox-1">By signing up you agree to the Scantranx <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                                </div>
                                <div class="btn_login">   

                                    <button type="button"  class="btn_2 free_demo_btn" data-file='true' id="user_registration_btn" onclick="_run(this)" data-el="fg" data-form="user_registration_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="user_registraion_callback" data-btnid="user_registration_btn">Create Account <i class="fa-solid fa-arrow-right"></i></button> 



                                    <p>Already have an account? <button class="btn_log_reg show_login_modal">Login</button></p>
                                </div>
                            </div>
                        </form>
                        
                    </div> 
                </div>
            </div>   
        </div>  

        <!-- Free ebook modal  -->
        <div class="modal_main_ebook"> 
            <div class="login_modal">
                <div class="sk_modal_content">
                    <div class="modal_header">
                        <div class="modal_title">  
                            <h3>Complete the form to Download</h3>
                            <p>Get Free E-Book on 4 Ways to Start Winning in your Retail Business</p>
                        </div>
                        <button class="close_modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal_form">
                        <form action="{{ route('ebook.store') }}" id="ebook_form" method="POST">
                            @csrf
                            <div class="login_form"> 
                                <div class="form_group">
                                    <input type="text" name="full_name" placeholder="Full name">
                                    <i class="fa-regular fa-user"></i> 
                                </div> 
                                <div class="form_group">
                                    <input type="text" name="business_name" placeholder="Business name">
                                    <i class="fa-regular fa-envelope"></i>
                                </div> 
                                <div class="form_group"> 
                                    <select name="position">
                                        <option value="Business Owner">Business Owner</option> 
                                        <option value="Manager">Manager</option> 
                                        <option value="Employee">Employee</option> 
                                        <option value="Other">Other</option> 
                                    </select>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div> 
                                <div class="form_group">
                                    <input type="text" name="phone_number" placeholder="Phone number">
                                    <i class="fa-solid fa-phone"></i>
                                </div> 
                                <div class="form_group">
                                    <input type="email" name="email" placeholder="Enter email">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>  
                                <div class="btn_login"> 
                                    <button type="button" class="btn_2 free_demo_btn" data-file="true" id="ebook_btn" 
                                        onclick="_run(this)" data-el="fg" data-form="ebook_form" 
                                        data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" 
                                        data-callback="ebook_callback" data-btnid="ebook_btn">
                                        Download E-Book <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div> 
                </div>
            </div>   
        </div>  

        
        <div id="videoPopup" class="popup-overlay">
            <div class="popup-content">
                <video id="localVideo" controls>
                    <source src="" type="video/mp4"> 
                </video>
                <button class="close-popup"><i class="fas fa-times"></i></button>
            </div>
        </div>
        
    </div>
 


        <!-- ~~~~~~~~~~ JS Files ~~~~~~~~~~-->
        <!-- jQuery -->
        <script src="{{asset('user/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('user/assets/js/popper.min.js')}}"></script>
        <script src="https://assets.calendly.com/assets/external/widget.js"></script> 
        <!-- Bootstrap --> 
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('user/assets/js/owl.carousel.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
        <!-- Modernizr -->
        <script src="{{asset('user/assets/js/modernizr-3.11.2.min.js')}}"></script>
        <!-- Custom JS (Handed)-->
        <script src="{{asset('user/assets/js/scripts.js')}}"></script>


        
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

        
        @yield('script')

        

        <script>    

            function user_registraion_callback(data){
                if (data.status == true) {
                    notify('success', data.message, 'Success');
                    $('#user_registration_form')[0].reset();
                    setTimeout(function() { 
                        $('.modal_main_registraion').hide();
                        $('.modal_main_login').show();
                    }, 1000 * 2);
                } else {
                    notify('error', data.message, 'Error');
                    $.validator("user_registration_form", data.errors);
                }
            } 

            function user_login_callback(data){
                if (data.status == true) {
                    notify('success', data.message, 'Success');
                    $('#user_login_form')[0].reset();
                    setTimeout(function() { 
                        window.location.reload(); 
                    }, 1000 * 2);
                } else {
                    notify('error', data.message, 'Error');
                    $.validator("user_login_form", data.errors);
                }
            } 

            function ebook_callback(data){
                if (data.status == true) {
                    notify('success', data.message, 'Success');
                    $('#ebook_form')[0].reset();
                    setTimeout(function() { 
                        window.location.reload(); 
                    }, 1000 * 2);
                } else {
                    notify('error', data.message, 'Error');
                    $.validator("ebook_form", data.errors);
                }
            } 

            $('.logout_button').click(function(){ 
                $.ajax({
                    url: '{{ route("user.logout") }}',  
                    type: 'POST', 
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content') // CSRF Token for security
                    },
                    success: function(response) {
                        if (response.status === 'success') {  
                            location.reload();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Logout failed: ', error);
                        alert('An error occurred while logging out.');
                    }
                });
                
                return false;
            })

        </script>


    </body>
</html>