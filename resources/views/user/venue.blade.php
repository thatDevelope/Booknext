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
                        <span data-text-preloader="E" class="letters-loading">
                               E
                            </span>
                            <span data-text-preloader="V" class="letters-loading">
                                V
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                               T
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
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
            </div>
            <div class="switch_menu">
                < color changer -->
                <!-- <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
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
                    </ul>
                </div> 
            </div>
        </div>  -->
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
                            <figure class="logo"><a href="index.html"><img src="{{asset('frontend/assets/images/logob.png')}}" alt="" style="width:30px;"></a></figure>
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
                <li class="dropdown"><a href="index.html"><span>Listings</span></a>
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
                <li class="dropdown"><a href="index.html"><span>Agency</span></a>
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
                <li><a href="{{ route('contact')}}"><span>Contact</span></a></li>   
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
                            <figure class="logo"><a href=""><img src="{{asset('frontend/assets/images/logob.png')}}" alt="" style="height:30px;"></a></figure>
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
                    <h1>EventCenters</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>venue List</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
            
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar property-sidebar">
                            <div class="filter-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Property</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Type">All Type</option>
                                           <option value="1">Villa</option>
                                           <option value="2">Commercial</option>
                                           <option value="3">Residential</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Select Location">Select Location</option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="This Area Only">This Area Only</option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Type">Max Rooms</option>
                                           <option value="1">2+ Rooms</option>
                                           <option value="2">3+ Rooms</option>
                                           <option value="3">4+ Rooms</option>
                                           <option value="4">5+ Rooms</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Most Popular">Most Popular</option>
                                           <option value="1">Villa</option>
                                           <option value="2">Commercial</option>
                                           <option value="3">Residential</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Type">Select Floor</option>
                                           <option value="1">2x Floor</option>
                                           <option value="2">3x Floor</option>
                                           <option value="3">4x Floor</option>
                                        </select>
                                    </div>
                                    <div class="filter-btn">
                                        <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h5>Select Price Range</h5>
                                </div>
                                <div class="range-slider clearfix">
                                    <div class="clearfix">
                                        <div class="input">
                                            <input type="text" class="property-amount" name="field-name" readonly="">
                                        </div>
                                    </div>
                                    <div class="price-range-slider"></div>
                                </div>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Status Of Property</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="">For Rent <span>(200)</span></a></li>
                                    <li><a href="">For Sale <span>(700)</span></a></li>
                                </ul>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Amenities</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="">Air Conditioning <span>(17)</span></a></li>
                                    <li><a href="">Central Heating <span>(4)</span></a></li>
                                    <li><a href="">Cleaning Service <span>(12)</span></a></li>
                                    <li><a href="">Dining Room <span>(8)</span></a></li>
                                    <li><a href="">Dishwasher <span>(5)</span></a></li>
                                    <li><a href="">Dishwasher <span>(2)</span></a></li>
                                    <li><a href="">Family Room <span>(19)</span></a></li>
                                    <li><a href="">Onsite Parking <span>(11)</span></a></li>
                                    <li><a href="">Fireplace <span>(7)</span></a></li>
                                    <li><a href="">Hardwood Flows <span>(9)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Sort by: Newest">Sort by: Newest</option>
                                               <option value="1">New Arrival</option>
                                               <option value="2">Top Rated</option>
                                               <option value="3">Offer Place</option>
                                               <option value="4">Most Place</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="short-menu clearfix">
                                        <button class="list-view on"><i class="icon-35"></i></button>
                                        <button class="grid-view"><i class="icon-36"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                 


                                    <!-- <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/assets/images/resource/deals-3.jpg')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="property-details.html">For Booking</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb"> 
                                                            <img src="assets/images/feature/author-1.jpg" alt="">
                                                            <span>Michael Bean</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="{{ route('eventdetails')}}" class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/deals-4.jpg" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$20,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb"> 
                                                            <img src="assets/images/feature/author-1.jpg" alt="">
                                                            <span>Michael Bean</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('frontend/assets/images/resource/deals-5.jpg')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$35,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb"> 
                                                            <img src="{{asset('frontend/assets/images/feature/author-1.jpg')}}" alt="">
                                                            <span>Michael Bean</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/deals-6.jpg" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Apartment in Glasgow</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$45,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb"> 
                                                            <img src="{{asset('frontend/assets/images/feature/author-1.jpg')}}" alt="">
                                                            <span>Michael Bean</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="{{ route('eventdetails')}}" class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    <!-- </div> -->
                                    <div class="deals-block-one">
                                    @foreach($properties as $property)
                                    @if($property->status == 1) 
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{ asset($property->property_thambnail) }}" alt="" style="height:500px;"></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="">For Booking</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="">{{ $property->name }}</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>{{ $property->amount }}</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb"> 
                                                            <img src="assets/images/feature/author-1.jpg" alt="">
                                                            <span>{{ $property->client_name }}</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>{{ $property->short_descp }}</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>{{ $property->amenities_id }}</li>
                                                    <!-- <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li> -->
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                @if($property instanceof \App\Models\Hotel)
            <a href="{{ route('hotel.details', ['id' => $property->id, 'type' => 'hotel']) }}" class="theme-btn btn-two">Details</a>
        @elseif($property instanceof \App\Models\Shortlet)
            <a href="{{ route('shortlet.details', ['id' => $property->id, 'type' => 'shortlet']) }}" class="theme-btn btn-two">Details</a>
        @elseif($property instanceof \App\Models\Venue)
            <a href="{{ route('venue.details', ['id' => $property->id, 'type' => 'venue']) }}" class="theme-btn btn-two">Details</a>
        @endif
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href=""><i class="icon-12"></i></a></li>
                                                        <li><a href=""><i class="icon-13"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                       @endforeach
                                    </div>
                                    </div>
                                </div>
                                <!-- @foreach ($venues as $venue)
                                <div class="deals-grid-content grid-item">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="{{ asset($venue->property_thambnail) }}" alt="" style="width: 450px; height: 280px;  "></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-info clearfix">
                                                            <div class="author pull-left">
                                                                <figure class="author-thumb"><img src="{{ asset($venue->property_thambnail) }}" alt=""></figure>
                                                                <h6>{{ $venue->client_name }}</h6>
                                                            </div>
                                                            <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                                        </div>
                                                        <div class="title-text"><h4><a href="property-details.html">{{ $venue->name }}</a></h4></div>
                                                        <p>{{ $venue->location }}</p>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>{{ $venue->amount }}</h4>
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
                                        @endforeach -->
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
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
                                        </div> -->
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
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
                                        </div> -->
                                        <div class="row clearfix">
    @foreach ($venues as $venue)
    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
        <div class="feature-block-one">
            <div class="inner-box">
                <div class="image-box">
                    <figure class="image">
                        <img src="{{ asset($venue->property_thambnail) }}" alt="" style="width: 450px; height: 280px;">
                    </figure>
                    <div class="batch"><i class="icon-11"></i></div>
                    <span class="category">Featured</span>
                </div>
                <div class="lower-content">
                    <div class="author-info clearfix">
                        <div class="author pull-left">
                            <figure class="author-thumb">
                                <img src="{{ asset($venue->property_thambnail) }}" alt="">
                            </figure>
                            <h6>{{ $venue->client_name }}</h6>
                        </div>
                        <div class="buy-btn pull-right">
                            <a href="property-details.html">For Booking</a>
                        </div>
                    </div>
                    <div class="title-text">
                        <h4><a href="property-details.html">{{ $venue->name }}</a></h4>
                    </div>
                    <p>{{ $venue->location }}</p>
                    <div class="price-box clearfix">
                        <div class="price-info pull-left">
                            <h6>Start From</h6>
                            <h4>{{ $venue->amount }}</h4>
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
                    <div class="btn-box">
                        <a href="{{route('venue.details', $venue->id)}}" class="theme-btn btn-two">See Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


                                        
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/feature/feature-5.jpg" alt=""></figure>
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
                                                        <div class="title-text"><h4><a href="property-details.html">Apartment in Glasgow</a></h4></div>
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
                                        </div> -->
                                        
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img src="assets/images/feature/feature-6.jpg" alt=""></figure>
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
                                                        <div class="title-text"><h4><a href="property-details.html">Family Home For Sale</a></h4></div>
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
                            </div> -->
                            <div class="pagination-wrapper">
    <ul class="pagination clearfix">
        <!-- Previous Page Link -->
        @if ($venues->onFirstPage())
            <li class="disabled"><span><i class="fas fa-angle-left"></i></span></li>
        @else
            <li><a href="{{ $venues->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
        @endif

        <!-- Pagination Elements -->
        @foreach ($venues->links()->elements as $element)
            <!-- Make three dots for breaks -->
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $venues->currentPage())
                        <li class="active"><a href="{{ $url }}" class="current">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($venues->hasMorePages())
            <li><a href="{{ $venues->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a></li>
        @else
            <li class="disabled"><span><i class="fas fa-angle-right"></i></span></li>
        @endif
    </ul>
</div>

                    </div>
                </div>
            </div>
        </section>
        <!-- property-page-section end -->


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
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
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
                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
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
