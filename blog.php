<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>GURU ENTERPRISES</title>

    <!-- Favicon -->
    <link rel="icon" href="img/guru-logo.jpg">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


    <style>
        .bg {
            background-image: linear-gradient(to right, rgb(0 0 0 / 91%), rgb(0 0 0 / 71%)), url(./img/surgical-bandage.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 35vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>




    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <?php
    include('header.php');
    ?>

    <div class="bg">
        <h2 class="text-white">Our Blog</h2>
    </div>
    <!-- This is for blog  -->



    <!-- Start Blog Area -->
    <section class="blog section" id="blog" style="background-color: #f9f9e0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <div class="slider">
                            <h2 class="text">Keep up with Our Most Recent Medical News.</h2>
                        </div>
                        <img src="img/section-img.png" alt="#">
                        <p>At Guru Enterprises we are committed to keeping our patients and the community informed about
                            the latest developments in medical science, health care practices, and wellness tips.
                            Staying updated on medical news empowers you to make informed decisions about your health.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news image-effect">
                        <div class="news-head">
                            <img src="img/blog1.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">22 Aug, 2020</div>
                                <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                                <p class="">We are excited to introduce our latest innovation at Guru Enterprises
                                    Our new product, Surgical bandage products, is designed to enhance your experience
                                    and meet the evolving needs of our valued customers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news image-effect">
                        <div class="news-head">
                            <img src="img/blog2.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">15 Jul, 2020</div>
                                <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                                <p class="">Schedule routine visits with your dentist every six months for
                                    professional cleanings and comprehensive exams. Early detection of issues like
                                    cavities, gum disease, and other dental problems can prevent more serious
                                    complications down the road.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news image-effect">
                        <div class="news-head">
                            <img src="img/blog3.jpg" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">05 Jan, 2020</div>
                                <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                                <p class="">At Guru Enterprises we are dedicated to empowering businesses with
                                    innovative solutions that drive growth and efficiency. Our comprehensive range of
                                    services is designed to address the unique challenges faced by organizations.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->



    <?php

    include('footer.php');

    ?>