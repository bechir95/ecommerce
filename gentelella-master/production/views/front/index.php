<?php
  include_once 'ProduitC.php';
  $p = new ProduitC();
  $liste = $p->afficherProduit();
?>
<!doctype html>
<html class="no-js" lang="">
  
<!-- Mirrored from themeim.com/demo/vigo/demo/vigo-red/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:32:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VIGO-Health Supplement Landing Page HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- =========================
        Loding All Stylesheet
    ============================== -->
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

    <!-- =========================
    	Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body id="vigo_body">
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="vigo-loder">
        <div class="sk-rotating-plane"></div>
    </div>

    <!-- ==============================
        Header top
    =================================== -->
    <header class="header-top navbar navbar-light bg-light bg-green">
        <div class="container custom-container pd-0">
            <div class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-4 pd-0 d-flex justify-content-md-start align-items-xl-center">
                <div class="social-media display-inline-block">
                    <a href="#"><i class="white fa fa-skype" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UC8eMyfhie1Omof-wQmOiJtg" target="_blank"><i class="white fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/wditsolution/" target="_blank"><i class="white fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/wditsolutions" target="_blank"><i class="white fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="white fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-8 col-lg-6 col-xl-8 pd-0 d-flex justify-content-end">
                <div class="header-info d-flex flex-nowrap">
                    <div class="header-meta bg-white media text-center d-flex align-items-center d-inline-flex">
                        <button type="button" class="btn btn-primary media bg-white black cursor-pointer pd-0 border-transparent border-0 focus-none header-meta-main-btn" data-toggle="modal" data-target="#header-login">
                            <i class="fa fa-user mr-auto" aria-hidden="true"></i>
                            <span class="d-flex align-self-xl-center">
                                <span class="media-body d-none d-xl-block white">
                                    Account Log In
                                </span>
                            </span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="header-login" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="text" class="form-control" placeholder="User Name">
                                            </div>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="col-12 pd-0">
                                                <button type="submit" class="btn btn-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none cursor-pointer">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-meta bg-white media d-flex align-items-center d-inline-flex">
                        <button type="button" class="btn btn-primary media bg-white black cursor-pointer pd-0 border-transparent border-0 focus-none header-meta-main-btn" data-toggle="modal" data-target="#header-faq">
                            <i class="fa fa-question mr-auto" aria-hidden="true"></i>
                            <span class="d-flex align-self-xl-center">
                                <span class="media-body d-none d-xl-block white">
                                    Ask Your Question
                                </span>
                            </span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="header-faq" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Envoyez votre massage"></textarea>
                                            </div>
                                            <div class="col-12 pd-0">
                                                <button type="submit" class="btn btn-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none cursor-pointer">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-meta header-meta-ph bg-white media d-flex align-items-center d-inline-flex">
                        <i class="fa fa-phone mr-auto" aria-hidden="true"></i>
                        <div class="media-body d-none d-xl-block">
                           <a href="tel:+0011421426" class="white">+001 142 1426</a>
                        </div>
                    </div>
                    <div class="header-meta header-meta-search-btn media d-flex align-items-center d-none d-lg-block d-inline-flex">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary header-meta-search-icon media bg-white black cursor-pointer pd-0 border-transparent border-0 focus-none header-meta-main-btn" data-toggle="modal" data-target="#header-search">
                            <i class="fa fa-search mr-auto" aria-hidden="true"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="header-search" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <form class="search-form">
                                            <div class="form-group col-12 pd-0 mr-0">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <div class="col-12 pd-0">
                                                <button type="submit" class="btn btn-primary bg-green border-transparent focus-none"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==============================
        Main Navbar
    =================================== -->
    <section class="main-nav bg-white" id="sticker">
        <div class="container custom-container">
            <nav class="navbar-expand-lg navbar-light d-lg-flex justify-content-lg-end pos-r">
                <div class="main-logo text-center d-lg-inline-flex justify-content-start d-lg-flex align-items-lg-center">
                    <a class="navbar-brand mr-0" href="index-2.html">
                        <img src="img/logo.png" class="img-fluid header-logo" alt="Vigo Logo">
                    </a>
                </div>
                <div class="d-flex justify-content-between d-lg-inline-flex justify-content-lg-between">
                    <div class="p-2">
                        <button class="navbar-toggler cursor-pointer focus-none" type="button" data-toggle="collapse" data-target="#header-nav-btn" aria-controls="header-nav-btn" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="header-nav-btn">
                            <div class="navbar-nav mr-auto mt-2 mt-lg-0"></div>
                            <div class="my-2 my-lg-0">
                                <ul class="navbar-nav" id="nav">
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#vigo_body">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#about-section">Supplement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#features">Feature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#vigo-price">Price</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#ingredients">Ingredient</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#vigo-product">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link lato" href="#footer">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 d-lg-flex align-items-lg-center">
                        <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER</a>
                    </div>
                </div>
            </nav>     
        </div>
    </section>

    <!-- ==============================
        Slider Section
    =================================== -->
    <section class="main-slider">
        <div id="main-slider" class="owl-carousel owl-theme">
            <div class="item">
                <img src="img/slider-img.jpg" class="img-fluid" alt="Vigo Slider Image">
                <div class="slider-text-box">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-5">
                                <div class="ct-slider-text">
                                    <h1 class="slider-title">Dealing <br> <strong>With <span class="green">VIGO</span></strong></h1>
                                    <p class="d-none d-md-block">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <a href="#" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none text-uppercase">Product Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider-img2.jpg" class="img-fluid" alt="Vigo Slider Image">
                <div class="slider-text-box">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-5">
                                <div class="ct-slider-text">
                                    <h1 class="slider-title">Dealing <br> <strong>With <span class="green">VIGO</span></strong></h1>
                                    <p class="d-none d-md-block">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ==============================
        Call To Action Section
    =================================== -->
    <section class="call-to-action pos-r bg-green">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center d-none d-md-block">
                    <div class="call-to-action-big-img">
                        <img src="img/call-to-action-img.png" class="img-fluid call-to-action-big-img" alt="Vigo Call to action Img">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 pd-0 d-md-flex align-items-center text-center">
                    <div class="call-to-action-content">
                        <p class="mr-0 white call-to-action-subtitle cou">Get Your Natural</p>
                        <p class="mr-0 white call-to-action-title ral">Supplement with Most Powerful all in one Formula</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 d-md-flex align-items-center text-center call-to-action-view-btn">
                    <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-in-horizontal focus-none bg-white border-transparent green">VIEW PRODUCT</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Features Section
    =================================== -->
    <section class="features" id="features">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Four Amazing</h5>
                        <h3 class="page-main-title mr-0">Supplement In One</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 features-box text-center">
                    <img src="img/features-icon-1.png" alt="Card image cap">
                    <div class="features-body">
                        <h5 class="features-title mr-0">Calorie Build Up</h5>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available, a but the majority have suffered alteration in some humour dummy now it.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 features-box text-center">
                    <img src="img/features-icon-2.png" alt="Card image cap">
                    <div class="features-body">
                        <h5 class="features-title mr-0">Fit The Body</h5>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available, a but the majority have suffered alteration in some humour dummy now it.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 features-box text-center">
                    <img src="img/features-icon-3.png" alt="Card image cap">
                    <div class="features-body">
                        <h5 class="features-title mr-0">Energy Grow Up</h5>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available, a but the majority have suffered alteration in some humour dummy now it.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-3 col-xl-3 features-box text-center">
                    <img src="img/features-icon-4.png" alt="Card image cap">
                    <div class="features-body">
                        <h5 class="features-title mr-0">Regular Routine</h5>
                        <p class="card-text">There are many variations of passages of Lorem Ipsum available, a but the majority have suffered alteration in some humour dummy now it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Services Section
    =================================== -->
    <section class="services">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Our Best</h5>
                        <h3 class="page-main-title mr-0">Supplement</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6 d-flex align-items-center">
                    <img src="img/services-img.jpg" class="img-fluid services-big-img" alt="services-img">
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-6">
                    <div class="services-container-title">
                        <h5 class="page-sub-title mr-0">Youre Dream</h5>
                        <h3 class="page-main-title mr-0">Body Is just Click away</h3>
                    </div>
                    <div class="d-md-flex justify-content-between">
                        <div class="services-box pos-r">
                            <h6 class="services-box-title mr-0">Increased Energy</h6>
                            <p class="mr-0">There are many variations of passages of Lorem Ipsum that available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>

                        <div class="services-box pos-r">
                            <h6 class="services-box-title mr-0">Bone Builder</h6>
                            <p class="mr-0">There are many variations of passages of Lorem Ipsum that available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between services-box-bottom-border">
                        <div class="services-box pos-r">
                            <h6 class="services-box-title mr-0">Weight Loss</h6>
                            <p class="mr-0">There are many variations of passages of Lorem Ipsum that available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>

                        <div class="services-box pos-r">
                            <h6 class="services-box-title mr-0">Stress Release</h6>
                            <p class="mr-0">There are many variations of passages of Lorem Ipsum that available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between services-offer">
                        <div class="product-offers ral">
                            *** Black Friday Offer on This Month <strong class="offer-limit green ral">10% Off</strong>
                            on this <span class="green services-offer-text-highlights ral">Whey Protein</span>
                        </div>
                        <div class="product-offers-btn">
                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        About Section
    =================================== -->
    <section class="about-section" id="about-section">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-6">
                    <!-- =========================
                        Youtube Video Section
                    ============================== -->
                    <div data-video="p3MbX1wAP40" id="video" class="pos-r">
                      <img class="figure-img img-fluid" src="img/video-img.jpg" alt="Use your own screenshot.">
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-6 about-section-area">
                    <div class="about-content white">
                        <h2 class="about-content-title pos-r">How Our Supplement Works:</h2>
                        <div class="about-section-text-area">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form humour the and randomised words which don't look even slightly believable. If you are is going to use a passage of Lorem Ipsum.</p>
                            <p class="mr-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form humour the and randomised words which don't look even slightly believable. If you are is going to use a passage of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <a href="#" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-in-horizontal focus-none bg-white border-transparent green text-uppercase about-section-btn">Discover More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Product Features Section
    =================================== -->
    <section class="product-features" id="product-features">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12 product-features-main-title">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Our</h5>
                        <h3 class="page-main-title mr-0">Supplement Features</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-4 order-lg-2  order-xl-1">
                    <div class="product-features-left">
                        <div class="media mrt-0 flex-lg-row-reverse">
                            <div class="product-features-img align-self-center pos-r">
                                <img class="pos-center" src="img/product-features-icon-1.png" alt="product-features-icon">
                            </div>
                            <div class="media-body text-right">
                                <h5 class="product-features-title mt-0">Supplement Element Text</h5>
                                <p class="product-features-content mr-0">There are many variations of passages of Lorem Ipsum  is  that available, but the majority have suffered alteration in some form dummy now.</p>
                            </div>
                        </div>
                        <div class="media flex-lg-row-reverse">
                            <div class="product-features-img align-self-center text-center">
                            <div class="product-features-img align-self-center pos-r">
                                <img class="pos-center" src="img/product-features-icon-2.png" alt="product-features-icon">
                            </div>
                            </div>
                            <div class="media-body text-right">
                                <h5 class="product-features-title mt-0">Supplement Element Text</h5>
                                <p class="product-features-content mr-0">There are many variations of passages of Lorem Ipsum  is  that available, but the majority have suffered alteration in some form dummy now.</p>
                            </div>
                        </div>
                        <div class="media flex-lg-row-reverse">
                            <div class="product-features-img align-self-center text-center">
                            <div class="product-features-img align-self-center pos-r">
                                <img class="pos-center" src="img/product-features-icon-3.png" alt="product-features-icon">
                            </div>
                            </div>
                            <div class="media-body text-right">
                                <h5 class="product-features-title mt-0">Supplement Element Text</h5>
                                <p class="product-features-content mr-0">There are many variations of passages of Lorem Ipsum  is  that available, but the majority have suffered alteration in some form dummy now.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-12 col-xl-4 text-center order-lg-1 order-xl-2 content-product-features-img">
                    <img src="img/product-features-big-img.png" class="img-fluid" alt="product features big img">
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-4 order-lg-3 order-xl-3">
                    <div class="product-features-right">
                        <div class="media product-features-mr-lg-0 right-first-child">
                            <div class="product-features-img align-self-center pos-r">
                                <img class="pos-center" src="img/product-features-icon-4.png" alt="product-features-icon">
                            </div>
                            <div class="media-body">
                                <h5 class="product-features-title mt-0">Supplement Element Text</h5>
                                <p class="product-features-content mr-0">There are many variations of passages of Lorem Ipsum  is  that available, but the majority have suffered alteration in some form dummy now.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="product-features-img align-self-center pos-r">
                                <img class="pos-center" src="img/product-features-icon-5.png" alt="product-features-icon">
                            </div>
                            <div class="media-body">
                                <h5 class="product-features-title mt-0">Supplement Element Text</h5>
                                <p class="product-features-content mr-0">There are many variations of passages of Lorem Ipsum  is  that available, but the majority have suffered alteration in some form dummy now.</p>
                            </div>
                        </div>
                        <div class="media mrb-0">
                            <div class="product-features-img align-self-center pos-r">
                                <img class="pos-center" src="img/product-features-icon-6.png" alt="product-features-icon">
                            </div>
                            <div class="media-body">
                                <h5 class="product-features-title mt-0">Supplement Element Text</h5>
                                <p class="product-features-content mr-0">There are many variations of passages of Lorem Ipsum  is  that available, but the majority have suffered alteration in some form dummy now.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Recommended Section
    =================================== -->
    <section class="recommended">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Recommended</h5>
                        <h3 class="page-main-title mr-0">By Best Doctor</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-4">
                    <div class="recommended-big-img text-center">
                        <img src="img/recommended-img.png" class="img-fluid" alt="recommended img">
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-8 recommended-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="recommended-container-title">
                                <h5 class="page-sub-title mr-0">Awesome Supplement for Your Body</h5>
                                <h3 class="page-main-title mr-0">We Have 20 Years Of Experince</h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="recommended-box pos-r">
                                <h6 class="recommended-box-title pos-r">Our Mission</h6>
                                <p class="pos-r">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form humour the and randomised words which don't look even slightly believable. If you are is going to use a passage of Lorem Ipsum.</p>
                                <img src="img/signature.png" class="signature-img pos-r" alt="signature img">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="recommended-box recommended-right-box pos-r mrt-0">
                                <h6 class="recommended-box-title pos-r">Our Vision</h6>
                                <p class="pos-r">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form humour the and randomised words which don't look even slightly believable. If you are is going to use a passage of Lorem Ipsum.</p>
                                <img src="img/signature.png" class="signature-img pos-r" alt="signature img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Newsletter Section
    =================================== -->
    <section class="newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">VIGO Product</h5>
                        <h3 class="page-main-title white mr-0">Sign Up Newsletter</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-12">
                    <form>
                        <div class="form-row d-flex justify-content-center">
                            <div class="col-12 col-md-4 col-lg-4 newsletter-input">
                                <input type="text" class="form-control bg-green white focus-none" placeholder="Your Full Name">
                            </div>
                            <div class="col-12 col-md-4 col-lg-4 newsletter-input">
                                <input type="email" class="form-control bg-green white focus-none" placeholder="Your E-mail Address">
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2 text-center newsletter-input">
                                <button type="submit" class="btn btn-primary vigo-btn white-btn focus-none bg-white border-transparent green cursor-pointer">Subscribe Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Gallery Section
    =================================== -->
    <section class="gallery">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Our Best</h5>
                        <h3 class="page-main-title mr-0">Product Gallery</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-12 col-xl-12">
                    <div  class="btn-group gallery-filter-btn-group">
                        <div class="gallery-menu-box">
                            <button type="button" data-filter="all" class="ral btn border-0 btn-secondary cursor-pointer focus-none">All</button>
                            <button type="button" data-filter=".category-a" class="ral btn border-0 btn-secondary cursor-pointer focus-none">Protein</button>
                            <button type="button" data-filter=".category-b" class="ral btn border-0 btn-secondary cursor-pointer focus-none">Life Style</button>
                            <button type="button" data-filter=".category-c" class="ral btn border-0 btn-secondary cursor-pointer focus-none">Nutrition</button>
                            <button type="button" data-filter=".category-d" class="ral btn border-0 btn-secondary cursor-pointer focus-none">Vitamins</button>
                        </div>
                    </div>

                    <div class="mixitup row">
                    <?php foreach($liste as $l){ ?>
                        <div class="mix category-a col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" data-order="1">
                            <div class="filtr-item">
                                <div class="gallery-hover">
                                    <div class="gallery-img-box pos-r">
                                        <a href="" class="image-link gallery-overlay">
                                            <div class="search-icon"><img src="img/search.png" alt=""></div>
                                            <img class="img-fluid" src="../../uploads/<?php echo $l['image'] ?>" alt="sample image">
                                        </a>
                                    </div>
                                    <div class="gallery-content-box text-center">
                                        <h6 class="item-desc ral mr-0"><?php echo $l['nom'] ?></h6>
                                        <p class="gallery-category ral mr-0">Price: <?php echo $l['prix'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Price Section
    =================================== -->
    <section class="vigo-price" id="vigo-price">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Choose Your</h5>
                        <h3 class="page-main-title mr-0">Supplement Packages</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-3 col-xl-3">
                    <div class="vigo-pricing-table">
                        <div class="pricing-icon-box text-center">
                            <img src="img/pricing-icon-1.png" alt="pricing table img">
                        </div>
                        <div class="price-package pos-r text-center">
                            <p class="pos-r mr-0 ral">Basic</p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item border-transparent"><h5 class="pricing mr-0 lato">$21.50</h5></li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">1 Person</div> User</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">30 MG</div> Per Capsule</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">60 Capsules</div> Per Bottle</li>
                        </ul>
                        <div class="pricing-order-now text-center">
                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-3 col-xl-3">
                    <div class="vigo-pricing-table">
                        <div class="pricing-icon-box text-center">
                            <img src="img/pricing-icon-2.png" alt="pricing table img">
                        </div>
                        <div class="price-package pos-r text-center">
                            <p class="pos-r mr-0 ral">Standard</p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item border-transparent"><h5 class="pricing mr-0 lato">$35.50</h5></li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">3 Person</div> User</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">50 MG</div> Per Capsule</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">60 Capsules</div> Per Bottle</li>
                        </ul>
                        <div class="pricing-order-now text-center">
                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-3 col-xl-3">
                    <div class="vigo-pricing-table">
                        <div class="pricing-icon-box text-center">
                            <img src="img/pricing-icon-3.png" alt="pricing table img">
                        </div>
                        <div class="price-package pos-r text-center">
                            <p class="pos-r mr-0 ral">Professonal</p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item border-transparent"><h5 class="pricing mr-0 lato">$42.50</h5></li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">5 Person</div> User</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">70 MG</div> Per Capsule</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">60 Capsules</div> Per Bottle</li>
                        </ul>
                        <div class="pricing-order-now text-center">
                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-3 col-xl-3">
                    <div class="vigo-pricing-table">
                        <div class="pricing-icon-box text-center">
                            <img src="img/pricing-icon-4.png" alt="pricing table img">
                        </div>
                        <div class="price-package pos-r text-center">
                            <p class="pos-r mr-0 ral">Premium</p>
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item border-transparent"><h5 class="pricing mr-0 lato">$55.50</h5></li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">7 Person</div> User</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">70 MG</div> Per Capsule</li>
                            <li class="list-group-item border-transparent"><div class="highlight-text lato display-inline-block">60 Capsules</div> Per Bottle</li>
                        </ul>
                        <div class="pricing-order-now text-center">
                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Process Section
    =================================== -->
    <section class="process">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Awesome</h5>
                        <h3 class="page-main-title white mr-0">Supplement Process</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pd-0 before-none">
                    <div class="process-box pos-r text-center">
                        <img src="img/process-icon-1.png" class="img-fluid" alt="process img">
                        <p class="white mr-0">Burn Calories</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pd-0 before-none">
                    <div class="process-box pos-r text-center">
                        <img src="img/process-icon-2.png" class="img-fluid" alt="process img">
                        <p class="white mr-0">Suppress Appetite</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pd-0 before-none">
                    <div class="process-box pos-r text-center">
                        <img src="img/process-icon-3.png" class="img-fluid" alt="process img">
                        <p class="white mr-0">Increass Enargy</p>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 pd-0">
                    <div class="process-box before-none pos-r text-center">
                        <img src="img/process-icon-4.png" class="img-fluid" alt="process img">
                        <p class="white mr-0">Happy Life</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Ingredients Section
    =================================== -->
    <section class="ingredients" id="ingredients">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Supplement</h5>
                        <h3 class="page-main-title mr-0">Ingredients Facts</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-lg-12">
                    <h5 class="ingredients-Name">Ingredients Name</h5>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-6">
                    <div class="ingredients-name">
                        <div id="vigoaccordion" data-children=".item">
                            <div class="item">
                                <a class="display-block accordion-menu active" data-toggle="collapse" data-parent="#vigoaccordion" href="#vigoaccordion1" aria-expanded="true" aria-controls="vigoaccordion1">
                                    Green Coffee Extract
                                    <div class="accordion-menu-icon float-right">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="subtitle lato">Per Serving 100 (mg)</div>
                                </a>
                                <div id="vigoaccordion1" class="collapse show" role="tabpanel">
                                    <p class="accordion-content mb-3">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many is the variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form or randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <a class="display-block accordion-menu" data-toggle="collapse" data-parent="#vigoaccordion" href="#vigoaccordion2" aria-expanded="false" aria-controls="vigoaccordion2">
                                    Citrus Aurantium
                                    <div class="accordion-menu-icon float-right">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="subtitle lato">Per Serving 100 (mg)</div>
                                </a>
                                <div id="vigoaccordion2" class="collapse" role="tabpanel">
                                    <p class="accordion-content mb-3">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many is the variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form or randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <a class="display-block accordion-menu" data-toggle="collapse" data-parent="#vigoaccordion" href="#vigoaccordion3" aria-expanded="false" aria-controls="vigoaccordion3">
                                    Green Tea Extract
                                    <div class="accordion-menu-icon float-right">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="subtitle lato">Per Serving 100 (mg)</div>
                                </a>
                                <div id="vigoaccordion3" class="collapse" role="tabpanel">
                                    <p class="accordion-content mb-3">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many is the variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form or randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <a class="display-block accordion-menu" data-toggle="collapse" data-parent="#vigoaccordion" href="#vigoaccordion4" aria-expanded="false" aria-controls="vigoaccordion4">
                                    Guarana Extract W/ 10% Caffeine
                                    <div class="accordion-menu-icon float-right">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="subtitle lato">Per Serving 100 (mg)</div>
                                </a>
                                <div id="vigoaccordion4" class="collapse" role="tabpanel">
                                    <p class="accordion-content mb-3">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many is the variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form or randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <a class="display-block accordion-menu" data-toggle="collapse" data-parent="#vigoaccordion" href="#vigoaccordion5" aria-expanded="false" aria-controls="vigoaccordion5">
                                    L-Phenylalanine
                                    <div class="accordion-menu-icon float-right">
                                        <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="subtitle lato">Per Serving 100 (mg)</div>
                                </a>
                                <div id="vigoaccordion5" class="collapse" role="tabpanel">
                                    <p class="accordion-content mb-3">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.There are many is the variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form or randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-11 col-lg-6 col-xl-6">
                    <img src="img/ingredients-big-img.jpg" class="img-fluid ingredients-big" alt="ingredients big img">
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Testimonial Section
    =================================== -->
    <section class="testimonial">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-11 col-lg-12 col-xl-12">
                    <div id="testimonial-carousel" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-box text-center white">
                                <img src="img/quotes-img.png" class="quotes-img mr-auto" alt="quotes img">
                                <br>
                                <p class="testimonial-content mr-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.  you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <br>
                                <div class="author-meta display-inline-block">
                                    <div class="media">
                                        <img class="align-self-center width-auto mr-3" src="img/author-img-1.png" alt="author img">
                                        <div class="media-body text-left">
                                            <h5 class="ral mt-0">Johnson Williams</h5>
                                            <p class="green mr-0">Ceo, Creative Idea</p>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box text-center white">
                                <img src="img/quotes-img.png" class="quotes-img mr-auto" alt="quotes img">
                                <br>
                                <p class="testimonial-content mr-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.  you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <br>
                                <div class="author-meta display-inline-block">
                                    <div class="media">
                                        <img class="align-self-center width-auto mr-3" src="img/author-img-1.png" alt="author img">
                                        <div class="media-body text-left">
                                            <h5 class="ral mt-0">Bruce Parker</h5>
                                            <p class="green mr-0">Ceo, Creative Idea</p>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-box text-center white">
                                <img src="img/quotes-img.png" class="quotes-img mr-auto" alt="quotes img">
                                <br>
                                <p class="testimonial-content mr-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.  you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <br>
                                <div class="author-meta display-inline-block">
                                    <div class="media">
                                        <img class="align-self-center width-auto mr-3" src="img/author-img-1.png" alt="author img">
                                        <div class="media-body text-left">
                                            <h5 class="ral mt-0">Clark Wayne</h5>
                                            <p class="green mr-0">Ceo, Creative Idea</p>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Product Section
    =================================== -->
    <section class="vigo-product" id="vigo-product">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Feature Product</h5>
                        <h3 class="page-main-title mr-0">Burm Fat With VIGO</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div class="product-box">
                        <!-- Place somewhere in the <body> of your page -->
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="img/product-img.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img-2.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img-3.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img-4.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img-5.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img-6.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img.jpg" alt="product img">
                                </li>
                                <li>
                                    <img src="img/product-img-3.jpg" alt="product img">
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 product-box-content">
                    <div class="d-flex flex-column-reverse flex-md-column">
                        <div class="product-box">
                            <div class="product-box-title">
                                <h5>Whey Protein (Vanilla)</h5>                            
                            </div>
                            <div class="d-flex justify-content-center justify-content-md-start">
                            <div class="product_rating d-flex">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <div class="rating_subtitle">(2 Customer Review)</div>
                            </div>
                            </div>
                            <div class="product-price green lato">
                                Price: $75.50
                            </div>
                            <div class="product-content">
                                A weight loss pill that focuses on only one element of your weight loss just won’t cut it. To get the body you deserve you need a solution that works from all angles. And that’s something you won’t get from most other weight loss products. A weight loss pill that focuses on only one element of your weight loss just won’t cut it. 
                            </div>
                            <div class="product-quantity">
                                <form class="container">
                                    <div class="row d-flex justify-content-center justify-content-md-start">
                                        <div class="col-3 col-lg-1 pd-0 d-flex align-items-stretch">
                                            <input type="number" class="form-control border-transparent black focus-none" placeholder="1">
                                        </div>
                                        <div class="col-4">
                                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">ORDER NOW</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="product-view">
                            <div id="carousel" class="flexslider">
                                <ul class="slides vigo-small-img">
                                    <li>
                                        <img src="img/product-img.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <li>
                                        <img src="img/product-img-2.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <li>
                                        <img src="img/product-img-3.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <li>
                                        <img src="img/product-img-4.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <li>
                                        <img src="img/product-img-5.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <li>
                                        <img src="img/product-img-6.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <li>
                                        <img src="img/product-img.jpg" class="cursor-pointer" alt="product img">
                                    </li>
                                    <!-- <li>
                                        <img src="img/product-img-3.jpg" class="cursor-pointer" alt="product img">
                                    </li> -->
                                    <!-- items mirrored twice, total of 12 -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Certification Section
    =================================== -->
    <section class="certification">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h3 class="page-main-title mr-0">Certification</h3>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="certification-img-box">
                        <img src="img/certification-img-1.jpg" class="img-fluid" alt="Certification img">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="certification-img-box">
                        <img src="img/certification-img-2.jpg" class="img-fluid" alt="Certification img">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="certification-img-box mr-0">
                        <img src="img/certification-img-3.jpg" class="img-fluid" alt="Certification img">
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="certification-img-box mr-0">
                        <img src="img/certification-img-4.jpg" class="img-fluid" alt="Certification img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        footer Section
    =================================== -->
    <footer id="footer">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="footer-box white">
                        <h4 class="footer-title pos-r">
                            à propos de nous
                        </h4>
                        <p class="footer-content">
                            Complément alimentaire : protéines/vitamines , accessoires et textiles musculation.
                        </p>
                        <h6>Méthodes De Payement</h6>
                        <div class="payment-method row">
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-1.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-2.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-3.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-4.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-5.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-6.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-7.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                            <div class="col-3 col-lg-4">
                                <a href="#"><img src="img/payment-method-img-8.png" class="img-fluid" alt="Payment method"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 d-none d-xl-block footer-box-border"></div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-5 col-xl-4">
                    <div class="footer-box footer-contact-form">
                        <h4 class="footer-title vigo-send-message pos-r white">
                                Envoyez votre massage
                        </h4>
                        <form>
                            <div class="row">
                                <div class="col-12 col-xl-6">
                                    <input type="text" class="form-control focus-none" placeholder="Votre Nom">
                                </div>
                                <div class="col-12 col-xl-6">
                                    <input type="email" class="form-control focus-none" placeholder="Votre E-mail">
                                </div>
                                <div class="col-12 col-xl-12">
                                    <textarea class="form-control focus-none" placeholder="Votre Message"></textarea>
                                    <button type="button" class="btn btn-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none cursor-pointer">Envoyer le massage</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 d-none d-xl-block footer-box-border"></div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="footer-box white mr-0">
                        <h4 class="footer-title pos-r">
                            Contactez nous
                        </h4>
                        <div class="contact-office-hours">
                            <p>Heures d'ouverture:</p>
                            <p>Lun - Ven: 9.00-6.00</p>
                            <p>
                                Dimanche: 9.00-4.00
                            </p>
                        </div>
                        <div class="contact-address">
                            <ul class="list-group white">
                                <li class="list-group-item pd-0 bg-transparent border-transparent">
                                    <a href="tel:+21658995261" class="white"><i class="fa fa-phone" aria-hidden="true"></i> +(216) 58 995 261 </a>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent">
                                    <a href="mailto:Houcem_bansalem@live.fr" class="white"><i class="fa fa-envelope" aria-hidden="true"></i> Houcem_bansalem@live.fr</a>
                                </li>
                                <li class="list-group-item pd-0 bg-transparent border-transparent d-flex align-items-start border-0">
                                   <i class="fa fa-map-marker" aria-hidden="true"></i>
                                   <p class="display-inline-block mr-0">Complex Saphir 9AV Hbib Thamer <br>,Manouba, Tunisie</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright bg-black">
        <div class="container custom-container text-center">
            <div class="row">
                <div class="col-12 col-md-8 d-xl-flex justify-content-start">
                    <div class="copyright-box">
                        <div class="social-media display-inline-block">
                            <a href="#"><i class="white fa fa-skype" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-youtube-play" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="white fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright-text white">
                            Copyright &copy; <a href="http://themeim.com/" class="white" target="_blank">ThemeIM</a>  2017. All Right Reserved
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 footer-logo d-md-flex align-items-md-center justify-content-md-end">
                    <a href="index-2.html">
                        <img src="img/footer-logo.png" class="img-fluid" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- =========================
    	Main Loding JS Script
    ============================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplePlayer.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>


  </body>

<!-- Mirrored from themeim.com/demo/vigo/demo/vigo-red/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:33:51 GMT -->
</html>
