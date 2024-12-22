<!doctype html>
<html lang="en">

  <head>
    <title>Tutor &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/brand/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar light site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="index.html"><strong>Tutor</strong></a>
              </div>
            </div>

            <div class="col-9  text-right">
              
              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{ URL::to('/') }}" class="nav-link">Home</a></li>
                  <li><a href="{{ URL::to('/tutorials') }}" class="nav-link">Tutorials</a></li>
                  <li><a href="testimonials.html" class="nav-link">Testimonials</a></li>
                  <li><a href="blog.html" class="nav-link">Blog</a></li>
                  <li><a href="about.html" class="nav-link">About</a></li>
                  @if (session()->has('user_email'))
                  <li><a href="{{ URL::to('/Logout') }}" class="nav-link">Logout</a></li>
                  @else
                  <li><a href="{{ URL::to('/Login') }}" class="nav-link">Login</a></li>
                  <li><a href="{{ URL::to('/register') }}" class="nav-link">Register</a></li> 
                  @endif
                  
                  
                  
                  
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>