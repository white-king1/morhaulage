<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Morhaulage Investment</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Css Fils -->
    <meta name="author" content="Themexriver">
    <link rel="shortcut icon" href="assets/img/fv.png" type="image/x-icon">
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
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation.19.2/dist/jquery.validate.min.js"></script>

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
    <a href="#" class="apbc-scroll-top"><i class="fas fa-angle-double-up"></i></a>

    <script>
        function googleTranslateElementInit(){
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script src="'http://translate.google.com/translate_a/element.js?cb=goggleTranslateElementInit"></script>
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
                            <li><a class="nav-link" href="{{ route('welcome') }}" class="active">Home</a></li>
                            <li><a class="nav-link" href="#apbc_about">About</a></li>
                            <li><a class="nav-link" href="#apbc_service">Service</a></li>
                            <li><a class="nav-link" href="#apbc_contact">Contact</a></li>

                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Signup</a></li>

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
        {{-- ADDING GOOGLE TRANSALTE TO A WEB PAGE USING HTML,CSS AND JAVASCRIPT BEGINS --}}
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
        <div id="google_translate_element"></div>


        {{-- <style type='text/css'>
            iframe.goog-te-banner-frame {
                display: none !important;
            }
        </style>

        <style type='text/css'>
            body {
                position: static !important;
                top: 10px !important;

            }
        </style>

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
        <style type="text/css">
            .goog-te-combo {
                max-width: 100% !important;
                overflow: scroll !important;
                box-sizing: border-box !important; //fixes a padding issue
                height: 20% !important; //gets rid of vertical
            }
        </style>
        <div class="nav-right">
            <div id="google_translate_element"></div>

            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en'
                    }, 'google_translate_element');
                }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            </script>
        </div> --}}
        {{-- ADDING GOOGLE TRANSALTE TO A WEB PAGE USING HTML,CSS AND JAVASCRIPT ENDS HERE --}}


    </header>
    <!-- Header Section End -->


    @yield('content')
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
    <script src="assets/js/change_password.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element'
            );
        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
        cb=googleTranslateElementInit"></script>

    <style>
        .whatsapp {
            position: fixed;
            left: 20px;
            top: 52%;
        }

        .whatsapp h5 {
            color: white;
            background: #20b20f;
            padding: 12px;
            border-radius: 10px;
        }
    </style>

    <div class="whatsapp">
        <a href="https://wa.me/+17473205867" target="_blank">
            <h5><i data-feather="message-circle" style="color:yellow;"></i></h5>
        </a>
    </div>



</body>

</html>
