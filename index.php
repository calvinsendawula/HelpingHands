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

    <?php include("htmlTemplates/header.php"); ?>
    <?php include("htmlTemplates/hiddenSidebar.php"); ?>

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(images/main-slider/1.jpg);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center" style="background-color: rgba(0,0,0,0.6); border-radius: 10px; padding: 30px 20px;">
                              <h4><span class="border-shape-left"></span>Helping Hands Foundation<span class="border-shape-right"></span></h4>
                              <h1>Sponsor a child</h1>
                              <div class="text">How can I help support a child to join high school? </br> Start here.</div>
                              <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(images/main-slider/2.jpg);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center" style="background-color: rgba(0,0,0,0.6); border-radius: 10px; padding: 30px 20px;">
                                <!-- <div class="link-box-two"><a href="#" class="theme-btn default-btn">help the needy</a></div> -->
                                <h4><span class="border-shape-left"></span>Improving lives of Kenyan primary school students<span class="border-shape-right"></span></h4>
                                <h1>Together we can make <br>a Difference</h1>
                                <div class="text">Making a change one donation at a time. </br> Get started.</div>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url(images/main-slider/3.jpg);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center" style="background-color: rgba(0,0,0,0.6); border-radius: 10px; padding: 30px 20px;">
                            <h4><span class="border-shape-left"></span>Keep the dice rolling<span class="border-shape-right"></span></h4>
                                <h1>Keep a child in High School</h1>
                                <!-- <div class="text">To improve the learning environment in primary schools by <br>holistically creating world-class.</div> -->
                                <div class="text">Be the change you want to see today.</br> Click the button below</div>
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
                        <h1>Be part of a change <br>you want to see in Kenya</h1>
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
                            <a href="about.php" class="theme-btn btn-style-one"><span>More About Us</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-block">
                        <div class="logo-box"><div class="image wow zoomIn" data-wow-delay="500ms"><img src="images/resource/logo-icon.png" alt=""></div></div>
                        <div class="image-one wow fadeInUp" data-wow-delay="200ms"><img src="images/resource/image-1.jpg" alt=""></div>
                        <div class="image-two" style="border: 5px solid #fff; border-radius: 5px;"><img src="images/resource/image-2.jpg" alt=""><a href="https://youtu.be/Uf1aiRYSzsw" title="Courtesy of PACEmaker International - YouTube" class="overlay-link lightbox-image video-fancybox"><span class="flaticon-multimedia"></span></a></div>
                        <div class="image-three wow fadeInRight" data-wow-delay="200ms"><img src="images/resource/image-3.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section -->
    <?php
    $sql="SELECT * FROM tbl_cause";
    $causeResult = getDataRows($sql);
    $causeTitleArr = array();
    $causeSchoolNameArr = array();
    $causeDetailsArr = array();
    $causeAmountRaisedArr = array();
    $causeTargetAmountArr = array();
    $causePercentageArr = array();
    if(!empty($causeResult)){
      foreach($causeResult as $cause){
        $varCausePercent = ($cause["amountRaised"]/$cause["targetAmount"])*100;
        array_push($causeTitleArr, $cause["causeTitle"]);
        array_push($causeSchoolNameArr, $cause["schoolName"]);
        array_push($causeDetailsArr, $cause["causeDetails"]);
        array_push($causeAmountRaisedArr, $cause["amountRaised"]);
        array_push($causeTargetAmountArr, $cause["targetAmount"]);
        array_push($causePercentageArr, $varCausePercent);
      }
    }
    ?>
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
                          <div class="image"><a href="#"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="causes.php"><?php echo($causeTitleArr[0]); ?></a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[0]); ?></a></div>
                                <div class="text"><?php echo($causeDetailsArr[0]); ?></div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[0]); ?></a>
                                    <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[0]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[0]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 84 people in 12 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="causes.php" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                              <h4><a href="causes.php"><?php echo($causeTitleArr[1]); ?></a></h4>
                              <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[1]); ?></a></div>
                              <div class="text"><?php echo($causeDetailsArr[1]); ?></div>
                              <div class="info-box">
                                  <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[1]); ?></a>
                                  <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[1]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[1]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 36 people in 08 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                              <h4><a href="causes.php"><?php echo($causeTitleArr[2]); ?></a></h4>
                              <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[2]); ?></a></div>
                              <div class="text"><?php echo($causeDetailsArr[2]); ?></div>
                              <div class="info-box">
                                  <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[2]); ?></a>
                                  <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[2]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[2]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 56 people in 15 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                          <div class="image"><a href="#"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="causes.php"><?php echo($causeTitleArr[0]); ?></a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[0]); ?></a></div>
                                <div class="text"><?php echo($causeDetailsArr[0]); ?></div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[0]); ?></a>
                                    <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[0]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[0]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 84 people in 12 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="causes.php" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                              <h4><a href="causes.php"><?php echo($causeTitleArr[1]); ?></a></h4>
                              <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[1]); ?></a></div>
                              <div class="text"><?php echo($causeDetailsArr[1]); ?></div>
                              <div class="info-box">
                                  <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[1]); ?></a>
                                  <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[1]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[1]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>#
                                </div>
                                <!--<div class="text">Raised by 36 people in 08 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                              <h4><a href="causes.php"><?php echo($causeTitleArr[2]); ?></a></h4>
                              <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[2]); ?></a></div>
                              <div class="text"><?php echo($causeDetailsArr[2]); ?></div>
                              <div class="info-box">
                                  <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[2]); ?></a>
                                  <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[2]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[2]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 56 people in 15 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                          <div class="image"><a href="#"><img src="images/resource/cause-1.jpg" alt=""></a></div>
                            <div class="lower-content">
                                <h4><a href="causes.php"><?php echo($causeTitleArr[0]); ?></a></h4>
                                <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[0]); ?></a></div>
                                <div class="text"><?php echo($causeDetailsArr[0]); ?></div>
                                <div class="info-box">
                                    <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[0]); ?></a>
                                    <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[0]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[0]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 84 people in 12 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="causes.php" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                              <h4><a href="causes.php"><?php echo($causeTitleArr[1]); ?></a></h4>
                              <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[1]); ?></a></div>
                              <div class="text"><?php echo($causeDetailsArr[1]); ?></div>
                              <div class="info-box">
                                  <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[1]); ?></a>
                                  <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[1]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[1]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 36 people in 08 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
                            <div class="lower-content">
                              <h4><a href="causes.php"><?php echo($causeTitleArr[2]); ?></a></h4>
                              <div class="category"><a href="#"><span class="flaticon-book"></span><?php echo($causeSchoolNameArr[2]); ?></a></div>
                              <div class="text"><?php echo($causeDetailsArr[2]); ?></div>
                              <div class="info-box">
                                  <a href="#"><span>Raised:</span> Kshs.<?php echo($causeAmountRaisedArr[2]); ?></a>
                                  <a href="#"><span>Goal:</span> Kshs.<?php echo($causeTargetAmountArr[2]); ?></a>
                                </div>
                                <!--Progress Levels-->
                                <div class="progress-levels">

                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="<?php echo($causePercentageArr[2]); ?>"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="text">Raised by 56 people in 15 days</div>-->
                                <div class="bottom-content">
                                    <div class="link-btn"><a href="#" class="theme-btn btn-style-one donate-box-btn"><span>Donate Now</span></a></div>
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
    <?php
    $sql2="SELECT * FROM tbl_donor";
    $donorResult = getDataRows($sql2);
    $donorNameArr = array();
    $donorEmailArr = array();
    $donorPhoneArr = array();
    $donorLocationArr = array();
    $donorTotalArr = array();
    if(!empty($donorResult)){
      foreach($donorResult as $donor){
        array_push($donorNameArr, $donor["donorName"]);
        array_push($donorEmailArr, $donor["donorEmail"]);
        array_push($donorPhoneArr, $donor["donorPhone"]);
        array_push($donorLocationArr, $donor["donorLocation"]);
        array_push($donorTotalArr, $donor["total"]);
      }
    }
    ?>
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
                                    <h4><?php echo($donorNameArr[0]); ?></h4>
                                    <div class="location"><?php echo($donorLocationArr[0]); ?></div>
                                </div>
                                <div class="bottom-content">
                                    <div class="text">Donation</div>
                                    <div class="price">Kshs.<?php echo($donorTotalArr[0]); ?></div>
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
                                    <h4><?php echo($donorNameArr[1]); ?></h4>
                                    <div class="location"><?php echo($donorLocationArr[1]); ?></div>
                                </div>
                                <div class="bottom-content">
                                    <div class="text">Donation</div>
                                    <div class="price">Kshs.<?php echo($donorTotalArr[1]); ?></div>
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
                                    <h4><?php echo($donorNameArr[2]); ?></h4>
                                    <div class="location"><?php echo($donorLocationArr[2]); ?></div>
                                </div>
                                <div class="bottom-content">
                                    <div class="text">Donation</div>
                                    <div class="price">Kshs.<?php echo($donorTotalArr[2]); ?></div>
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
                            <h4>Raised</h4>
                            <div class="count-box">
                                <span class="prefix">Kshs.</span><span class="count-text" data-speed="3000" data-stop="144">0</span><span class="affix">K</span>
                            </div>
                            <div class="text">Help raise the number of children that get</br>to benefit from our platform.</div>
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
                            <div class="text">67+ people donate to our platform and <br>help keep children in school.</div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="col-lg-4 counter-block wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="icon-box"><img src="images/icons/icon-5.png" alt=""></div>
                            <h4>Beneficiaries</h4>
                            <div class="count-box">
                                <span class="prefix"></span><span class="count-text" data-speed="3000" data-stop="17">0</span><span class="affix"></span>
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
    <?php
    $sql3="SELECT * FROM tbl_event";
    $eventResult = getDataRows($sql3);
    $eventDateArr = array();
    $eventMonthArr = array();
    $eventStartTimeArr = array();
    $eventEndTimeArr = array();
    $eventDescriptionArr = array();
    $eventLocationArr = array();
    if(!empty($eventResult)){
      foreach($eventResult as $event){
        array_push($eventDateArr, $event["eventDate"]);
        array_push($eventMonthArr, $event["eventMonth"]);
        array_push($eventStartTimeArr, $event["eventStartTime"]);
        array_push($eventEndTimeArr, $event["eventEndTime"]);
        array_push($eventDescriptionArr, $event["eventDescription"]);
        array_push($eventLocationArr, $event["eventLocation"]);
      }
    }
    ?>
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
                                                <h1><?php echo($eventDateArr[0]); ?></h1>
                                                <div class="text"><span><?php echo($eventMonthArr[0]); ?></span> <br><?php echo($eventStartTimeArr[0]); ?>  - <?php echo($eventEndTimeArr[0]); ?></div>
                                            </div>
                                            <h4><a href="event-details.html"><?php echo($eventDescriptionArr[0]); ?></a></h4>
                                            <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[0]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                              <h1><?php echo($eventDateArr[1]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[1]); ?></span> <br><?php echo($eventStartTimeArr[1]); ?>  - <?php echo($eventEndTimeArr[1]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[1]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[1]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                              <h1><?php echo($eventDateArr[2]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[2]); ?></span> <br><?php echo($eventStartTimeArr[2]); ?>  - <?php echo($eventEndTimeArr[2]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[2]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[2]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1><?php echo($eventDateArr[0]); ?></h1>
                                                <div class="text"><span><?php echo($eventMonthArr[0]); ?></span> <br><?php echo($eventStartTimeArr[0]); ?>  - <?php echo($eventEndTimeArr[0]); ?></div>
                                            </div>
                                            <h4><a href="event-details.html"><?php echo($eventDescriptionArr[0]); ?></a></h4>
                                            <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[0]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                              <h1><?php echo($eventDateArr[1]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[1]); ?></span> <br><?php echo($eventStartTimeArr[1]); ?>  - <?php echo($eventEndTimeArr[1]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[1]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[1]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                              <h1><?php echo($eventDateArr[2]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[2]); ?></span> <br><?php echo($eventStartTimeArr[2]); ?>  - <?php echo($eventEndTimeArr[2]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[2]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[2]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                                <h1><?php echo($eventDateArr[0]); ?></h1>
                                                <div class="text"><span><?php echo($eventMonthArr[0]); ?></span> <br><?php echo($eventStartTimeArr[0]); ?>  - <?php echo($eventEndTimeArr[0]); ?></div>
                                            </div>
                                            <h4><a href="event-details.html"><?php echo($eventDescriptionArr[0]); ?></a></h4>
                                            <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[0]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                              <h1><?php echo($eventDateArr[1]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[1]); ?></span> <br><?php echo($eventStartTimeArr[1]); ?>  - <?php echo($eventEndTimeArr[1]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[1]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[1]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                    </div>
                                </div>
                                <!-- Event Blokc One -->
                                <div class="event-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                        <div class="lower-content">
                                            <div class="date">
                                              <h1><?php echo($eventDateArr[2]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[2]); ?></span> <br><?php echo($eventStartTimeArr[2]); ?>  - <?php echo($eventEndTimeArr[2]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[2]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[2]); ?></div>
                                        </div>
                                        <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
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
                                              <h1><?php echo($eventDateArr[0]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[0]); ?></span> <br><?php echo($eventStartTimeArr[0]); ?>  - <?php echo($eventEndTimeArr[0]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[0]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[0]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                            <h1><?php echo($eventDateArr[1]); ?></h1>
                                            <div class="text"><span><?php echo($eventMonthArr[1]); ?></span> <br><?php echo($eventStartTimeArr[1]); ?>  - <?php echo($eventEndTimeArr[1]); ?></div>
                                        </div>
                                        <h4><a href="event-details.html"><?php echo($eventDescriptionArr[1]); ?></a></h4>
                                        <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[1]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                            <h1><?php echo($eventDateArr[2]); ?></h1>
                                            <div class="text"><span><?php echo($eventMonthArr[2]); ?></span> <br><?php echo($eventStartTimeArr[2]); ?>  - <?php echo($eventEndTimeArr[2]); ?></div>
                                        </div>
                                        <h4><a href="event-details.html"><?php echo($eventDescriptionArr[2]); ?></a></h4>
                                        <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[2]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                              <h1><?php echo($eventDateArr[0]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[0]); ?></span> <br><?php echo($eventStartTimeArr[0]); ?>  - <?php echo($eventEndTimeArr[0]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[0]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[0]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                            <h1><?php echo($eventDateArr[1]); ?></h1>
                                            <div class="text"><span><?php echo($eventMonthArr[1]); ?></span> <br><?php echo($eventStartTimeArr[1]); ?>  - <?php echo($eventEndTimeArr[1]); ?></div>
                                        </div>
                                        <h4><a href="event-details.html"><?php echo($eventDescriptionArr[1]); ?></a></h4>
                                        <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[1]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                            <h1><?php echo($eventDateArr[2]); ?></h1>
                                            <div class="text"><span><?php echo($eventMonthArr[2]); ?></span> <br><?php echo($eventStartTimeArr[2]); ?>  - <?php echo($eventEndTimeArr[2]); ?></div>
                                        </div>
                                        <h4><a href="event-details.html"><?php echo($eventDescriptionArr[2]); ?></a></h4>
                                        <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[2]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-1.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                              <h1><?php echo($eventDateArr[0]); ?></h1>
                                              <div class="text"><span><?php echo($eventMonthArr[0]); ?></span> <br><?php echo($eventStartTimeArr[0]); ?>  - <?php echo($eventEndTimeArr[0]); ?></div>
                                          </div>
                                          <h4><a href="event-details.html"><?php echo($eventDescriptionArr[0]); ?></a></h4>
                                          <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[0]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href=""><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-2.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                            <h1><?php echo($eventDateArr[1]); ?></h1>
                                            <div class="text"><span><?php echo($eventMonthArr[1]); ?></span> <br><?php echo($eventStartTimeArr[1]); ?>  - <?php echo($eventEndTimeArr[1]); ?></div>
                                        </div>
                                        <h4><a href="event-details.html"><?php echo($eventDescriptionArr[1]); ?></a></h4>
                                        <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[1]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
                                  </div>
                              </div>
                              <!-- Event Blokc One -->
                              <div class="event-block-one">
                                  <div class="inner-box">
                                      <div class="image"><img src="images/resource/event-3.jpg" alt=""></div>
                                      <div class="lower-content">
                                          <div class="date">
                                            <h1><?php echo($eventDateArr[2]); ?></h1>
                                            <div class="text"><span><?php echo($eventMonthArr[2]); ?></span> <br><?php echo($eventStartTimeArr[2]); ?>  - <?php echo($eventEndTimeArr[2]); ?></div>
                                        </div>
                                        <h4><a href="event-details.html"><?php echo($eventDescriptionArr[2]); ?></a></h4>
                                        <div class="location"><span class="flaticon-point"></span><?php echo($eventLocationArr[2]); ?></div>
                                      </div>
                                      <div class="link-btn"><a href="event-details.html"><span class="flaticon-next"></span>Join Us</a></div>
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
    <?php
    $sql3="SELECT * FROM tbl_student_testimonial";
    $testimonialResult = getDataRows($sql3);
    $testimonialTitleArr = array();
    $testimonialMessageArr = array();
    $testimonialStudentNameArr = array();
    $testimonialSchoolArr = array();
    $testimonialGradeArr = array();
    if(!empty($testimonialResult)){
      foreach($testimonialResult as $testimonial){
        array_push($testimonialTitleArr, $testimonial["title"]);
        array_push($testimonialMessageArr, $testimonial["message"]);
        array_push($testimonialStudentNameArr, $testimonial["studentName"]);
        array_push($testimonialSchoolArr, $testimonial["school"]);
        array_push($testimonialGradeArr, $testimonial["grade"]);
      }
    }
    ?>
    <section class="testimonial-section-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Why choose Helping Hands</h1>
                <div class="text">Here is what a few of our program beneficiaries have to say about us.</div>
            </div>
            <div class="row">
                <div class="three-item-carousel owl-theme owl-carousel owl-nav-none owl-dot-style-one">
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <!--<div class="image"><img src="images/resource/client-thumb-1.jpg" alt=""></div>-->
                            <div class="image"><img src="images/resource/client-thumb-1.jpg" alt=""></div>
                            <h4><?php echo($testimonialTitleArr[0]); ?></h4>
                            <div class="text"><?php echo($testimonialMessageArr[0]); ?></div>
                            <div class="author-title"><?php echo($testimonialStudentNameArr[0]); ?></div>
                            <div class="designation"><?php echo($testimonialGradeArr[0]); ?><a href="#"><?php echo($testimonialSchoolArr[0]); ?></a></div>
                        </div>
                    </div>
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/client-thumb-2.jpg" alt=""></div>
                            <h4><?php echo($testimonialTitleArr[1]); ?></h4>
                            <div class="text"><?php echo($testimonialMessageArr[1]); ?></div>
                            <div class="author-title"><?php echo($testimonialStudentNameArr[1]); ?></div>
                            <div class="designation"><?php echo($testimonialGradeArr[1]); ?><a href="#"><?php echo($testimonialSchoolArr[1]); ?></a></div>
                        </div>
                    </div>
                    <div class="testimonial-block-four">
                        <div class="inner-box">
                            <div class="image"><img src="images/resource/client-thumb-3.jpg" alt=""></div>
                            <h4><?php echo($testimonialTitleArr[2]); ?></h4>
                            <div class="text"><?php echo($testimonialMessageArr[2]); ?></div>
                            <div class="author-title"><?php echo($testimonialStudentNameArr[2]); ?></div>
                            <div class="designation"><?php echo($testimonialGradeArr[2]); ?><a href="#"><?php echo($testimonialSchoolArr[2]); ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <?php
    $sql4="SELECT * FROM tbl_team_member";
    $teamResult = getDataRows($sql4);
    $teamNameArr = array();
    $teamPositionArr = array();
    if(!empty($teamResult)){
      foreach($teamResult as $team){
        array_push($teamNameArr, $team["name"]);
        array_push($teamPositionArr, $team["position"]);
      }
    }
    ?>
    <section class="team-section">
        <div class="auto-container">
            <div class="row m-0 justify-content-md-between align-items-end">
                <div class="sec-title light">
                    <h1>Team behind Helping Hands</h1>
                    <div class="text">Our work would not be possible without the work of our dedicated team.</div>
                </div>
                <!--Link Btn-->
                <!--<div class="link-btn mb-50">
                    <a href="#" class="theme-btn btn-style-one"><span>Meet All Members</span></a>
                </div>-->
            </div>
            <div class="wrapper-box">
                <div class="row">
                    <!-- Team Blokc One -->
                    <div class="col-lg-4 team-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-delay="200ms">
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
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
                            <div class="image"><a href="#"><img src="images/resource/cause-2.jpg" alt=""></a></div>
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
        </div>
    </section>

    <!-- Volunteer -->
    <section class="volunteer-section" id="signUpSponsorAChild">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Become a sponsor</h1>
                <div class="text">Sign up with us below to join our Sponsor-A-Child program.</div>
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
                        <!--<form id="contact-form" name="contact_form" class="contact-form" action="inc/sendmail.php" method="post">-->
                        <form id="contact-form" name="contact_form" class="contact-form" action="PHP/processSponsor.php" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Your Full Name*" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="form_gender" required>
                                            <option value="*">Gender*</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email*" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <select class="filters-selec form-controlt selectmenu" name="form_subject" required>
                                            <option value="*">How did you hear about us</option>
                                            <option value="Social media">Social media</option>
                                            <option value="Other means">Other means</option>
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
                                        <input type="file" name="form_natID" class="form-control-file" id="exampleFormControlFile1" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Sign up</span></button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
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
                    <div class="copyright-text">© 2021-2022 All Rights Reserved by <a href="#">Helping Hands.</a> <br>Designed By <a href="#">Helping Hands.</a> Images courtesy of Madaraka Primary School.</div>
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
