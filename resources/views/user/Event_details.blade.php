<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>EventNest</title>

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
<link href="{{asset('frontend/assets/css/timePicker.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/switcher-style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
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
                        </div>
                    </div>  
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
                        </li> -->
                    <!-- </ul> -->
                <!-- </div>  -->
            <!-- </div> -->
        <!-- </div> -->
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
                <li class="dropdown"><a href="index.html"><span>Listing</span></a>
                    <ul>
                        <li><a href="agents-list.html">Agents List</a></li>
                        <!-- <li><a href="agents-grid.html">Agents Grid</a></li> -->
                        <li><a href="agents-details.html">Agent Details</a></li>
                    </ul>
                </li> 
                <li class="dropdown"><a href="index.html"><span>Property</span></a>
                    <ul>
                        <li><a href="{{ route('hotels')}}">Hotels</a></li>
                        <li><a href="property-grid.html">Event Venues</a></li>
                        <li><a href="property-list-2.html">Shortlet Apartment</a></li>
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
                                    <li><a href="">Pricing Table</a></li>
                                    <li><a href="">Compare Properties</a></li>
                                    <li><a href="">Categories Page</a></li>
                                    <li><a href="">Career Opportunity</a></li>
                                    <li><a href="">Testimonials</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 column">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <li><a href="">Our Gallery</a></li>
                                    <li><a href="">My Profile</a></li>
                                    <li><a href="{{route('signup')}}">Sign In</a></li>
                                    <li><a href="{{route('signup')}}">Sign Up</a></li>
                                    <li><a href="">404</a></li>
                                    <li><a href="">Agents List</a></li>
                                    <!-- <li><a href="agents-grid.html">Agents Grid</a></li> -->
                                    <li><a href="">Agent Details</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-4 column">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <li><a href="">Stories</a></li>
                                    <li><a href="">Events</a></li>
                                    <li><a href="">Love</a></li>
                                    <li><a href="">Africa</a></li>
                                    <li><a href="">Agency Company</a></li>
                                    <!-- <li><a href="agency-grid.html">Agency Grid</a></li> -->
                                    <li><a href="">Agency Details</a></li>
                                    <li><a href="">Contact Us</a></li>
                                </ul>
                            </div>                                   
                        </div>                                        
                    </div>
                </li> 
                <li class="dropdown"><a href=""><span>Agency</span></a>
                    <ul>
                        <li><a href="">Agency Company</a></li>
                        <!-- <li><a href="agency-grid.html">Agency Grid</a></li> -->
                        <li><a href="">Agency Details</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span>Blog</span></a>
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
                            <a href="" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href=""><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-one"><span>+</span>Add Listing</a>
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
                <div class="nav-logo"><a href=""><img src="assets/images/logo-2.png" alt="" title=""></a></div>
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
                        <li><a href=""><span class="fab fa-twitter"></span></a></li>
                        <li><a href=""><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href=""><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                        <li><a href=""><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Property Details 01</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Property Details 01</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-one">
            <div class="auto-container">
                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3>The Citizen Apartment</h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                <h6>Michael Bean</h6>
                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a href="property-details.html">Building</a></li>
                                <li><a href="property-details.html">For Buy</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>$30,000.00</h3>
                            </div>
                        </div>
                        <ul class="other-option pull-right clearfix">
                            <li><a href=""><i class="icon-37"></i></a></li>
                            <li><a href=""><i class="icon-38"></i></a></li>
                            <li><a href=""><i class="icon-12"></i></a></li>
                            <li><a href=""><i class="icon-13"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="carousel-inner">
                                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                                    <figure class="image-box"><img src="assets/images/resource/property-details-1.jpg" alt=""></figure>
                                    <figure class="image-box"><img src="assets/images/resource/property-details-1.jpg" alt=""></figure>
                                    <figure class="image-box"><img src="assets/images/resource/property-details-1.jpg" alt=""></figure>
                                </div>
                            </div>
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Property Description</h4>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore dolore magna aliqua enim minim veniam quis nostrud exercitation laboris nisi ut aliquip ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat</p>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam.</p>
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Property Details</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Property ID: <span>ZOP251C</span></li>
                                    <li>Rooms: <span>06</span></li>
                                    <li>Garage Size: <span>200 Sq Ft</span></li>
                                    <li>Property Price: <span>$30,000</span></li>
                                    <li>Bedrooms: <span>04</span></li>
                                    <li>Year Built: <span>01 April, 2019</span></li>
                                    <li>Property Type: <span>Apertment</span></li>
                                    <li>Bathrooms: <span>03</span></li>
                                    <li>Property Status: <span>For Sale</span></li>
                                    <li>Property Size: <span>2024 Sq Ft</span></li>
                                    <li>Garage: <span>01</span></li>
                                </ul>
                            </div>
                            <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Amenities</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Air Conditioning</li>
                                    <li>Cleaning Service</li>
                                    <li>Dishwasher</li>
                                    <li>Hardwood Flows</li>
                                    <li>Swimming Pool</li>
                                    <li>Outdoor Shower</li>
                                    <li>Microwave</li>
                                    <li>Pet Friendly</li>
                                    <li>Basketball Court</li>
                                    <li>Refrigerator</li>
                                    <li>Gym</li>
                                </ul>
                            </div>
                            <div class="floorplan-inner content-widget">
                                <div class="title-box">
                                    <h4>Floor Plan</h4>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>First Floor</h5>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content-box">
                                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusa dolore mque laudant.</p>
                                                <figure class="image-box">
                                                    <img src="assets/images/resource/floor-1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>Second Floor</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content-box">
                                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusa dolore mque laudant.</p>
                                                <figure class="image-box">
                                                    <img src="assets/images/resource/floor-1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                         <div class="acc-btn">
                                            <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                            <h5>Third Floor</h5>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content-box">
                                                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim  est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem accusa dolore mque laudant.</p>
                                                <figure class="image-box">
                                                    <img src="assets/images/resource/floor-1.png" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Location</h4>
                                </div>
                                <ul class="info clearfix">
                                    <li><span>Address:</span> Virginia temple hills</li>
                                    <li><span>Country:</span> United State</li>
                                    <li><span>State/county:</span> California</li>
                                    <li><span>Neighborhood:</span> Andersonville</li>
                                    <li><span>Zip/Postal Code:</span> 2403</li>
                                    <li><span>City:</span> Brooklyn</li>
                                </ul>
                                <div class="google-map-area">
                                    <div 
                                        class="google-map" 
                                        id="contact-google-map" 
                                        data-map-lat="40.712776" 
                                        data-map-lng="-74.005974" 
                                        data-icon-path="assets/images/icons/map-marker.png"  
                                        data-map-title="Brooklyn, New York, United Kingdom" 
                                        data-map-zoom="12" 
                                        data-markers='{
                                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                        }'>

                                    </div>
                                </div>
                            </div>
                            <div class="nearby-box content-widget">
                                <div class="title-box">
                                    <h4>What’s Nearby?</h4>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-book-reader"></i></div>
                                        <div class="inner">
                                            <h5>Education:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Western Reserve University <span>(2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Georgia Institute of Technology <span>(1.42 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Harvey Mudd College <span>(2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-coffee"></i></div>
                                        <div class="inner">
                                            <h5>Restaurant:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>SC Ranch Market <span>(3.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Chill On The Hill <span>(2.42 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Gordon Ramsay Hell's Kitchen <span>(1.22 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-capsules"></i></div>
                                        <div class="inner">
                                            <h5>Health & Medical:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>North Star Medical Clinic <span> (2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6>Clairvoyant Healing <span>(1.42 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="statistics-box content-widget">
                                <div class="title-box">
                                    <h4>Page Statistics</h4>
                                </div>
                                <figure class="image-box">
                                    <a href="assets/images/resource/statistics-1.png" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/statistics-1.png" alt=""></a>
                                </figure>
                            </div>
                            <div class="schedule-box content-widget">
                                <div class="title-box">
                                    <h4>Schedule A Tour</h4>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.html" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <input type="text" name="date" placeholder="Tour Date" id="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-clock"></i>
                                                    <input type="text" name="time" placeholder="Any Time">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Your Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Your Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" placeholder="Your Phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/resource/author-1.jpg" alt=""></figure>
                                    <div class="inner">
                                        <h4>Michael Bean</h4>
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i>84 St. John Wood High Street, 
                                            St Johns Wood</li>
                                            <li><i class="fas fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                        </ul>
                                        <div class="btn-box"><a href="agents-details.html">View Listing</a></div>
                                    </div>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.html" method="post" class="default-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="calculator-widget sidebar-widget">
                                <div class="calculate-inner">
                                    <div class="widget-title">
                                        <h4>Mortgage Calculator</h4>
                                    </div>
                                    <form method="post" action="mortgage-calculator.html" class="default-form">
                                        <div class="form-group">
                                            <i class="fas fa-dollar-sign"></i>
                                            <input type="number" name="total_amount" placeholder="Total Amount">
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-dollar-sign"></i>
                                            <input type="number" name="down_payment" placeholder="Down Payment">
                                        </div>
                                        <div class="form-group">
                                            <i class="fas fa-percent"></i>
                                            <input type="number" name="interest_rate" placeholder="Interest Rate">
                                        </div>
                                        <div class="form-group">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="number" name="loan" placeholder="Loan Terms(Years)">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Monthly">Monthly</option>
                                                   <option value="1">Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Calculate Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="similar-content">
                    <div class="title">
                        <h4>Similar Properties</h4>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                <h6>Michael Bean</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-2.jpg" alt=""></figure>
                                                <h6>Robert Niro</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$45,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                            <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-info clearfix">
                                            <div class="author pull-left">
                                                <figure class="author-thumb"><img src="assets/images/feature/author-3.jpg" alt=""></figure>
                                                <h6>Keira Mel</h6>
                                            </div>
                                            <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                        </div>
                                        <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>$63,000.00</h4>
                                            </div>
                                            <ul class="other-option pull-right clearfix">
                                                <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                            </ul>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>3 Beds</li>
                                            <li><i class="icon-15"></i>2 Baths</li>
                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                        </ul>
                                        <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-details end -->


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
                            <form action="contact.html" method="post" class="subscribe-form">
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
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{asset('frontend/assets/images/resource/footer-post-1.jpg')}}" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="{{asset('frontend/assets/images/resource/footer-post-2.jpg')}}" alt=""></a></figure>
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
                        <figure class="footer-logo"><a href="index.html"><img src="{{asset('frontend/assets/images/logob.png')}}" alt="" style="height:40px;"></a></figure>
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
    <script src="{{asset('frontend/assets/js/timePicker.js')}}"></script> 

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{asset('frontend/assets/js/gmaps.js')}}"></script>
    <script src="{{asset('frontend/assets/js/map-helper.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
