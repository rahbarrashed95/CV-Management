
       
       <!DOCTYPE html>
<html lang="en" class="no-js">
  
<!-- Mirrored from lmpixels.com/demo/breezycv/lightfw/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 07:15:39 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('frontend/css/reset.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-grid.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animations.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/perfect-scrollbar.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body>
      
    <style>
        .skills-second-style .skill-container.skill-1 .skill-percentage {
            width: 100% !important;
        }
    </style>  
      
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
              
            <div class="header-content">
              <div class="header-photo">
                <img src="{{ asset('public/backend/users/'.$user_data->image) }}" alt="Alex Smith">
              </div>
              <div class="header-titles">
                <h2>{{ $user_data->name }}</h2>
                <h4>{{ $user_data->designation }}</h4>
              </div>
            </div>
           

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
              <!--<li>-->
              <!--  <a href="#login" class="nav-anim">-->
              <!--    <span class="menu-icon lnr lnr-user"></span>-->
              <!--    <span class="link-text">LogIn</span>-->
              <!--  </a>-->
              <!--</li>-->
            </ul>

            <div class="social-links">
              <ul>
                @foreach($social_items as $item)
                    <li><a href="{{ $item->link }}" target="_blank"><i class="{{ $item->icon }}"></i></a></li>
                @endforeach    
              </ul>
            </div>

            <div class="header-buttons">
              <a href="{{ route('front.test') }}" class="btn btn-primary">Download CV</a>
            </div>

            <div class="copyrights">© 2020 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
              
            @yield('content')
            
          </div>

      </div>
    </div>
    
    <script src="{{ asset('frontend/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{ asset('frontend/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('frontend/js/animating.js')}}"></script>

    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <!--<script src='../../../../../www.google.com/recaptcha/api.js'></script>-->

    <script src="{{ asset('frontend/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.shuffle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{ asset('frontend/js/validator.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8e2536029ec84ea5","version":"2024.10.5","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"94b99c0576dc45bf9d669fb5e9256829","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from lmpixels.com/demo/breezycv/lightfw/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 07:15:52 GMT -->
</html>
