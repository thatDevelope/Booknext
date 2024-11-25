<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Realshed - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('frontend/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/jquery-ui.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/nice-select.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
<link href="{{asset('frontend/assets/css/switcher-style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <!-- <div class="loader-wrap"> -->
            <!-- <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div> -->
                        <!-- <div class="txt-loading">
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                        </div> -->
                    <!-- </div>  
                </div>
            </div>
        </div> -->
        <!-- preloader end -->


        <!-- switcher menu -->
        <!-- <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div> -->
            <!-- <div class="switch_menu"> -->
                <!-- color changer -->
                <!-- <div class="switcher_container"> -->
                    <!-- <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul> -->
                <!-- </div> 
            </div>
        </div> -->
        <!-- end switcher menu -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>Salvation Estate Langbasa Ajah </li>
                            <li><i class="far fa-clock"></i>Everyday</li>
                            <li><i class="far fa-phone"></i><a href="tel:2512353256">08136904968</a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                        <div class="sign-box">
                            <a href="{{route('signup')}}"><i class="fas fa-user"></i>Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                <li class=""><a href="{{ route('home')}}"><span>Home</span></a>
                    <!-- <ul> -->
                        <!-- <li><a href="index.html">Main Home</a></li>
                        <li><a href="index-2.html">Home Modern</a></li>
                        <li><a href="index-3.html">Home Map</a></li>
                        <li><a href="index-4.html">Home Half Map</a></li>
                        <li><a href="index-5.html">Home Agent</a></li>
                        <li><a href="index-onepage.html">OnePage Home</a></li>
                        <li><a href="index-rtl.html">RTL Home</a></li>
                        <li class="dropdown"><a href="index.html">Header Style</a> -->
                            <!-- <ul> -->
                                <!-- <li><a href="index.html">Header Style 01</a></li>
                                <li><a href="index-2.html">Header Style 02</a></li>
                                <li><a href="index-3.html">Header Style 03</a></li> -->
                            <!-- </ul> -->
                        </li>
                    <!-- </ul> -->
                </li>
                <li class="dropdown"><a href="index.html"><span>Agency</span></a>
                    <ul>
                        <li><a href="">Agents List</a></li>
                        <!-- <li><a href="agents-grid.html">Agents Grid</a></li> -->
                        <li><a href="">Agent Details</a></li>
                    </ul>
                </li> 
                <li class="dropdown"><a href=""><span>Listings</span></a>
                    <ul>
                        <li><a href="{{ route('hotels')}}" id="hotel">Hotels</a></li>
                        <li><a href="{{ route('venues')}}">Event Venues</a></li>
                        <li><a href="{{ route('shortlets')}}">Shortlet Apartment</a></li>
                        <!-- <li><a href="property-grid-2.html">Property Grid Full View</a></li>
                        <li><a href="property-list-3.html">Property List Half View</a></li>
                        <li><a href="property-grid-3.html">Property Grid Half View</a></li>
                        <li><a href="property-details.html">Property Details 01</a></li>
                        <li><a href="property-details-2.html">Property Details 02</a></li>
                        <li><a href="property-details-3.html">Property Details 03</a></li>
                        <li><a href="property-details-4.html">Property Details 04</a></li> -->
                    </ul>
                </li>
                <li class="dropdown"><a href="index.html"><span>View Pages</span></a>
                    <div class="megamenu">
                        <div class="row clearfix">
                            <div class="col-xl-4 column">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Our Services</a></li>
                                    <li><a href="">Faq's Page</a></li>
                                    <!-- <li><a href="pricing.html">Pricing Table</a></li> -->
                                    <!-- <li><a href="compare-roperties.html">Compare Properties</a></li> -->
                                    <!-- <li><a href="categories.html">Categories Page</a></li> -->
                                    <li><a href="">Career Opportunity</a></li>
                                    <li><a href="">Testimonials</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 column">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <!-- <li><a href="gallery.html">Our Gallery</a></li>
                                    <li><a href="profile.html">My Profile</a></li> -->
                                    <li><a href="{{route('signup')}}">Sign In</a></li>
                                    <li><a href="{{route('signup')}}">Sign Up</a></li>
                                    <!-- <li><a href="error.html">404</a></li> -->
                                    <li><a href="agents-list.html">Agents List</a></li>
                                    <!-- <li><a href="agents-grid.html">Agents Grid</a></li> -->
                                    <li><a href="agents-details.html">Agent Details</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 column">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <!-- <li><a href="blog-1.html">Stories</a></li> -->
                                    <!-- <li><a href="blog-2.html">Events</a></li> -->
                                    <!-- <li><a href="blog-3.html">Love</a></li> -->
                                    <!-- <li><a href="blog-details.html">Africa</a></li> -->
                                    <li><a href="">Agency Company</a></li>
                                    <!-- <li><a href="agency-grid.html">Agency Grid</a></li> -->
                                    <!-- <li><a href="agency-details.html">Agency Details</a></li> -->
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>                                   
                        </div>                                        
                    </div>
                </li> 
                <li class="dropdown"><a href=""><span>Agency</span></a>
                    <ul>
                        <li><a href="{{ route('agent') }}">Agency Registration</a></li>
                        <!-- <li><a href="agency-grid.html">Agency Grid</a></li> -->
                        <li><a href="">Agency Details</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="index.html"><span>Blog</span></a>
                    <ul>
                        <li><a href="">Stories</a></li>
                        <li><a href="">Events</a></li>
                        <li><a href="">Love</a></li>
                        <li><a href="">Africa</a></li>
                        <li><a href="">Diaspora</a></li>
                    </ul>
                </li>  
                <li><a href=""><span>Contact</span></a></li>   
            </ul>
        </div>
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!--Page Title-->
        <section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Blog Grid</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Blog Grid</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-grid sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-grid-content">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="">Including Animation In Your Design System</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="{{asset('frontend/assets/images/news/author-1.jpg')}}" alt=""></figure>
                                                        <h5><a href="">Eva Green</a></h5>
                                                    </li>
                                                    <li>April 10, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-2.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">George Clooney</a></h5>
                                                    </li>
                                                    <li>April 09, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">Simon Baker</a></h5>
                                                    </li>
                                                    <li>April 28, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-6.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">The Most Inspiring Interior Design For Your Home.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">Eva Green</a></h5>
                                                    </li>
                                                    <li>April 10, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-7.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">Secrets To Totally Rocking Your Real Estate.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-2.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">George Clooney</a></h5>
                                                    </li>
                                                    <li>April 09, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-8.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">This Week I Thought It Would Be Good.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">Simon Baker</a></h5>
                                                    </li>
                                                    <li>April 28, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-9.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">Reader’s Look On An Important Steps Needed.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">Eva Green</a></h5>
                                                    </li>
                                                    <li>April 10, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-10.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">We’ll Bring You The Best In Donec Luctus.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-2.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">George Clooney</a></h5>
                                                    </li>
                                                    <li>April 09, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-11.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">They’re One Of The Industry Thought Leaders.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">Simon Baker</a></h5>
                                                    </li>
                                                    <li>April 28, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-12.jpg" alt=""></a></figure>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <h4><a href="blog-details.html">A Digital Prescription For The Pharma Industry.</a></h4>
                                                <ul class="post-info clearfix">
                                                    <li class="author-box">
                                                        <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                                        <h5><a href="blog-details.html">Simon Baker</a></h5>
                                                    </li>
                                                    <li>April 28, 2020</li>
                                                </ul>
                                                <div class="text">
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="blog-details.html" class="theme-btn btn-two">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="blog-1.html" class="current">1</a></li>
                                    <li><a href="blog-1.html">2</a></li>
                                    <li><a href="blog-1.html">3</a></li>
                                    <li><a href="blog-1.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title">
                                    <h4>Search</h4>
                                </div>
                                <div class="search-inner">
                                    <form action="blog-1.html" method="post">
                                        <div class="form-group">
                                            <input type="search" name="search_field" placeholder="Search" required="">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget social-widget">
                                <div class="widget-title">
                                    <h4>Follow Us On</h4>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="blog-1.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="blog-1.html"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Category</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.html">Home improvement<span>(9)</span></a></li>
                                        <li><a href="blog-details.html">Architecture<span>(5)</span></a></li>
                                        <li><a href="blog-details.html">Tips and advice<span>(2)</span></a></li>
                                        <li><a href="blog-details.html">Interior<span>(7)</span></a></li>
                                        <li><a href="blog-details.html">Real Estate<span>(3)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>Recent Posts</h4>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Best interior design idea for your home.</a></h5>
                                        <span class="post-date">April 10, 2020</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">A digital prescription for the industry.</a></h5>
                                        <span class="post-date">April 09, 2020</span>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Strategic & commercial approach with issues.</a></h5>
                                        <span class="post-date">April 08, 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h4>Archives</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="blog-details.html">November 2016<span>(9)</span></a></li>
                                        <li><a href="blog-details.html">November 2017<span>(5)</span></a></li>
                                        <li><a href="blog-details.html">November 2018<span>(2)</span></a></li>
                                        <li><a href="blog-details.html">November 2019<span>(7)</span></a></li>
                                        <li><a href="blog-details.html">November 2020<span>(3)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget tags-widget">
                                <div class="widget-title">
                                    <h4>Popular Tags</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="tags-list clearfix">
                                        <li><a href="blog-details.html">Real Estate</a></li>
                                        <li><a href="blog-details.html">HouseHunting</a></li>
                                        <li><a href="blog-details.html">Architecture</a></li>
                                        <li><a href="blog-details.html">Interior</a></li>
                                        <li><a href="blog-details.html">Sale</a></li>
                                        <li><a href="blog-details.html">Rent Home</a></li>
                                        <li><a href="blog-details.html">Listing</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sidebar-page-container -->

        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="{{ route('subscribe')}}" method="post" class="subscribe-form">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                   <p>At EventNest, we specialize in connecting you with the best event venues, shortlet apartments, and hotels. Our platform is designed to make finding and booking the perfect space easy and convenient. Whether you're planning a celebration, a business event, or a relaxing stay, we provide top-notch options that cater to your needs, ensuring an exceptional experience every time.</p>
                                   <p>We are committed to offering quality service and a seamless booking process, helping you create unforgettable memories in the most desirable locations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Listing</a></li>
                                        <li><a href="index.html">How It Works</a></li>
                                        <li><a href="index.html">Our Services</a></li>
                                        <li><a href="index.html">Our Blog</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Top News</h3>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href=""><img src="{{asset('frontend/assets/images/resource/footer-post-1.jpg')}}" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href=""><img src="{{asset('frontend/assets/images/resource/footer-post-2.jpg')}}" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                        <p>Mar 24, 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i>Ajah Langbasa Salvation Estate Lagos</li>
                                        <li><i class="fas fa-microphone"></i><a href="tel:+2348136904968">+2348136904968</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:tsirchi@gmail.com">tsirchi@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <figure class="footer-logo"><a href="index.html"><img src="{{asset('frontend/assets/images/footer-logo.png')}}" alt=""></a></figure>
                        <div class="copyright pull-left">
                            <p><a href="index.html">EventNest</a> &copy; 2021 All Right Reserved</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
    <script src="{{asset('frontend/assets/js/validation.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/assets/js/appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/scrollbar.js')}}"></script>
    <script src="{{asset('frontend/assets/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/assets/js/product-filter.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>