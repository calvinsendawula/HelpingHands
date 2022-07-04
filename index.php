<?php
  session_start();
  include('PHP/phpMethods.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Helping Hands</title>

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/swiper.min.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/custom-animate.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>

    <!-- Main Header-->
    <header class="main-header">
        <!-- Top bar -->
        <div class="top-bar theme-bg">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="left-content">
                        <div class="language-switcher">
                            <div class="languages">
                                <span class="current" title="English">En</span>
                                <span class="hover">English</span>
                                <ul>
                                <li><a href="#">English</a></li>
                                    <li><a href="#">Hindi</a></li>
                                    <li><a href="#">Tamil</a></li>
                                    <li><a href="#">Kannada</a></li>
                                    <li><a href="#">Gujarathi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text">We only have what we give... <a href="#" class="donate-box-btn">Donate Now.</a></div>
                    </div>
                    <div class="right-content">
                        <ul class="contact-info">
                            <li><span class="flaticon-mail"></span><a href="mailto:support@helpinghands.com">support@helpinghands.com</a></li>
                            <li><span class="flaticon-phone"></span><a href="tel:+254456789">+254 456 789</a></li>
                        </ul>
                        <ul class="social-icon-one">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="logo-column">
                        <div class="logo-box">
                            <div class="logo"><a href="#"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="option-wrapper">
                            <div class="nav-outer">

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-xl navbar-dark">

                                    <div class="collapse navbar-collapse">
                                        <ul class="navigation">
                                            <li class="dropdown current"><a href="index.html">Home</a>
                                                <ul>
                                                    <li><a href="#">Home Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">FAQ’s</a></li>
                                                    <li><a href="#">Meet Our Team</a></li>
                                                    <li class="dropdown"><a href="#">Portfolio</a>
                                                        <ul>
                                                            <li><a href="#">Our Portfolio</a></li>
                                                            <!--<li><a href="portfolio-1.html">Style 01 - Grid View</a></li>
                                                            <li><a href="portfolio-2.html">Style 02 - Grid View</a></li>
                                                            <li><a href="portfolio-3.html">Style 01 - Masonry View</a></li>
                                                            <li><a href="portfolio-4.html">Style 02 - Masonry View</a></li>-->
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown"><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="#">Our Merchandise</a></li>
                                                            <li><a href="#">Products Single</a></li>
                                                            <li><a href="#">Shopping Cart</a></li>
                                                            <li><a href="#">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Causes</a>
                                                <ul>
                                                    <li><a href="#">Our Causes</a></li>
                                                    <!-- <li><a href="causes-1.html">Style 01 - Grid View</a></li>
                                                    <li><a href="causes-2.html">Style 02 - List View</a></li>
                                                    <li><a href="causes-3.html">Style 01 - Carousel</a></li>
                                                    <li><a href="cause-details.html">Single Cause</a></li> -->
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Events</a>
                                                <ul>
                                                    <li><a href="#">Events</a></li>
                                                    <li><a href="#">Single Event</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Account</a>
                                                <ul>
                                                    <li><a href="<?php donorDashRedirectPage(); ?>"><?php donorDashRedirectDisplay(); ?></a></li>
                                                    <li><a href="<?php donorLogoutPage(); ?>"><?php donorLogoutDisplay(); ?></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->
                            </div>
                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="#">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-btn">
                                <div class="cart-icon"><span class="flaticon-comment"></span><span class="item-count">0</span></div>
                            </div>
                            <div class="navbar-btn-wrap">
                                <button class="anim-menu-btn">
                                  <i class="flaticon-menu"></i>
                                </button>
                            </div>
                            <div class="link-btn">
                                <a href="#" class="theme-btn btn-style-one"><span>Sponsor a child</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--End Header Upper-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="logo-column">
                        <div class="logo-box">
                            <div class="logo"><a href="#"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>
                    </div>
                    <div class="menu-column">
                        <div class="nav-outer">

                            <div class="nav-inner">

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-xl navbar-dark">

                                    <div class="collapse navbar-collapse">
                                        <ul class="navigation">
                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu style-one">
            <div class="menu-box">
                <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-xl navbar-dark">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="flaticon-menu"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navigation">

                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
                <!--Search Box-->
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu4">
                            <li class="panel-outer">
                                <div class="form-container">
                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="hidden-sidebar-close"><span class="flaticon-cross"></span></div>
            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
            <div class="content">
                <div class="about-widget-four sidebar-widget">
                    <h3>To improve the transition process from primary schools</h3>
                    <!-- <div class="text">We denounce with righteous indignation and dislike men who we are to beguiled demoralized by the charms of pleasures that moment, so we blinded desires, that they indignations.</div> -->
                </div>
                <!-- News Widget -->
                <div class="news-widget-two sidebar-widget">
                    <div class="widget-title">News & Updates</div>
                    <div class="post-wrapper">
                        <div class="image"><a href="#"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                        <div class="category">High School</div>
                        <h4><a href="#">Helping Hands partners with many high schools</a></h4>
                    </div>
                    <div class="post-wrapper">
                        <div class="image"><a href="#"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                        <div class="category">Education</div>
                        <h4><a href="#">Helping Hands improves education infrastructure</a></h4>
                    </div>
                </div>
                <!-- Newsletter Widget -->
                <div class="newsletter-widget-two">
                    <div class="widget-title">Newsletter Subscription</div>
                    <form action="#">
                        <input type="email" placeholder="Enter Email Address">
                        <button class="theme-btn btn-style-one w-100"><i class="flaticon-next"></i><span>Subscribe Us</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(images/main-slider/1.jpg);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h4><span class="border-shape-left"></span>Heping Hands Foundation<span class="border-shape-right"></span></h4>
                                <h1>Sponsor a child</h1>
                                <div class="text">How can I help support a child to join high school?<br>Start here.</div>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(images/main-slider/2.jpg);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <!-- <div class="link-box-two"><a href="#" class="theme-btn default-btn">help the needy</a></div> -->
                                <h3>To improve learning environment in primary schools</h3>
                                <h1>Together we can make <br>a Difference</h1>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(images/main-slider/3.jpg);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>Keep a child in High School</h1>
                                <!-- <div class="text">To improve the learning environment in primary schools by <br>holistically creating world-class.</div> -->
                                <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-pagination style-two"></div>
            <div class="banner-slider-nav style-one">
                <div class="banner-slider-control banner-slider-button-prev"><span class="fa fa-angle-left"></span></div>
                <div class="banner-slider-control banner-slider-button-next"><span class="fa fa-angle-right"></span> </div>
            </div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content-block">
                        <h1>Be part of a change <br>you want to see in the world</h1>
                        <h4>“Generosity consists not of the sum given, but the manner in <br>which it is bestowed.”</h4>
                        <div class="text wow fadeInUp" data-wow-delay="200ms">Driven by the high entry costs of joining high school, <br>we at helping hands are helping change the education <br>situation in Kenya.</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="link-btn wow fadeInLeft" data-wow-delay="500ms"><a href="#" class="theme-btn btn-style-two"><i class="flaticon-next"></i><span>Our Mission</span></a></div>
                                <div class="text">One donation at a time, we are helping put primary school students in high school.</div>
                            </div>
                            <div class="col-md-6">
                                <div class="link-btn wow fadeInRight" data-wow-delay="900ms"><a href="#" class="theme-btn btn-style-three"><i class="flaticon-next"></i><span>Our Vision</span></a></div>
                                <div class="text">Join our Sponsor-a-Child drive and help keep a child in high school.</div>
                            </div>
                        </div>
                        <div class="link-btn-two">
                            <a href="#" class="theme-btn btn-style-one"><span>More About Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-block">
                        <div class="logo-box"><div class="image wow zoomIn" data-wow-delay="500ms"><img src="images/resource/logo-icon.png" alt=""></div></div>
                        <div class="image-one wow fadeInUp" data-wow-delay="200ms"><img src="images/resource/image-1.jpg" alt=""></div>
                        <div class="image-two"><img src="images/resource/image-2.jpg" alt=""><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox"><span class="flaticon-multimedia"></span></a></div>
                        <div class="image-three wow fadeInRight" data-wow-delay="200ms"><img src="images/resource/image-3.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section -->
    <section class="causes-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Causes we care about</h1>
                <div class="text">We connect nonprofits, donors, and companies from around the country.</div>
            </div>
            <div class="cause-carousel-wrapper">
                <div class="cause-carousel owl-theme owl-carousel owl-dots-none owl-nav-style-three">
                    <!-- Cause Block One -->
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image"><a href="cause-details.html"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="#">Help Kenyan children</a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span>Education</a></div>
                                <div class="text">Help Madaraka Primary School today.</div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.72000</a>
                                    <a href="#"><span>Goal:</span> Kshs.100000</a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">Raised by 84 people in 12 days</div>
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="cause-details.html" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                    <div class="share-icon post-share-icon">
                                        <div class="share-btn"><i class="flaticon-share"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block One -->
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image"><a href="cause-details.html"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="cause-details.html">Help sponsor students</a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span>High School Fees</a></div>
                                <div class="text">Difference, one donation at a time</div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.40000</a>
                                    <a href="#"><span>Goal:</span> Kshs.80000</a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">Raised by 36 people in 08 days</div>
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="cause-details.html" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                    <div class="share-icon post-share-icon">
                                        <div class="share-btn"><i class="flaticon-share"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block One -->
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image"><a href="cause-details.html"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="cause-details.html">Donation for Dan Njoroge</a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span>Nanyuki High School</a></div>
                                <div class="text">Help Dan stay in high school.</div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.32000</a>
                                    <a href="#"><span>Goal:</span> Kshs.45000</a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">Raised by 56 people in 15 days</div>
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="cause-details.html" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                    <div class="share-icon post-share-icon">
                                        <div class="share-btn"><i class="flaticon-share"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block One -->
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image"><a href="cause-details.html"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="cause-details.html">Help Kenyan children</a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span>Education</a></div>
                                <div class="text">Help Madaraka Primary School today.</div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.72000</a>
                                    <a href="#"><span>Goal:</span> Kshs.100000</a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">Raised by 84 people in 12 days</div>
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="cause-details.html" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                    <div class="share-icon post-share-icon">
                                        <div class="share-btn"><i class="flaticon-share"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block One -->
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image"><a href="cause-details.html"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="cause-details.html">Help sponsor students</a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span>High School Fees</a></div>
                                <div class="text">Difference, one donation at a time</div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.40000</a>
                                    <a href="#"><span>Goal:</span> Kshs.80000</a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">Raised by 36 people in 08 days</div>
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="cause-details.html" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                    <div class="share-icon post-share-icon">
                                        <div class="share-btn"><i class="flaticon-share"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block One -->
                    <div class="cause-block-one">
                        <div class="inner-box">
                            <div class="image"><a href="cause-details.html"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="cause-details.html">Donation for Dan Njoroge</a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span>Nanyuki High School</a></div>
                                <div class="text">Help Dan stay in high school.</div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.32000</a>
                                    <a href="#"><span>Goal:</span> Kshs.45000</a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">Raised by 56 people in 15 days</div>
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="cause-details.html" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                                    <div class="share-icon post-share-icon">
                                        <div class="share-btn"><i class="flaticon-share"></i></div>
                                        <ul>
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donor Section -->
    <section class="donor-section" style="background-image: url(images/background/bg-1.jpg);">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8 left-column">
                    <div class="sec-title light">
                        <h1>Some of our donors</h1>
                        <div class="text">We connects nonprofits, donors, and companies in nearly every country around the country.</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 donor-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="images/resource/donor-1.jpg" alt="">
                                        <div class="overlay">
                                            <div class="icon"><a href="#"><span class="fa fa-twitter"></span></a></div>
                                        </div>
                                    </div>
                                    <h4>Leon Wafula</h4>
                                    <div class="location">Rongai</div>
                                </div>
                                <div class="bottom-content">
                                    <div class="text">Donation</div>
                                    <div class="price">Kshs.2500</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 donor-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="500ms">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="images/resource/donor-2.jpg" alt="">
                                        <div class="overlay">
                                            <div class="icon"><a href="#"><span class="fa fa-twitter"></span></a></div>
                                        </div>
                                    </div>
                                    <h4>Alvina Kyalo</h4>
                                    <div class="location">Karen</div>
                                </div>
                                <div class="bottom-content">
                                    <div class="text">Donation</div>
                                    <div class="price">Kshs.30000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 donor-block">
                            <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="images/resource/donor-3.jpg" alt="">
                                        <div class="overlay">
                                            <div class="icon"><a href="#"><span class="fa fa-twitter"></span></a></div>
                                        </div>
                                    </div>
                                    <h4>John Omondi</h4>
                                    <div class="location">Ruaka</div>
                                </div>
                                <div class="bottom-content">
                                    <div class="text">Donation</div>
                                    <div class="price">Kshs.5000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 right-column">
                    <div class="feature-block-one wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon-box"><span class="flaticon-world"></span></div>
                        <h4>Impacting <br>education</h4>
                    </div>
                    <div class="feature-block-one wow fadeInUp" data-wow-delay="400ms">
                        <div class="icon-box"><span class="flaticon-reward"></span></div>
                        <h4>Publicity <br>or anonymity</h4>
                    </div>
                    <div class="feature-block-one wow fadeInUp" data-wow-delay="600ms">
                        <div class="icon-box"><span class="flaticon-shield"></span></div>
                        <h4>Guaranteed <br>and secure transfers</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section -->
    <section class="funfacts-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Numbers speaking</h1>
                <!-- <div class="text">Love learning about crazy facts? Then read these amazing facts that will tickle your brain.</div> -->
            </div>
            <div class="outer-box">
                <div class="funfact-wrapper row">
                    <!--Column-->
                    <div class="col-lg-4 counter-block wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="images/icons/icon-3.png" alt=""></div>
                            <h4>Beneficiaries</h4>
                            <div class="count-box">
                                <span class="prefix">Kshs.</span><span class="count-text" data-speed="3000" data-stop="144">0</span><span class="affix">K</span>
                            </div>
                            <div class="text">Help raise the number of direct beneficiaries of our <br>foundation programme.</div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-4 counter-block wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="images/icons/icon-4.png" alt=""></div>
                            <h4>Happy Donors</h4>
                            <div class="count-box">
                                <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="67">0</span><span class="affix">+</span>
                            </div>
                            <div class="text">458+ people donate our charity to with <br>100% happy heart.</div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-4 counter-block wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                            <h4>Beneficiaries</h4>
                            <div class="count-box">
                                <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="23">0</span><span class="affix"></span>
                            </div>
                            <div class="text">Our work would not be possible without <br>our dedicated donors.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-content text-center">
                <!-- <div class="text">Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the <br>moment, so blinded by desire, that they cannot foresee.</div> -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
            </div>
        </div>
    </section>

    <!--Events Section-->
    <section class="events-section">

        <!--Event Tabs-->
        <div class="event-tabs">
            <div class="auto-container">
                <div class="row m-0 justify-content-md-between align-items-end">
                    <div class="sec-title">
                        <h1>Our fundraising events</h1>
                        <div class="text">Here are our exciting events...would be great to see you at the next one!</div>
                    </div>
                    <!--Tabs Header-->
                    <div class="tabs-header clearfix">
                        <ul class="event-tab-btns clearfix">
                            <li class="event-tab-btn active-btn" data-tab="#event-tab-1">Ongoing</li>
                            <li class="event-tab-btn" data-tab="#event-tab-2">Upcoming</li>
                        </ul>
                    </div>
                </div>
                <div class="event-tab-wrapper">
                    <!--Tabs Content-->
                    <div class="event-tabs-content">
                        <!--Event Tab / Active Tab-->
                        <div class="event-tab active-tab" id="event-tab-1">
                            <div class="event-carousel owl-theme owl-carousel owl-dot-style-one owl-nav-none">
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>25</h1>
                                                <div class="text"><span>August</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Donation drive dedicated to <br>school clothing</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>24, Kimathi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>16</h1>
                                                <div class="text"><span>October</span> <br>10.00am  - 05.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">100% primary to secondary school transition goal</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>213, Moi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>27</h1>
                                                <div class="text"><span>December</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Madaraka Primary School <br>sports day obstacle race</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>5404, Keri Road</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>25</h1>
                                                <div class="text"><span>August</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Donation drive dedicated to <br>school clothing</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>24, Kimathi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>16</h1>
                                                <div class="text"><span>October</span> <br>10.00am  - 12.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">100% primary to secondary school transition goal</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>213, Moi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>27</h1>
                                                <div class="text"><span>December</span> <br>10.00am  - 05.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Madaraka Primary School <br>sports day obstacle race</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>5404, Keri Road</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>25</h1>
                                                <div class="text"><span>August</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Donation drive dedicated to <br>school clothing</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>24, Kimathi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>16</h1>
                                                <div class="text"><span>October</span> <br>10.00am  - 12.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">100% primary to secondary school transition goal</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>213, Moi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>27</h1>
                                                <div class="text"><span>December</span> <br>10.00am  - 05.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Madaraka Primary School <br>sports day obstacle race</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>5404, Keri Road</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Tab-->
                        <div class="event-tab" id="event-tab-2">
                            <div class="event-carousel owl-theme owl-carousel owl-dot-style-one owl-nav-none">
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>25</h1>
                                                <div class="text"><span>August</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Donation drive dedicated to <br>school clothing</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>24, Kimathi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>16</h1>
                                                <div class="text"><span>October</span> <br>10.00am  - 05.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">100% primary to secondary school transition goal</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>213, Moi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>27</h1>
                                                <div class="text"><span>December</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Madaraka Primary School <br>sports day obstacle race</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>5404, Keri Road</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>25</h1>
                                                <div class="text"><span>August</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Donation drive dedicated to <br>school clothing</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>24, Kimathi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>16</h1>
                                                <div class="text"><span>October</span> <br>10.00am  - 12.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">100% primary to secondary school transition goal</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>213, Moi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>27</h1>
                                                <div class="text"><span>December</span> <br>10.00am  - 05.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Madaraka Primary School <br>sports day obstacle race</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>5404, Keri Road</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>25</h1>
                                                <div class="text"><span>August</span> <br>09.00am  - 03.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Donation drive dedicated to <br>school clothing</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>24, Kimathi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>16</h1>
                                                <div class="text"><span>October</span> <br>10.00am  - 12.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">100% primary to secondary school transition goal</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>213, Moi Avenue</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1>27</h1>
                                                <div class="text"><span>December</span> <br>10.00am  - 05.00pm</div>
                                            </div>
                                            <h4><a href="event-details.html">Madaraka Primary School <br>sports day obstacle race</a></h4>
                                            <div class="location"><span class="flaticon-point"></span>5404, Keri Road</div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join With Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonial Section Four -->
    <section class="testimonial-section-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Why choose Helping Hands</h1>
                <div class="text">Please read below to see what a few of our program beneficiaries have to say about us.</div>
            </div>
            <div class="row">
                <div class="three-item-carousel owl-theme owl-carousel owl-nav-none owl-dot-style-one">
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/client-thumb-1.jpg" alt=""></div>
                            <h4>It’s helped me so much.</h4>
                            <div class="text">Helping Hands! charities provided the jump <br>start I needed to join high school.</div>
                            <div class="author-title">Isaac Mwangi</div>
                            <div class="designation">Form 3 student <a href="#">Molo Academy</a></div>
                        </div>
                    </div>
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/client-thumb-2.jpg" alt=""></div>
                            <h4>Thank you for your support.</h4>
                            <div class="text">Thank you so much for making it possible <br>for me to join high school. I am very happy <br>to be a part of your program.</div>
                            <div class="author-title">Lucas Wahome</div>
                            <div class="designation">Form 1 student  <a href="#">Agoro Sare High School</a></div>
                        </div>
                    </div>
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/client-thumb-3.jpg" alt=""></div>
                            <h4>Positive experience.</h4>
                            <div class="text">I am excited to be joining <br>Nanyuki girls' School next year and it is all <br>thanks to your donations</div>
                            <div class="author-title">Betty Zawadi</div>
                            <div class="designation">Class 8 student <a href="#">Madaraka Primary School</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="row m-0 justify-content-md-between align-items-end">
                <div class="sec-title light">
                    <h1>Team behind Helping Hands</h1>
                    <div class="text">Our work would not be possible without the work of our dedicated volunteers.</div>
                </div>
                <!--Link Btn-->
                <div class="link-btn mb-50">
                    <a href="#" class="theme-btn btn-style-one"><span>Meet All Members</span></a>
                </div>
            </div>
            <div class="wrapper-box">
                <div class="row">
                    <!-- Team Blokc One -->
                    <div class="col-lg-4 team-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/resource/team-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4> <a href="#">Cindy Bosibori</a></h4>
                                <div class="designation">Co-Founder</div>
                            </div>
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Blokc One -->
                    <div class="col-lg-4 team-block-one">
                        <div class="inner-box wow fadeInUp" data-wow-delay="400ms">
                            <div class="image"><a href="#"><img src="images/resource/team-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4> <a href="#">Calvin Sendawula</a></h4>
                                <div class="designation">Co-Founder</div>
                            </div>
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Team Blokc One -->
                    <div class="col-lg-4 team-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/resource/team-3.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4> <a href="#">Ruth Githinji</a></h4>
                                <div class="designation">Ground Person</div>
                            </div>
                            <ul class="social-icon-two">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer -->
    <section class="volunteer-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Become a sponsor</h1>
                <div class="text">Please read below to see what a few of our charity partners have to say about us.</div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="image-wrapper-one wow fadeInLeft" data-wow-delay="400ms">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-4.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-5.jpg" alt=""></div>
                            <div class="image"><img src="images/resource/image-6.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-7.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2">
                    <div class="image-wrapper-two wow fadeInRight" data-wow-delay="600ms">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-8.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-9.jpg" alt=""></div>
                            <div class="image"><img src="images/resource/image-10.jpg" alt=""></div>
                        </div>
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="image"><img src="images/resource/image-11.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="default-form-area wow fadeInUp" data-wow-delay="200ms">
                        <form id="contact-form" name="contact_form" class="contact-form" action="inc/sendmail.php" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Your Name*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="form_gender">
                                            <option value="*">Gender*</option>
                                            <option value=".category-1">Male</option>
                                            <option value=".category-2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="form_subject">
                                            <option value="*">How did you here about us</option>
                                            <option value=".category-1">Social media</option>
                                            <option value=".category-2">Other means</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Any comments..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-section-btn">
                                <div class="row m-0 justify-content-md-between align-items-end">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">ID UPLOAD</label><a href="#">&emsp;(Click here to find out why we need your National ID)</a>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="row m-0 justify-content-md-between align-items-end">
                <div class="sec-title">
                    <h1>Team behind Helping Hands</h1>
                    <div class="text">Our work would not be possible without the work of our dedicated volunteers.</div>
                </div>
                <!--Link Btn-->
                <div class="link-btn mb-50">
                    <a href="#" class="theme-btn btn-style-one"><span>Meet All Members</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Client section -->
    <section class="client-section">
        <div class="auto-container">
            <div class="sponsors-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="images/clients/client-1.png" alt=""></a></div>
                <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="images/clients/client-2.png" alt=""></a></div>
                <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="images/clients/client-3.png" alt=""></a></div>
                <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="images/clients/client-4.png" alt=""></a></div>
                <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="images/clients/client-5.png" alt=""></a></div>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="widget-wrapper">
                <div class="row">
                    <!-- Contact Widget -->
                    <div class="col-lg-3 col-md-6 contact-widget footer-widget">
                        <h4 class="widget-title">Contact</h4>
                        <ul>
                            <li>1273 Ole Sangale Road, <br> Madaraka, <br>Nairobi, Kenya.</li>
                            <li><a href="mailto:support@helpinghands.com">supportyou@helpinghands.com </a></li>
                        </ul>
                        <h3><a href="tel:+254456789">+254 456 789</a></h3>
                    </div>
                    <!-- About Widget -->
                    <div class="col-lg-3 col-md-6 about-widget footer-widget">
                        <h4 class="widget-title">About</h4>
                        <ul>
                            <li><a href="#">Charity</a></li>
                            <li><a href="#">Donors</a></li>
                            <li><a href="#">Upcoming Events</a></li>
                            <li><a href="#">Trending News</a></li>
                            <li><a href="#">Causes</a></li>
                        </ul>
                    </div>
                    <!-- Link Widget -->
                    <div class="col-lg-3 col-md-6 link-widget footer-widget">
                        <h4 class="widget-title">Quick Link</h4>
                        <ul>
                            <li><a href="#">Private Policies</a></li>
                            <li><a href="#">Donate Now</a></li>
                            <li><a href="#">Become a Donor</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Newsletter Widget -->
                    <div class="col-lg-3 col-md-6 newsletter-widget footer-widget">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="text">Subscribe to us and get latest news & <br>upcoming events.</div>
                        <form action="#">
                            <input type="email" placeholder="Emial Address...">
                            <button class="submin-btn"><span class="flaticon-next"></span>Subscribe to Us</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="left-content">
                    <div class="icon"><img src="images/resource/logo-icon.png" alt=""></div>
                    <div class="copyright-text">© 2021-2022 All Rights Reserved by <a href="#">Helping Hands.</a> <br>Designed By <a href="#">Helping Hands.</a></div>
                </div>
                <div class="right-content">
                    <ul class="social-icon-three">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-skype"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon flaticon-arrow"></span></div>

    <div id="donate-popup" class="donate-popup">

        <div class="popup-overlay"></div>

        <div class="donate-form-area">
            <div class="donate-form-wrapper">
                <div class="close-donate theme-btn"><span class="flaticon-close"></span></div>
                <div class="sec-title text-center">
                    <h1>Donate and help us to achive our goal</h1>
                    <!-- <div class="text">Beguiled and demoralized by the charms of pleasure of the moment, so by desire, <br>that they cannot foresee.</div> -->
                </div>

                <form  action="#" class="donate-form default-form">
                    <ul class="chicklet-list clearfix">
                        <li>
                            <input type="radio" id="donate-amount-1" name="donate-amount" />
                            <label for="donate-amount-1" data-amount="10" >$10</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                            <label for="donate-amount-2" data-amount="20">$20</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-3" name="donate-amount" />
                            <label for="donate-amount-3" data-amount="50">$50</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-4" name="donate-amount" />
                            <label for="donate-amount-4" data-amount="100">$100</label>
                        </li>
                        <li class="other-amount">
                            <div class="input-container" data-message="Every dollar you donate helps end hunger."><input type="text" id="other-amount" placeholder="Other Amount"  />
                            </div>
                        </li>
                    </ul>

                    <h3>Donor Information</h3>

                    <div class="contact-form">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Contact">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="filters-selec form-controlt selectmenu" name="form_subject">
                                        <option value="*">Payment Via</option>
                                        <option value=".category-1">MPESA</option>
                                        <option value=".category-2">Card</option>
                                        <option value=".category-2">Bank Transfer</option>
                                        <option value=".category-2">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <button class="theme-btn btn-style-one" type="submit"><span>Donate Now</span></button>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span>I would like to donate automatically repeat each month</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
<!--End pagewrapper-->



<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/menu-nav-btn.js"></script>
<script src="js/jquery-ui.js"></script>
<!-- Custom JS -->
<script src="js/script.js"></script>

</body>
</html>