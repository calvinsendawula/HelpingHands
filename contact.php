<?php
  session_start();
  include('PHP/phpMethods.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Helping Hands Kenya</title>

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Prata|Rubik:300,400,500,700&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
                                    <li><a href="#">Swahili</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text">We only have what we give... <a href="#" class="donate-box-btn">Donate Now.</a></div>
                    </div>
                    <div class="right-content">
                        <ul class="contact-info">
                            <li><span class="flaticon-mail"></span><a href="mailto:helpinghandsfoundationkenya@gmail.com">support@helpinghands.com</a></li>
                            <li><span class="flaticon-phone"></span><a href="tel:+254712345678">+254 712 345 678</a></li>
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
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="option-wrapper">
                            <div class="nav-outer">

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-xl navbar-dark">

                                    <div class="collapse navbar-collapse">
                                        <ul class="navigation">
                                            <li class="dropdown"><a href="index.php">Home</a>
                                                <ul>
                                                    <li><a href="index.php">Home Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="about.php">About Us</a>
                                                <ul>
                                                    <li><a href="about.php">About Us Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Causes</a>
                                                <ul>
                                                    <li><a href="causes.php">Our Causes</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Account</a>
                                                <ul>
                                                    <li><a href="<?php donorDashRedirectPage(); ?>"><?php donorDashRedirectDisplay(); ?></a></li>
                                                    <li><a href="<?php donorLogoutPage(); ?>"><?php donorLogoutDisplay(); ?></a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown current"><a href="contact.php">Contact</a>
                                                <ul>
                                                    <li><a href="contact.php">Contact Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->
                            </div>
                            <div class="navbar-btn-wrap">
                                <button class="anim-menu-btn">
                                  <i class="flaticon-menu"></i>
                                </button>
                            </div>
                            <div class="link-btn">
                                <a href="index.php#signUpSponsorAChild" class="theme-btn btn-style-one"><span>Sponsor a child</span></a>
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
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
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
                <div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
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
                                    <form method="post" action="blog.html">
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

    <?php include("htmlTemplates/hiddenSidebar.php"); ?>

    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>Get in touch with us</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="index.php"><span class="fa fa-home"></span></a></li>
                    <li><a href="tel:+254712345678">+254 712 345 678</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="default-form-area">
                        <div class="sec-title">
                            <h1>Send us a message</h1>
                        </div>
                        <form id="contact-form" name="contact_form" class="contact-form" action="PHP/processFeedback.php" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" maxlength="60" placeholder="Name e.g John Doe" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email" maxlength="100" placeholder="Email e.g johnDoe@gmail.com" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_phone" class="form-control" minlength="13" maxlength="13" placeholder="Phone number (+254 ___ ___ ___)" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="form_subject" required>
                                            <option value="*">Subject*</option>
                                            <option value="Feedback">Feedback</option>
                                            <option value="Complaint">Complaint</option>
                                            <option value="Suggestion">Suggestion</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea" rows="4" maxlength="255" placeholder="Your message" required></textarea>
                                    </div>
                                    <div class="form-group flex-box">
                                        <div class="submit-btn">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                        <!--<span class="hint">*Get answers to common questions through our help center.</span>-->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-three">
                        <div class="single-info">
                            <h4>Find us at</h4>
                            <div class="text">1273 Ole Sangale Road, Madaraka str, Nairobi, Kenya.</div>
                            <a class="link-btn" href="https://bit.ly/3FLXwi9" target="_blank">Your Nearest Location</a>
                        </div>
                        <div class="single-info">
                            <h4>Quick Contact</h4>
                            <div class="wrapper-box">
                                <a href="mailto:helpinghandsfoundationkenya@gmail.com">supportyou@helpinghands.com </a> <br>
                            </div>
                            <!--<a class="link-btn" href="#">Get Call Back</a>-->
                            <a class="link-btn" href="tel:+254123456789">+254 123 456 789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Map -->
    <div class="google-map container" style="margin-top:-50px;">
        <div class="map-canvas"
            data-zoom="13"
            data-lat="-1.2921"
            data-lng="36.8219"
            data-type="roadmap"
            data-title="Helping Hands Foundation Kenya"
            data-icon-path="images/icons/map-marker.png"
            data-content="<p>1273 Ole Sangale Road, Madaraka str, Nairobi, Kenya</p>">
        </div>
    </div>

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
                            <li><a href="mailto:helpinghandsfoundationkenya@gmail.com">support@helpinghands.com </a></li>
                        </ul>
                        <h3><a href="tel:+254123456789">+254 123 456 789</a></h3>
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
                            <input type="email" placeholder="Email Address...">
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
                    <h1>Make a donation</h1>
                </div>

                <form  action="PHP/processDonor.php" class="donate-form default-form" method="post">
                    <h3>Donor Information (Optional)</h3>

                    <div class="contact-form">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="donorName" placeholder="Full Name (John Doe)" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="donorEmail" placeholder="Email Address (johnDoe@gmail.com)" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="donorContact" maxlength="13" placeholder="Contact (+254 ___ ___ ___)" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="filters-selec form-controlt selectmenu" name="donorPaymentMethod" required>
                                        <option value="PayPal">PayPal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <button class="theme-btn btn-style-one" type="submit"><span>Submit Details</span></button>
                                    <div id="donate-button"></div>
                                    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                                    <script>
                                      PayPal.Donation.Button({
                                      env:'production',
                                      hosted_button_id:'AVKSV62VVLVTW',
                                      image: {
                                      src:'https://pics.paypal.com/00/s/ZmYwN2M1YTItNTQ5OS00NWI1LWE1OGYtMTQwNjc0MzQxNzAw/file.PNG',
                                      alt:'Donate with PayPal button',
                                      title:'PayPal - The safer, easier way to pay online!',
                                      }
                                      }).render('#donate-button');
                                    </script>
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
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCiDseLk80xNWincbi9kLIoGmRZXk84sMk"></script>
<script src="js/map-script.js"></script>

</body>
</html>
