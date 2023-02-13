<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard-Page</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Css Fils -->
    <meta name="author" content="Themexriver">
    {{-- <link rel="shortcut icon" href="assets/img/fv.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/flaticon-11.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/video.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/rs6.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/side-demo.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/business-4.css">

    {{-- LOGO FAVICON BELOW HERE --}}
     {{-- PLACE FAVICON ICON BELLOW HERE --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    {{-- JIVO SMART CHART BUTTON STARTS HERE--}}
    <script src="//code.jivosite.com/widget/yXsig7KbpE" async></script>
    {{-- JIVO SMART CHART BUTTON ENDS HERE --}}
</head>

<body class="apbc-body" data-spy="scroll" data-target=".apbc-nav-menu" data-offset="80">

    <div class="apbc-body-overlay"></div>
    <!-- Preloader-->
    <div class="loading-preloader">
        <div id="loading-preloader">
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ScrollTop Button -->
    <a href="" class="apbc-scroll-top"><i class="fas fa-angle-double-up"></i></a>

    <!-- Header Section Starts -->
    <header class="apbc-header-section" style="background-image:  url(assets/img/business-4/footer-bg.jpg)";>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-7">
                    <div class="apbc-logo-wrapper">
                        <a href="{{ route('welcome') }}"><img src="assets/img/business-4/new_Logo.png"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 apbc-desktop-menu">
                    <div class="apbc-nav-menu">
                        <ul>
                            <li><a class="nav-link" href="#apbc_banner" class="active">Home</a></li>
                            <li><a class="nav-link" href="#apbc_about">About</a></li>
                            <li><a class="nav-link" href="#apbc_service">Service</a></li>
                            <li><a class="nav-link" href="#apbc_contact">Contact</a></li>
                            @auth
                                <li><a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                <li>
                                    <a href="javascript: void()">
                                        <form action="{{ route('logout') }}" method="post">@csrf
                                            <button class="btn btn-danger">Logout</button>
                                        </form>
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-6 col-5">
                    <div class="apbc-sidebar-btn">
                        <a href="#"><i class="fas fa-bars"></i></a>
                    </div>
                    <div class="apbc-mobile-menu-open">
                        <a href="#"><i class="fas fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
       <br>
       {{-- GOOGLE TRANSLATE STARTS HERE --}}
       <style type='text/css'>
        .goog-logo-link {
            display: none !important;

        }

        .goog-te-gadget {
            color: transparent !important;
            padding-left: 10px;

        }

        .goog-te-gadget .goog-te-combo {
            color: blue !important;

        }
    </style>
     <style type='text/css'>
        iframe.goog-te-banner-frame {
            display: none !important;
        }
    </style>

    <style type='text/css'>
        body {
            position: static !important;
            top: 0px !important;
        }
    </style>

    <style type='text/css'>
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }
    </style>

    <div class="nav-right col-md-2" style="margin-top: -5px;">
        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script>



    </div>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


   {{-- GOOGLE TRANSLATE ENDS HERE --}}

    </header>
    <!-- Header Section End -->


    <main>
        <!-- Mobile Navigation -->
        <div class="apbc-mobile-navigation">
            <div class="apbc-mobile-menu-wrapper" style="margin-left:50px;">
                <a href="#" class="apbc-mobile-menu-close"><i class="fas fa-times"></i></a>
                <nav>
                    <ul>
                        <li><a class="nav-link" href="{{ route('welcome') }}" class="active">Home</a></li>
                        <li><a class="nav-link" href="#apbc_about">About</a></li>
                        <li><a class="nav-link" href="#apbc_service">Service</a></li>
                        <li><a class="nav-link" href="#apbc_contact">Contact</a></li>
                        @auth
                            <li><a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li>
                                <a href="javascript: void()">
                                    <form action="{{ route('logout') }}" method="post">@csrf
                                        <button class="btn btn-danger">Logout</button>
                                    </form>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Mobile Navigation End -->

        <!-- Hader Sidebar Info -->
        <div class="apbc-sidebar-info">
            <div class="apbc_sidebar_info_content">
                <span class="close-menu"><i class="fas fa-times"></i></span>
                <div class="apbc_sidebar_logo">
                    <a href="#"><img src="assets/img/business-4/new_Logo.png" alt=""></a>
                </div>
                <div class="apbc-pera-txt">
                    <p>Morhaulage Investment has taken the world's toughest investments challanges
                        <br>and turned them into seamless,streamlined and affordable minimum.
                    </p>
                </div>
                <div class="apbc-sidebar-gallery">
                    <ul>

                        <li>
                            <a href="#"><img src="assets/img/business-4/about/ww2.png" alt=""></a>
                        </li>

                    </ul>
                </div>


            </div>
        </div>
        <!-- Header Sidebar Info End -->

<br>
<br>
<br>
<br>
        <!-- Hero Slider Area -->
        <div class="apbc-hero-slider" id="apbc_banner" style="margin-top: 10px;">
            <div class="apbc-single-item" data-background="assets/img/business-4/ina.jpg">
                <span class="apbc-slide-shape-2"><img src="assets/img/business-4/slider/shape-2.png" alt=""></span>
                <div class="centered">
                    <h2 class="cent"
                        style="color:white; width:80%; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                        Morhaulage The Bigest Investment Company!! <br>
                    </h2>
                </div>
            </div>
            <div class="apbc-single-item" data-background="assets/img/business-4/inty.jpg">
                <span class="apbc-slide-shape-2"><img src="assets/img/business-4/slider/shape-2.png" alt=""></span>
                <div class="centered">

                    <h2 class="cent"
                        style="color:white; width:80%; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                        Morhaulage The key to Financial Growth & Success. <br>
                    </h2>
                </div>
            </div>
        </div>
        <!-- Hero Slider End -->


        <!--About Section  -->
        <section class="apbc-about-section" id="apbc_about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="apbc-about-left">
                            <div class="apbc-img-wrapper wow fadeInLeft">
                                <img src="assets/img/business-4/about/world.png" alt="">
                            </div>
                            <div class="apbc-countarea wow fadeInUp">
                                <div class="apbc-headline">
                                    <h2><span class="apbc-counterup">18</span><sup>+</sup></h2>
                                </div>
                                <div class="apbc-exp">
                                    <span>YEARS OF EXPERIENCE <br>We Just Achieve</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="apbc-about-right">
                            <div class="apbc-title-area wow fadeInUp">
                                <span class="apbc-subtitle">About Us MorHaulage Investment</span>
                                <div class="apbc-headline">
                                    <h3>Professional Investment business guidance </h3>
                                </div>
                                <div class="apbc-pera-txt">
                                    <p>
                                        Morhaulage Investment makes private secured investment more accessible,
                                        affordable and efficient.
                                        We provide investors an easy to use platform for investments at the click of a
                                        button,
                                        and our expert team is always available to answer your questions and assist you.
                                    </p>
                                </div>
                            </div>
                            <div class="apbc-about-inner">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="apbc-inner-content wow fadeInUp">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Right Place, right time.
                                                </h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>Access to leading topten investment plans in public companies,</p>
                                            </div>
                                        </div>
                                        <div class="apbc-inner-content wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Verified Investor</h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>As a verified investor,you have easy access to withdraw any return on
                                                    investment,</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="apbc-inner-content wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Quick and Easy</h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>Low minimum charge on payment request with cryptocurrencies,right on
                                                    this platform,</p>
                                            </div>
                                        </div>
                                        <div class="apbc-inner-content wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Sell and Share</h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>We make it possible for you to sell us your privately help
                                                    investments in cryptocurrency.</p>
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
        <!-- About Us Section End -->

        <!-- Service Section  -->
        <section class="apbc-service-section" id="apbc_service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="apbc-title-area wow fadeInUp">
                            <span class="apbc-subtitle">What We do</span>
                            <div class="apbc-headline">
                                <h3>The Best Business & Investment service comapny!</h3>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="apbc-service-slider">
                    <div class="apbc-service-single">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/about/wwdc.jpg" alt="">
                        </div>
                        <div class="apbc-icon-wrapper">
                            <i class="flaticon-bank-1"></i>
                        </div>
                        <div class="apbc-service-content">
                            <div class="apbc-headline">
                                <a href="#">
                                    <h5>Liquidity Solution</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <p>
                                    We provide liquidity in the private tech sector. Founders, early investors, and
                                    long-term employees can realize early returns without waiting for IPO or
                                    acquisition.
                                </p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="apbc-service-single">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/about/ww2.png" alt="">
                        </div>
                        <div class="apbc-icon-wrapper">
                            <i class="flaticon-investment"></i>
                        </div>
                        <div class="apbc-service-content">
                            <div class="apbc-headline">
                                <a href="">
                                    <h5>Investment Plans</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <p>Our Investment platform is inclusive, easy-to-use, and affordable,
                                    We qualify accredited investors and provide access to return on investments. </p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="apbc-service-single">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/about/wwde.jpg" alt="">
                        </div>
                        <div class="apbc-icon-wrapper">
                            <i class="flaticon-tax"></i>
                        </div>
                        <div class="apbc-service-content">
                            <div class="apbc-headline">
                                <a href="#">
                                    <h5>Taxes Planning</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <p>We help with cyber resilience by SecurityScorecard, as global leader in planing your
                                    TAXES. </p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Service Section End -->

        <!-- Video Section -->

        <!-- Video Section End -->

        <!-- Project Section -->

        <!-- Project Section End -->

        <!-- Skills Section -->
        <section class="apbc-skills-section" data-background="assets/img/business-4/skills-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="apbc-skills-left">
                            <div class="apbc-title-area wow fadeInUp">
                                <span class="apbc-subtitle">Investment Strategies</span>
                                <div class="apbc-headline">
                                    <h3>Our best Skills in building your finances</h3>
                                </div>
                                <div class="apbc-pera-txt">
                                    <p>
                                        Morhaulage Investment platform is inclusive, easy-to-use, and fast. We qualify
                                        accredited investors and provide access to return on investments as at when due.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="apbc-skills-right">
                            <div class="apbc-progress-item">
                                <div class="apbc-headline">
                                    <h6>Return on Investment</h6>
                                </div>
                                <div class="apbc-progress-wrapper">
                                    <div class="progress-bar">
                                        <div class="progress" data-percent="80" data-color="#f31717">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apbc-progress-item">
                                <div class="apbc-headline">
                                    <h6>Investment Solution</h6>
                                </div>
                                <div class="apbc-progress-wrapper">
                                    <div class="progress-bar">
                                        <div class="progress" data-percent="90" data-color="#f31717">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apbc-progress-item">
                                <div class="apbc-headline">
                                    <h6>Mutual Planing</h6>
                                </div>
                                <div class="apbc-progress-wrapper">
                                    <div class="progress-bar">
                                        <div class="progress" data-percent="70" data-color="#f31717">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="apbc-progress-item">
                                <div class="apbc-headline">
                                    <h6>Investment Plan</h6>
                                </div>
                                <div class="apbc-progress-wrapper">
                                    <div class="progress-bar">
                                        <div class="progress" data-percent="80" data-color="#f31717">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Section End -->

        <!-- Team Member -->
        {{-- <section class="apbc-team-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="apbc-title-area text-center wow fadeInUp">
                            <span class="apbc-subtitle">Team Member</span>
                            <div class="apbc-headline">
                                <h3>We have an Exclusive team members</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="apbc-team-content">
                    <div class="apbc-team-carousel">
                        <div class="apbc-team-single">
                            <div class="apbc-img-wrapper">
                                <span class="apbc-img-shape-1"><img src="assets/img/business-4/team/shape-1.png" alt=""></span>
                                <span class="apbc-img-shape-2"><img src="assets/img/business-4/team/shape-2.png" alt=""></span>
                                <img src="assets/img/business-4/team/01.jpg" alt="">
                            </div>
                            <div class="apbc-social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="apbc-member-content">
                                <div class="apbc-headline">
                                    <a href="#"><h6>Biles Posture</h6></a>
                                </div>
                                <div class="apbc-designation">
                                    <span>Business Developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="apbc-team-single">
                            <div class="apbc-img-wrapper">
                                <span class="apbc-img-shape-1"><img src="assets/img/business-4/team/shape-1.png" alt=""></span>
                                <span class="apbc-img-shape-2"><img src="assets/img/business-4/team/shape-2.png" alt=""></span>
                                <img src="assets/img/business-4/team/02.jpg" alt="">
                            </div>
                            <div class="apbc-social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="apbc-member-content">
                                <div class="apbc-headline">
                                    <a href="#"><h6>Brain Cumin</h6></a>
                                </div>
                                <div class="apbc-designation">
                                    <span>Business Developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="apbc-team-single">
                            <div class="apbc-img-wrapper">
                                <span class="apbc-img-shape-1"><img src="assets/img/business-4/team/shape-1.png" alt=""></span>
                                <span class="apbc-img-shape-2"><img src="assets/img/business-4/team/shape-2.png" alt=""></span>
                                <img src="assets/img/business-4/team/03.jpg" alt="">
                            </div>
                            <div class="apbc-social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="apbc-member-content">
                                <div class="apbc-headline">
                                    <a href="#"><h6>Jhon N.Holmes</h6></a>
                                </div>
                                <div class="apbc-designation">
                                    <span>Business Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="apbc-team-single">
                            <div class="apbc-img-wrapper">
                                <span class="apbc-img-shape-1"><img src="assets/img/business-4/team/shape-1.png" alt=""></span>
                                <span class="apbc-img-shape-2"><img src="assets/img/business-4/team/shape-2.png" alt=""></span>
                                <img src="assets/img/business-4/team/04.jpg" alt="">
                            </div>
                            <div class="apbc-social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="apbc-member-content">
                                <div class="apbc-headline">
                                    <a href="#"><h6>Figg Nelson</h6></a>
                                </div>
                                <div class="apbc-designation">
                                    <span>Business Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="apbc-team-single">
                            <div class="apbc-img-wrapper">
                                <span class="apbc-img-shape-1"><img src="assets/img/business-4/team/shape-1.png" alt=""></span>
                                <span class="apbc-img-shape-2"><img src="assets/img/business-4/team/shape-2.png" alt=""></span>
                                <img src="assets/img/business-4/team/02.jpg" alt="">
                            </div>
                            <div class="apbc-social-icons">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="apbc-member-content">
                                <div class="apbc-headline">
                                    <a href="#"><h6>Brain Cumin</h6></a>
                                </div>
                                <div class="apbc-designation">
                                    <span>Business Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Team Secton End -->

        <!-- Contact Secton -->
        <div class="apbc-contact-section" id="apbc_contact">
            <div class="container">
                <div class="apbc-contact-area">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="apbc-form-left">
                                <form action="#">
                                    <input type="text" placeholder="Name" style="color:rgba(3, 3, 54, 0.87);">
                                    <input type="text" placeholder="Website" style="color:rgba(3, 3, 54, 0.87);">
                                    <input type="email" placeholder="Email" style="color:rgba(3, 3, 54, 0.87);">
                                    <input type="text" placeholder="Subject" style="color:rgba(3, 3, 54, 0.87);">
                                    <textarea rows="5" placeholder="Comment/Message" style="color:rgba(3, 3, 54, 0.87);"></textarea>
                                    <a href=""><button type="submit">Send Request</button></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="apbc-form-right wow fadeInRight">
                                <div class="apbc-img-wrapper">
                                    <img src="assets/img/business-4/support.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <!-- FeedBack Section -->

        <!-- Feedback Secton End -->

        <!-- Footer Section -->

        <footer class="apbc-footer-section" data-background="assets/img/business-4/footer-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="apbc-footer-widget">
                            <div class="apbc-headline">
                                <h5>Quick links</h5>
                            </div>
                            <div class="apbc-footer-links">
                                <ul>
                                    <li><a href="#">Comapny History</a></li>
                                    <li><a href="#">Latest News & Blog</a></li>
                                    <li><a href="#">Popular Services</a></li>
                                    <li><a href="#">Business & Consulting</a></li>
                                    <li><a href="#">Financial Planning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="apbc-footer-widget">
                            <div class="apbc-headline">
                                <h5>Company</h5>
                            </div>
                            <div class="apbc-footer-links">
                                <ul>
                                    <li><a href="#">About Comapny</a></li>
                                    <li><a href="#">World Wide Clients</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Winning Award</a></li>
                                    <li><a href="#">Company Statics</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="apbc-footer-widget">
                            <div class="apbc-headline">
                                <h5>Contact Us</h5>
                            </div>
                            <div class="apbc-pera-txt">
                                <p>Our Support services are at your reach 24/7, kindly contact us on the following;</p>
                            </div>
                            <div class="apbc-footer-contact">
                                <ul>
                                    <li><i class="fas fa-phone"></i> +0125696789</li>
                                    <li><i class="fas fa-envelope"></i>morhaulage@gmail.com</li>
                                    <li><i class="fas fa-home"></i> California, United Stats</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="apbc-footer-widget">
                            <div class="apbc-headline">
                                <h5>Gallery</h5>
                            </div>
                            <div class="apbc-footer-gallery">
                                <ul>
                                    <li>
                                        <img src="assets/img/business-4/gal1.jpg" alt="">
                                        <div class="apbc-ft-gl-overlay">
                                            <a href="#"><i class="far fa-image"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="assets/img/business-4/gal2.jpg" alt="">
                                        <div class="apbc-ft-gl-overlay">
                                            <a href="#"><i class="far fa-image"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="assets/img/business-4/gal3.jpg" alt="">
                                        <div class="apbc-ft-gl-overlay">
                                            <a href="#"><i class="far fa-image"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="assets/img/business-4/gal4.jpg" alt="">
                                        <div class="apbc-ft-gl-overlay">
                                            <a href="#"><i class="far fa-image"></i></a>
                                        </div>
                                    </li>
                                    {{-- <li>
									<img src="assets/img/business-4/gal5.jpg" alt="">
									<div class="apbc-ft-gl-overlay">
										<a href="#"><i class="far fa-image"></i></a>
									</div>
								</li>
								<li>
									<img src="assets/img/business-4/gal6.jpg" alt="">
									<div class="apbc-ft-gl-overlay">
										<a href="#"><i class="far fa-image"></i></a>
									</div>
								</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- For Js Library -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/appear.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/swiper.min.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/typer-new.js"></script>
        <script src="assets/js/progress-bar.js"></script>
        <script src="assets/js/rbtools.min.js"></script>
        <script src="assets/js/rs6.min.js"></script>
        <script src="assets/js/side-demo.js"></script>
        <script src="assets/js/business-4.js"></script>


</body>

</html>
