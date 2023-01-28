@extends('layouts.app')
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
                        <li><a class="nav-link" href="#apbc_service">Service</a></li>
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
        <div class="apbc-hero-slider" id="apbc_banner">
            <div class="apbc-single-item">
                <span class="apbc-slide-shape-2"><img src="assets/img/business-4/slider/shape-2.png" alt=""></span>

                <span class="apbc-slide-shape-1"><video src="assets/APLL-Website-Hdr-clip_1920x1080_10152020.mp4" muted
                        autoplay></video></span>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="apbc-slide-left">
                                <div class="apbc-headline">
                                    <h4 style="font-size:4vw; color:white;">The Bigest Investment Company!</h4>
                                </div>
                                <div class="apbc-pera-txt">
                                    <p style="color:white; font-size:4vw;">Morhaulage Investment has taken the world's toughest
                                        investments challanges
                                        <br>and turned them into seamless,streamlined and affordable minimum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="apbc-single-item" data-background="assets/img/business-4/inty.jpg">
                {{-- <span class="apbc-slide-shape-1"><img src="assets/img/business-4/slider/shape-1.png" alt=""></span> --}}
                <span class="apbc-slide-shape-2"><img src="assets/img/business-4/slider/shape-2.png" alt=""></span>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="apbc-slide-left">
                                <div class="apbc-headline">
                                    <h4 style="font-size:5vw; color:white;">Investments, made at an affordable minimum!</h4>
                                    <br>
                                    <p style="color:white; font-size:4vw;">Morhaulage Investment is the key to Financial Growth and
                                        Success.</p>
                                </div>


                            </div>
                        </div>
                    </div>
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
                                        Morhaulage Investment makes private secured investment more accessible, affordable and efficient.
                                        We provide investors an easy to use platform for investments at the click of a button,
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
                                                <p>As a verified investor,you have easy access to withdraw any return on investment,</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="apbc-inner-content wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Quick and Easy</h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>Low minimum charge on payment request with cryptocurrencies,right on this platform,</p>
                                            </div>
                                        </div>
                                        <div class="apbc-inner-content wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="apbc-headline">
                                                <h6><i class="fas fa-angle-double-right"></i>Sell and Share</h6>
                                            </div>
                                            <div class="apbc-pera-txt">
                                                <p>We make it possible for you to sell us your privately help investments in cryptocurrency.</p>
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
                                    long-term employees can realize early returns without waiting for IPO or acquisition.
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

        <!-- Project Section -->
        {{-- <section class="apbc-project-section" id="apbc_project">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="apbc-title-area text-center wow fadeInUp">
                    <span class="apbc-subtitle">Project</span>
                    <div class="apbc-headline">
                        <h3>We are specialist for many business solutions</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="apbc-bottom-content">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="apbc-pr-column wow  fadeInUp">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/projects/01.jpg" alt="">
                        </div>
                        <div class="apbc-pr-content">
                            <div class="apbc-pr-left">
                                <a href="#"><h5>Marketing data research</h5></a>
                                <a href="#"><span>Banking Solution</span></a>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="apbc-pr-column wow fadeInUp" data-wow-delay="0.1s">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/projects/02.jpg" alt="">
                        </div>
                        <div class="apbc-pr-content">
                            <div class="apbc-pr-left">
                                <a href="#"><h5>Marketing data research</h5></a>
                                <a href="#"><span>Banking Solution</span></a>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="apbc-pr-column wow fadeInUp" data-wow-delay="0.2s">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/projects/03.jpg" alt="">
                        </div>
                        <div class="apbc-pr-content">
                            <div class="apbc-pr-left">
                                <a href="#"><h5>Marketing data research</h5></a>
                                <a href="#"><span>Banking Solution</span></a>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="apbc-pr-column wow fadeInUp" data-wow-delay="0.3s">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/projects/04.jpg" alt="">
                        </div>
                        <div class="apbc-pr-content">
                            <div class="apbc-pr-left">
                                <a href="#"><h5>Marketing data research</h5></a>
                                <a href="#"><span>Banking Solution</span></a>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="apbc-pr-column wow fadeInUp" data-wow-delay="0.4s">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/projects/05.jpg" alt="">
                        </div>
                        <div class="apbc-pr-content">
                            <div class="apbc-pr-left">
                                <a href="#"><h5>Marketing data research</h5></a>
                                <a href="#"><span>Banking Solution</span></a>
                            </div>
                            <div class="apbc-readmore-btn">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="apbc-readmore-btn-2 wow fadeInUp">
                <a href="#">more project <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section> --}}
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
        {{-- <section class="apbc-testimonial-section">
    <span class="apbc-client-thumb apbc-thumbnail-1 wow fadeInUp"><img src="assets/img/business-4/testimonial/client_1.png" alt=""></span>
    <span class="apbc-client-thumb apbc-thumbnail-2 wow fadeInLeft"><img src="assets/img/business-4/testimonial/client_2.png" alt=""></span>
    <span class="apbc-client-thumb apbc-thumbnail-3 wow fadeInDown"><img src="assets/img/business-4/testimonial/client_3.png" alt=""></span>
    <span class="apbc-client-thumb apbc-thumbnail-4 wow fadeInRight"><img src="assets/img/business-4/testimonial/client_4.png" alt=""></span>
    <span class="apbc-client-thumb apbc-thumbnail-5 wow fadeInUp"><img src="assets/img/business-4/testimonial/client_5.png" alt=""></span>
    <span class="apbc-client-thumb apbc-thumbnail-6 wow fadeInDown"><img src="assets/img/business-4/testimonial/client_6.png" alt=""></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="apbc-title-area text-center">
                    <span class="apbc-subtitle">Clients Feedback</span>
                    <div class="apbc-headline">
                        <h3>We have an Exclusive <br> Team members</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="apbc-client-feedback">
            <div class="apbc-client-single">
                <div class="apbc-img-wrapper">
                    <img src="assets/img/business-4/testimonial/thumb-1.png" alt="">
                </div>
                <div class="apbc-pera-txt">
                    <p> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus velfacilinaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis Risus commodo viverra.</p>
                </div>
                <div class="apbc-client-content">
                    <div class="apbc-headline">
                        <h5>Mehedi Mohammad</h5>
                        <span>CEO,Founder</span>
                    </div>
                </div>
            </div>
            <div class="apbc-client-single">
                <div class="apbc-img-wrapper">
                    <img src="assets/img/business-4/testimonial/client_2.png" alt="">
                </div>
                <div class="apbc-pera-txt">
                    <p> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus velfacilinaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis Risus commodo viverra.</p>
                </div>
                <div class="apbc-client-content">
                    <div class="apbc-headline">
                        <h5>Mehedi Mohammad</h5>
                        <span>CEO,Founder</span>
                    </div>
                </div>
            </div>
            <div class="apbc-client-single">
                <div class="apbc-img-wrapper">
                    <img src="assets/img/business-4/testimonial/client_3.png" alt="">
                </div>
                <div class="apbc-pera-txt">
                    <p> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus velfacilinaaliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis Risus commodo viverra.</p>
                </div>
                <div class="apbc-client-content">
                    <div class="apbc-headline">
                        <h5>Mehedi Mohammad</h5>
                        <span>CEO,Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feedback Secton End -->

<!-- Blog Section -->
<section class="apbc-blog-section" id="apbc_blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="apbc-title-area wow fadeInUp">
                    <span class="apbc-subtitle">Clients Feedback</span>
                    <div class="apbc-headline">
                        <h3>See latest news & Articles<br> from blog</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="apbc-primary-btn">
                    <a href="#">read more<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="apbc-blog-content">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="apbc-blog-column wow fadeInUp">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/blog/01.jpg" alt="">
                            <a href="#"><span class="apbc-blog-category">Business Analysis</span></a>
                        </div>
                        <div class="apbc-blog-meta">
                            <span><i class="fas fa-user"></i>Admin</span>
                            <span><i class="fas fa-comments"></i>Comments</span>
                        </div>
                        <div class="apbc-headline">
                            <a href="#"><h5>Seminar for best marketing startegy</h5></a>
                        </div>
                        <div class="apbc-readmore-btn">
                            <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="apbc-blog-column wow fadeInUp" data-wow-delay="0.2s">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/blog/02.jpg" alt="">
                            <a href="#"><span class="apbc-blog-category">Business Analysis</span></a>
                        </div>
                        <div class="apbc-blog-meta">
                            <span><i class="fas fa-user"></i>Admin</span>
                            <span><i class="fas fa-comments"></i>Comments</span>
                        </div>
                        <div class="apbc-headline">
                            <a href="#"><h5>Experts Always ready to maximizing products</h5></a>
                        </div>
                        <div class="apbc-readmore-btn">
                            <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="apbc-blog-column wow fadeInUp" data-wow-delay="0.4s">
                        <div class="apbc-img-wrapper">
                            <img src="assets/img/business-4/blog/01.jpg" alt="">
                            <a href="#"><span class="apbc-blog-category">Business Analysis</span></a>
                        </div>
                        <div class="apbc-blog-meta">
                            <span><i class="fas fa-user"></i>Admin</span>
                            <span><i class="fas fa-comments"></i>Comments</span>
                        </div>
                        <div class="apbc-headline">
                            <a href="#"><h5>Economy may face double recession</h5></a>
                        </div>
                        <div class="apbc-readmore-btn">
                            <a href="#">Read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End --> --}}


    </main>
@endsection
