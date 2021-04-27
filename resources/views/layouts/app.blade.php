<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>@yield('header_title')</title>
    <link rel="icon" href="/assets/images/favicon.ico">
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flickity.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lightgallery.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- Start header -->
        <div>
           @yield('navigation')
        </div>
        <!-- end of header -->
        <div>@yield('main-content')</div>
        <div class="wpo-ne-footer">
            <!-- start wpo-news-letter-section -->
            <section class="wpo-news-letter-section">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <div class="wpo-newsletter">
                                <h3>Follow us For ferther information</h3>
                                <div class="wpo-newsletter-form">
                                    <form id="footer_form">
                                        <div>
                                            <input type="email" placeholder="Enter Your Email" name="subscriber_id" class="form-control" id="subscriber_id">
                                            <button type="submit" id="">Subscribe</button>
                                        </div>
                                        <div class="text-white" id="subscriber_text">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end wpo-news-letter-section -->
            <!-- start wpo-site-footer -->
            <footer class="wpo-site-footer">
                <div class="wpo-upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget about-widget">
                                    <div class="logo widget-title">
                                        <img src="{{asset('assets/images/logo.jpg')}}" alt="blog" width="100%">
                                    </div>
                                    <p>We aim to provide high-quality healthcare services at minimal rates. </p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget link-widget resource-widget" >
                                    <div class="widget-title">
                                        <h3>Top News</h3>
                                    </div>
                                    <div id="footer_blogs"></div>

                                </div>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6">
                                <div class="widget link-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                    </div>
                                    <ul>
                                        <li><a href="/about-us">About Us</a></li>
                                        <li><a href="/causes">Our Causes</a></li>
                                        <li><a href="/blogs">Our News</a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                                        <li><a href="/events">Our Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                                <div class="widget market-widget wpo-service-link-widget">
                                    <div class="widget-title">
                                        <h3>Contact </h3>
                                    </div>
                                    <p>Feel free to reach us for ferther assistance.</p>
                                    <div class="contact-ft">
                                        <ul>
                                            <li><i class="fi flaticon-pin"></i>255/900  , Near GG Int'l School, S.T Nagar , Pimpri Pune - 411018</li>
                                            <li><i class="fi flaticon-call"></i>8888 4422 02 / 8888 442244</li>
                                            <li><i class="fi flaticon-envelope"></i>info@healthcare.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </div>
                <div class="wpo-lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <p class="copyright">&copy; 2020 Heathcare. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end wpo-site-footer -->
        </div>
    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{asset('assets/js/jquery-plugin-collection.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="{{asset('assets/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/footer.js')}}"></script>
    <div>
        @yield('script')
    </div>
    <a class="theme-btn shadow-lg" href="/donate" style="position: fixed; top:50%; right:-50px; transform:rotate(270deg); padding:10px 20px; z-index:9999; text-align:center; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">Donate Now</a>

</body>

</html>
