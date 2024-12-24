<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head-->

<head>
    
    <title>Login</title>
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

</head>

<body>

    <div class="login_area">
        <div class="login_area_bg"> 
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="login_bg_left">
                        <div class="login_left">
                            <img src="assets/images/login/login.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login_bg_right">
                        <div class="login_form">
                            <h3>Scantranx Admin Login</h3>
                            <form id='login_form' action="{{route('admin.login.post')}}" method="POST"> 
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
                                    <a class="forgot_btn" href="#">Forget password</a>
                                    <div class="btn_login">
                                        <button type="button" class="btn_2 free_demo_btn" id="loginFormBtn" onclick="_run(this)" data-el="fg" data-form="login_form" data-loading="<div class='spinner-border spinner-border-sm' role='status'></div>" data-callback="userLoginForm" data-btnid="loginFormBtn">Login <i class="fa-solid fa-arrow-right"></i></button> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
  



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
 
        function userLoginForm(data){
            if (data.status == true) {
                notify('success', data.message, 'Success');
                setTimeout(function() {
                    window.location.href = "/admin/dashboard";
                }, 1000 * 2);
            } else {
                notify('error', data.message, 'Error');
                $.validator("login_form", data.errors);
            }
        }
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

    </script>


</body>

</html>


