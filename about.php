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
                                            <li class="dropdown current"><a href="about.php">About Us</a>
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
                                            <li class="dropdown"><a href="contact.php">Contact</a>
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
                <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
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
                <h1>Get to know us</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="index.php"><span class="fa fa-home"></span></a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="auto-container">
            <div class="description">
                <div class="top-content text-center">
                    <div class="icon-box"><span class="flaticon-hands-and-gestures"></span></div>
                    <h1>A small donation has a big impact</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h4>With more than <span>Kshs. 140,000 donated</span> through our platform, your donations have helped give children from all over Nairobi a chance to further their studies in high school.</h4>
                    </div>
                    <div class="col-lg-6">
                        <h3>More than 60 active donors </h3>
                        <div class="text">With safe payment methods such as MPESA and PayPal, we have ensured that your payments safely reach their intended beneficiaries and your information remains secure.</div>
                    </div>
                </div>
            </div>
            <div class="history-carousel">
                <div class="swiper-container history-image">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-15.jpg" alt="">
                                <div class="year">2021</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-16.jpg" alt="">
                                <div class="year">2022</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-17.jpg" alt="">
                                <div class="year">2022</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-15.jpg" alt="">
                                <div class="year">2021</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-16.jpg" alt="">
                                <div class="year">2022</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-17.jpg" alt="">
                                <div class="year">2022</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-15.jpg" alt="">
                                <div class="year">2021</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-16.jpg" alt="">
                                <div class="year">2022</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image">
                                <img src="images/resource/image-17.jpg" alt="">
                                <div class="year">2022</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container history-content">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="text">Earlier in 2021, Cindy and Calvin <br>met to discuss how they could use their skills to raise money towards the cause of<br>furthering primary school candidates' education.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">In 2022, Cindy and Calvin embarked<br>on the implementation of the website that would help reach the vision they had<br>of furthering primary school candidates' education.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">Later in 2022, the helping hands website <br>aims to be fully deployed online and functioning<br>to meet its intended targets.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">Earlier in 2021, Cindy and Calvin <br>met to discuss how they could use their skills to raise money towards the cause of<br>furthering primary school candidates' education.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">In 2022, Cindy and Calvin embarked<br>on the implementation of the website that would help reach the vision they had<br>of furthering primary school candidates' education.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">Later in 2022, the helping hands website <br>aims to be fully deployed online and functioning<br>to meet its intended targets.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">Earlier in 2021, Cindy and Calvin <br>met to discuss how they could use their skills to raise money towards the cause of<br>furthering primary school candidates' education.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">In 2022, Cindy and Calvin embarked<br>on the implementation of the website that would help reach the vision they had<br>of furthering primary school candidates' education.</div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text">Later in 2022, the helping hands website <br>aims to be fully deployed online and functioning<br>to meet its intended targets.</div>
                        </div>
                    </div>
                    <div class="swiper-nav-button">
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"><i class="flaticon-next"></i></div>
                        <div class="swiper-button-prev"><i class="flaticon-next"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section -->
    <section class="funfacts-section-two style-two" style="background-image: url(images/background/bg-12.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <h5>Our Impact</h5>
                <h1>Numbers doing the talking.</h1>
            </div>
            <div class="outer-box">
                <div class="funfact-wrapper row">
                    <!--Column-->
                    <div class="col-lg-4 counter-block-two wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="144">0</span><span class="affix">K</span>
                            </div>
                            <div class="text">Amount in Kenya Shillings </br>raised towards the </br>cause of Helping Hands</div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-4 counter-block-two wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="67">0</span><span class="affix">+</span>
                            </div>
                            <div class="text">Happy Donors & <br>Contributors</div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-4 counter-block-two wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="17">0</span><span class="affix">+</span>
                            </div>
                            <div class="text">Beneficiary students of the <br>program so far</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="whychoose-us-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h1>Why sign up as a donor in <br>the Helping Hands platform?</h1>
                        <div class="text">We aim at assisting class 8 students from impoverished backgrounds <br>to get a chance at furthering their high school education your donations.</div>
                    </div>
                    <div class="whychoose-us-block">
                        <div class="icon-box"><span class="flaticon-tick"></span></div>
                        <div class="content">
                            <h4>A helping hand for a hoping heart.</h4>
                            <div class="text">Together we can eventually place Kenya one step ahead towards <br />attaining the 100% transition of students from primary <br /> school to high school.</div>
                        </div>
                    </div>
                    <div class="whychoose-us-block">
                        <div class="icon-box"><span class="flaticon-tick"></span></div>
                        <div class="content">
                            <h4>Your help, their future.</h4>
                            <div class="text">Give the class 8 students and high school students a good start <br> in life. All donations count.</div>
                        </div>
                    </div>
                    <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <img src="images/resource/image-18.jpg" alt="">
                        <div class="contact-info-two">
                            <h5>Need assitance? <br>Contact us?</h5>
                            <div class="icon-box"><span class="flaticon-phone-1"></span></div>
                            <div class="phone-number"><a href="tel:+254123456789">+254 123 456 789</a></div>
                        </div>
                        <div class="logo-box"><div class="image wow zoomIn" data-wow-delay="500ms"><img src="images/resource/logo-icon.png" alt=""></div></div>
                        <div class="video-box"><img src="images/resource/image-19.jpg" alt=""><a href="https://www.youtube.com/watch?v=aFSRKKqm13k" title="Boy sells mandazi to raise Form One fees-Nation" class="overlay-link lightbox-image video-fancybox video-btn"><span class="flaticon-multimedia-1"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <?php
    $sql="SELECT * FROM tbl_team_member";
    $teamResult = getDataRows($sql);
    $teamNameArr = array();
    $teamPositionArr = array();
    if(!empty($teamResult)){
      foreach($teamResult as $team){
        array_push($teamNameArr, $team["name"]);
        array_push($teamPositionArr, $team["position"]);
      }
    }
    ?>
    <section class="team-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Team behind Helping Hands</h1>
                <div class="text">Our work would not be possible without the work of our dedicated volunteers.</div>
            </div>
            <div class="row">
                <!-- Team Blokc One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                        <div class="image"><a href="#"><img src="images/resource/team-1.jpg" alt=""></a></div>
                        <div class="lower-content">
                          <h4> <a href="#"><?php echo($teamNameArr[0]); ?></a></h4>
                          <div class="designation"><?php echo($teamPositionArr[0]); ?></div>
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
                        <div class="image"><a href="#"><img src="images/resource/team-1.jpg" alt=""></a></div>
                        <div class="lower-content">
                          <h4> <a href="#"><?php echo($teamNameArr[1]); ?></a></h4>
                          <div class="designation"><?php echo($teamPositionArr[1]); ?></div>
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
                        <div class="image"><a href="#"><img src="images/resource/team-1.jpg" alt=""></a></div>
                        <div class="lower-content">
                          <h4> <a href="#"><?php echo($teamNameArr[2]); ?></a></h4>
                          <div class="designation"><?php echo($teamPositionArr[2]); ?></div>
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
    </section>

    <!-- Client section -->
    <section class="client-section style-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Send us an email or call</h1>
            </div>
            <div class="text-two text-center">To learn more about becoming a donor, contact us at: <a href="mailto:helpinghandsfoundationkenya@gmail.com">support@helpinghands.com</a> or <a href="tel:+254123456789">+254-123-456-789</a></div>
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

</body>
</html>
