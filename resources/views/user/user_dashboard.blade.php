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
        <div class="loader-wrap">
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
        </div>
        <!-- preloader end -->


        <!-- switcher menu -->
   
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
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-vimeo-v"></i></a></li>
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
    <figure class="logo"><a href="index.html"><img src="{{asset('frontend/assets/images/logob.png')}}" alt=""  style="height: 50px;"></a></figure>
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
                <li class="dropdown"><a href=""><span>Agency</span></a>
                    <ul>
                        <li><a href="{{ route('agent') }}">Agency Registration</a></li>
                        <!-- <li><a href="agency-grid.html">Agency Grid</a></li> -->
                        <li><a href="">Agency Details</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route('blog')}}"><span>Blog</span></a>
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
                            <figure class="logo"><a href="index.html"><img src="{{asset('frontend/assets/images/logob.png')}}" alt="" style="height: 50px;"></a></figure>
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
                <div class="nav-logo"><a href="index.html"><img src="{{asset('frontend/assets/images/logo-2.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Ajah langbasa Salvation Estate Lagos</li>
                        <li><a href="tel:+8801682648101">08136904968</a></li>
                        <li><a href="mailto:info@example.com">tsirchi@gmail.com</a></li>
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
        @yield('users')


        <!-- banner-section -->
       @yield('user')
        <!-- banner-section end -->


        <!-- category-section -->
        <section class="category-section centred">
            <div class="auto-container">
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <ul class="category-list clearfix">
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><a href="{{ route('venues')}}"><i class="icon-1"></i></a></div>
                                    <h5><a href="{{ route('venues')}}">Event Venues</a></h5>
                                    <span>{{ $usercount }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><a href="{{ route('shortlets')}}" ><i class="icon-2"></i></a></div>
                                    <h5><a href="{{ route('shortlets')}}">Shortlet</a></h5>
                                    <span>{{ $shortletcount }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><a href="{{ route('hotels')}}"><i class="icon-3"></i></a></div>
                                    <h5><a href="{{ route('hotels')}}">Hotels</a></h5>
                                    <span>{{ $hotelcount }}</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h5><a href="property-details.html">Others</a></h5>
                                    <span>10</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-5"></i></div>
                                    <h5><a href="property-details.html">coming soon</a></h5>
                                    <!-- <p>Anticipate</p> -->
                                    <span>27</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="more-btn"><a href="categories.html" class="theme-btn btn-one">All Categories</a></div>
                </div>
            </div>
        </section>
        <!-- category-section end -->


        <!-- feature-section -->
        <section class="feature-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Features</h5>
                    <h2>Featured Listings</h2>
                    <p>Discover top-rated venues, luxurious apartments, and premium hotels for your next event. <br />Experience exceptional service and unmatched convenience, all in one place. </p>
                </div>
                
                <div class="row clearfix">

                @foreach($properties as $property)
                @if($property->status == 1) 

                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset($property->property_thambnail) }}" alt="" style="width: 450px; height: 280px;"></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{ asset('upload/' . $property->user->photo) }}" alt=""></figure>
                                            <h6>{{ $property->client_name }}</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Booking</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">{{ $property->name }}</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>{{ $property->amount }}</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>{{ $property->short_descp}}.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>{{ $property->amenities_id }}</li>
                                        <!-- <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li> -->
                                    </ul>
                                    @if($property instanceof \App\Models\Hotel)
            <a href="{{ route('hotel.details', ['id' => $property->id, 'type' => 'hotel']) }}" class="theme-btn btn-two">Details</a>
        @elseif($property instanceof \App\Models\Shortlet)
            <a href="{{ route('shortlet.details', ['id' => $property->id, 'type' => 'shortlet']) }}" class="theme-btn btn-two">Details</a>
        @elseif($property instanceof \App\Models\Venue)
            <a href="{{ route('venue.details', ['id' => $property->id, 'type' => 'venue']) }}" class="theme-btn btn-two">Details</a>
        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
           
           
                    @endforeach  



                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('frontend/assets/images/feature/feature-2.jpg')}}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/feature/author-2.jpg')}}" alt=""></figure>
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
                    <!-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('frontend/assets/images/feature/feature-3.jpg')}}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/feature/author-3.jpg')}}" alt=""></figure>
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
                </div>

                <div class="more-btn centred"><a href="property-list.html" class="theme-btn btn-one">View All Listing</a></div>
            </div>
            
        </section>
        <!-- feature-section end -->


        <!-- video-section -->
        <section class="video-section centred" style="background-image: url({{asset('frontend/assets/images/background/video-1.jpg')}});">
            <div class="auto-container">
                <div class="video-inner">
                    <div class="video-btn">
                        <a href="https://youtu.be/GeNoeigAOmI" class="lightbox-image" data-caption=""><i class="icon-17"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->


        <!-- deals-section -->
        <section class="deals-section sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Hot Property</h5>
                    <h2>Our Best Deals</h2>
                </div>
                         
 <div class="row clearfix">
 @foreach($properties as $property)
 @if($property->status == 1)   
   <div class="col-lg-4 col-md-6 col-sm-12 feature-block" >
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                
                                    <figure class="image"><img src="{{ asset($property->property_thambnail) }}" alt="" style="width: 370px; height: 250px;"></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                        
                                            <figure class="author-thumb"><img src="{{ asset('upload/' . $property->user->photo) }}" alt="" ></figure>
                                            
                                            <h6>{{ $property->client_name }}</h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.html">{{ $property->name }}</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>{{ $property->amount }}</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                     
                                    <ul class="more-details clearfix" >
                                        <li><i class="icon-14"></i>{{ $property->amenities_id }}</li>
                                        <!-- <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li> -->
                                    </ul>
                                    @if($property instanceof \App\Models\Hotel)
            <a href="{{ route('hotel.details', ['id' => $property->id, 'type' => 'hotel']) }}" class="theme-btn btn-two">Details</a>
        @elseif($property instanceof \App\Models\Shortlet)
            <a href="{{ route('shortlet.details', ['id' => $property->id, 'type' => 'shortlet']) }}" class="theme-btn btn-two">Details</a>
        @elseif($property instanceof \App\Models\Venue)
            <a href="{{ route('venue.details', ['id' => $property->id, 'type' => 'venue']) }}" class="theme-btn btn-two">Details</a>
        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
           
           
           @endforeach  




                       <!-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('frontend/assets/images/feature/feature-1.jpg')}}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/feature/author-1.jpg')}}" alt=""></figure>
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


<!-- <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('frontend/assets/images/feature/feature-1.jpg')}}" alt=""></figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/feature/author-1.jpg')}}" alt=""></figure>
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

            </div> -->
        </section>
        <!-- deals-section end -->


        <!-- testimonial-section end -->
        <section class="testimonial-section bg-color-1 centred">
            <div class="pattern-layer" style="background-image: url({{asset('frontend/assets/images/shape/shape-1.png')}});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Testimonials</h5>
                    <h2>What They Say About Us</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box"><img src="{{asset('frontend/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                            <div class="text">
                            <p>Our mission is to ensure that every guest's experience exceeds expectations. We are committed to providing venues, shortlet apartments, and hotels that offer unmatched comfort and convenience for all your events and stays.</p>

                            </div>
                            <div class="author-info">
                                <h4>Rebeka Dawson</h4>
                                <span class="designation">Instructor</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box"><img src="{{asset('frontend/assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                            <div class="text">
                            <p>Our daily mission is to surpass the expectations of our guests. We strive to create inviting and exceptional spaces in our event venues, shortlet apartments, and hotels, ensuring every moment is enjoyable and memorable.</p>

                            </div>
                            <div class="author-info">
                                <h4>Marc Kenneth</h4>
                                <span class="designation">Founder CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <figure class="thumb-box"><img src="{{asset('frontend/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                            <div class="text">
                            <p>Each day, our focus is on exceeding the expectations of our guests. We are dedicated to offering exceptional event venues, shortlet apartments, and hotels, ensuring a memorable and enjoyable experience for every stay or event.</p>

                            </div>
                            <div class="author-info">
                                <h4>Owen Lester</h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section">
            <div class="auto-container">
                <div class="inner-container bg-color-2">
                    <div class="upper-box clearfix">
                        <div class="sec-title light">
                            <h5>Why Choose Us?</h5>
                            <h2>Reasons To Choose Us</h2>
                        </div>
                        <div class="btn-box">
                            <a href="categories.html" class="theme-btn btn-one">All Categories</a>
                        </div>
                    </div>
                    <div class="lower-box">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-19"></i></div>
                                        <h4>Excellent Reputation</h4>
                                        <p>We are proud to be recognized for our excellence in providing top-tier event venues, luxurious shortlet apartments, and premium hotels. Our commitment to quality and exceptional service has earned us a reputation for reliability and customer satisfaction, making us the trusted choice for all your event and accommodation needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-26"></i></div>
                                        <h4>Best Local Agents</h4>
                                        <p>Our platform partners with the most knowledgeable and reliable local agents to ensure you find the perfect venue, shortlet apartment, or hotel. Their expertise and dedication to your satisfaction make the booking process seamless and stress-free, ensuring you receive the best service and options tailored to your specific needs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                                <div class="chooseus-block-one">
                                    <div class="inner-box">
                                        <div class="icon-box"><i class="icon-21"></i></div>
                                        <h4>Personalized Service</h4>
                                        <p>We believe that every guest deserves a unique and tailored experience. Whether you're booking a venue, shortlet apartment, or hotel, our personalized service ensures that your specific preferences and needs are met with attention to detail, creating a truly memorable and enjoyable experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- place-section -->
        <!-- <section class="place-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>Top Places</h5>
                    <h2>Most Popular Places</h2>
                    <p>Discover the most sought-after event venues, shortlet apartments, and hotels in prime locations. <br />From stunning event spaces to luxurious accommodations, these top-rated choices are perfect for your next celebration or getaway.</p>
                </div>
                <div class="sortable-masonry">
                    <div class="items-container row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/place-1.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Los Angeles</a></h4>
                                        <p>10 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/place-2.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">San Francisco</a></h4>
                                        <p>08 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/place-3.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">Las Vegas</a></h4>
                                        <p>29 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                            <div class="place-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="{{asset('frontend/assets/images/resource/place-4.jpg')}}" alt=""></figure>
                                    <div class="text">
                                        <h4><a href="categories.html">New York City</a></h4>
                                        <p>05 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- place-section end -->


        <!-- team-section -->
        <!-- <section class="team-section sec-pad centred bg-color-1">
            <div class="pattern-layer" style="background-image: url({{asset('frontend//assets/images/shape/shape-1.png')}});"></div>
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Agents</h5>
                    <h2>Meet Our Excellent Agents</h2>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('frontend/assets/images/team/team-3.jpg')}}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Merrie Lewis</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('frontend/assets/images/team/team-2.jpg')}}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Parks Missie</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('frontend/assets/images/team/team-3.jpg')}}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Mariana Buenos</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('frontend/assets/images/team/team-4.jpg')}}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Stephen Fowler</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('frontend/assets/images/team/team-5.jpg')}}" alt=""></figure>
                            <div class="lower-content">
                                <div class="inner">
                                    <h4><a href="agents-details.html">Daisy Phillips</a></h4>
                                    <span class="designation">Senior Agent</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- team-section end -->


        <!-- cta-section -->
        <section class="cta-section bg-color-2">
            <div class="pattern-layer" style="background-image: url({{asset('frontend/assets/images/shape/shape-2.png')}});"></div>
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text pull-left">
                        <h2>Looking to Book the Perfect Venue or <br />Secure a Premium Stay?</h2>
                    </div>
                    <div class="btn-box pull-right">
                        <a href="{{route('venues')}}" class="theme-btn btn-three">Book a venue</a>
                        <a href="{{ route('hotels')}}" class="theme-btn btn-one">Book a Hotel Room</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- news-section -->
        <section class="news-section sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h5>News & Article</h5>
                    <h2>Stay Update With Events And EventNest</h2>
                    <p>Never miss a moment with EventNest! Discover the latest events, venue updates, and exclusive offerings tailored just for you. Whether you're planning a grand celebration, booking a cozy stay, or looking for the perfect event space, EventNest keeps you informed every step of the way. </br> Join our community to stay ahead of the curve and make your events truly unforgettable.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="{{asset('frontend/assets/images/news/news-1.jpg')}}" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Including Animation In Your Design System</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/news/author-1.jpg')}}" alt=""></figure>
                                            <h5><a href="blog-details.html">Eva Green</a></h5>
                                        </li>
                                        <li>April 10, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="{{asset('frontend/assets/images/news/news-2.jpg')}}" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">Taking The Pattern Library To The Next Level</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/news/author-2.jpg')}}" alt=""></figure>
                                            <h5><a href="">George Clooney</a></h5>
                                        </li>
                                        <li>April 09, 2020</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                    </div>
                                    <div class="btn-box">
                                        <a href="" class="theme-btn btn-two">See Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="blog-details.html"><img src="{{asset('frontend/assets/images/news/news-3.jpg')}}" alt=""></a></figure>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="blog-details.html">How New Font Technologies Will Improve The Web</a></h4>
                                    <ul class="post-info clearfix">
                                        <li class="author-box">
                                            <figure class="author-thumb"><img src="{{asset('frontend/assets/images/news/author-3.jpg')}}" alt=""></figure>
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
            </div>
        </section>
        <!-- news-section end -->


        <!-- download-section -->
        <section class="download-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('frontend/assets/images/resource/download-1.png')}}" alt=""></figure>
                            <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{ asset('frontend/assets/images/resource/download-2.png')}}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <span>Download</span>
                                <h2>Download Our Android and IOS App for Experience(coming soon)</h2>
                                <div class="download-btn">
                                    <a href="" class="app-store">
                                        <i class="fab fa-apple"></i>
                                        <p>Download on(coming soon)</p>
                                        <h4>App Store</h4>
                                    </a>
                                    <a href="" class="google-play">
                                        <i class="fab fa-google-play"></i>
                                        <p>Get It On</p>
                                        <h4>Google Play</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- download-section end -->


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
<!-- {{asset('frontend/')}} -->

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
    <script src="{{asset('frontend/assets/js/nav-tool.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
