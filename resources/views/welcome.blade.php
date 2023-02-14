@extends('layouts.app')
<br>
<br>
@section('content')
    <main>
        <!-- Mobile Navigation -->
        <div class="apbc-mobile-navigation">
            <div class="apbc-mobile-menu-wrapper" style="margin-left:50px;">
                <a href="#" class="apbc-mobile-menu-close"><i class="fas fa-times"></i></a>
                <nav>
                    <ul>
                        <li><a class="nav-link" href="{{ route('welcome') }}" class="active">Home</a></li>
                        <li><a class="nav-link" href="#apbc_about">About</a></li>
                        <li><a class="nav-link" href="#apbc_service">Investment Plans</a></li>
                        <li><a class="nav-link" href="#apbc_contact">Contact</a></li>
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">Signup</a></li>
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
                    <p>Morhaulage Investment,we take the world's toughest investments challanges
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

        <!-- Hero Slider Area -->
        <div class="apbc-hero-slider" id="apbc_banner" style="margin-top: 10px;">
            <div class="apbc-single-item" data-background="assets/img/business-4/haula.jpg">
                <span class="apbc-slide-shape-2"><img src="assets/img/business-4/slider/shape-2.png" alt=""></span>
                <div class="centered">
                    <h1 class="cent"
                        style="color:white; width:80%; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                        Investments..
                        <br>
                        Your Way
                    </h1>
                    <div>
                        <p
                            style="color:white; width:80%; position: absolute;bottom: 50%;left: 50%;transform: translate(-50%, -50%);">
                            For over 100 years,MorHaulage Investments has been providing Investment Plans round the Globe,Bringing
                        </p>
                    </div>
                </div>
            </div>
            <div class="apbc-single-item" data-background="assets/img/business-4/inty.jpg">
                <span class="apbc-slide-shape-2"><img src="assets/img/business-4/slider/shape-2.png" alt=""></span>
                <div class="centered">

                    <h2 class="cent"
                        style="color:white; width:80%; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
                        Morhaulage, the key to financial growth & Success. <br>
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
                                        Morhaulage Investment makes private secured investment more accessible, affordable
                                        and efficient.
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
                                                <h6><i class="fas fa-angle-double-right"></i>Right Place, right time.</h6>
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
                                                <p>Low minimum charge on payment request with cryptocurrencies,right on this
                                                    platform,</p>
                                            </div>
                                        </div>
                                        <div class="apbc-inner-content wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Sell and Share</h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>We make it possible for you to sell us your privately help investments in
                                                    cryptocurrency.</p>
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
                            <span class="apbc-subtitle">Investment Plans</span>
                            <div class="apbc-headline">
                                <h3>The Best Business & Investment Plans!</h3>
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
                                <a href="">
                                    <h5>Standard Plan</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <h4>$50.00 - $999.00</h4>
                                <p>2% in 10 Days</p>
                                <p>Total 20% + Capital</p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="{{route('login')}}">Buy Now <i class="fas fa-arrow-right"></i></a>
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
                                    <h5>Pro Plan</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <h4>$1,000.00 - $4,999.00</h4>
                                <p>2.5% in 10 Days</p>
                                <p>Total 25% + Capital</p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="{{route('login')}}">Buy Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="apbc-service-single">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/about/wwde.jpg" alt="">
                        </div>
                        <div class="apbc-icon-wrapper">
                            <i class="flaticon-bank-1"></i>
                        </div>
                        <div class="apbc-service-content">
                            <div class="apbc-headline">
                                <a href="">
                                    <h5>Deluxe Plan</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <h4>$5,000.00 - $9,999.00</h4>
                                <p>3% in 10 Days</p>
                                <p>Total 30% + Capital</p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="{{route('login')}}">Buy Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="container">
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
                                <a href="">
                                    <h5>Gold Plan</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <h6>$10,000.00 - $49,999.00</h6>
                                <p>4% in 10 Days</p>
                                <p>Total 40% + Capital</p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="{{route('login')}}">Buy Now <i class="fas fa-arrow-right"></i></a>
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
                                    <h5>Business Plan</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <h6>$50,000.00 - $99,999.00</h6>
                                <p>5% in 10 Days</p>
                                <p>Total 50% + Capital</p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="{{route('login')}}">Buy Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="apbc-service-single">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/about/wwde.jpg" alt="">
                        </div>
                        <div class="apbc-icon-wrapper">
                            <i class="flaticon-bank-1"></i>
                        </div>
                        <div class="apbc-service-content">
                            <div class="apbc-headline">
                                <a href="">
                                    <h5>Car/House Plan</h5>
                                </a>
                            </div>
                            <div class="apbc-pera-txt">
                                <h6>$5,000.00 - $9,999.00</h6>
                                <p>100% in 2 months</p>
                                <p>Total 200% + Capital</p>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="{{route('login')}}">Buy Now <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Service Section End -->

        <!-- Video Section -->
        <section class="apbc-video-section" data-background="assets/img/business-4/about/wwdg.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="apbc-video-left">
                            <div class="apbc-title-area wow fadeInUp">
                                <span class="apbc-subtitle">Investments Plans</span>
                                <div class="apbc-headline">
                                    <h3>Signup and get Exclusive Investment </h3>
                                </div>
                            </div>
                            <div class="apbc-left-middle wow fadeInUp">
                                <div class="apbc-primary-btn">
                                    <a href="{{ route('register') }}">Signup <i class="fas fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="apbc-video-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="apbc-video-column wow fadeInUp">
                                <div class="apbc-icon-wrapper">
                                    <i class="flaticon-team"></i>
                                </div>
                                <div class="apbc-column-content">
                                    <div class="apbc-headline">
                                        <h4 class="apbc-counterup">10</h4><span>K+</span>
                                    </div>
                                    <div class="apbc-tagline">
                                        <span>Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="apbc-video-column wow fadeInUp" data-wow-delay="0.2s">
                                <div class="apbc-icon-wrapper">
                                    <i class="flaticon-project-management"></i>
                                </div>
                                <div class="apbc-column-content">
                                    <div class="apbc-headline">
                                        <h4 class="apbc-counterup">1000</h4><span>+</span>
                                    </div>
                                    <div class="apbc-tagline">
                                        <span>Return on investment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="apbc-video-column wow fadeInUp" data-wow-delay="0.4s">
                                <div class="apbc-icon-wrapper">
                                    <i class="flaticon-idea"></i>
                                </div>
                                <div class="apbc-column-content">
                                    <div class="apbc-headline">
                                        <h4 class="apbc-counterup">500</h4><span>+</span>
                                    </div>
                                    <div class="apbc-tagline">
                                        <span>Investment Plan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="apbc-video-column wow fadeInUp" data-wow-delay="0.6s">
                                <div class="apbc-icon-wrapper">
                                    <i class="flaticon-link"></i>
                                </div>
                                <div class="apbc-column-content">
                                    <div class="apbc-headline">
                                        <h4 class="apbc-counterup">800</h4><span>+</span>
                                    </div>
                                    <div class="apbc-tagline">
                                        <span>Support Team</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Video Section End -->


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

        <!-- Team Secton End -->

        <!-- Contact Secton -->
        <div class="apbc-contact-section" id="apbc_contact">
            <div class="container">
                <div class="apbc-contact-area">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="apbc-form-left">
                                <form action="">
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
    </main>
@endsection
