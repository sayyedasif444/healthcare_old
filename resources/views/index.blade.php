@extends('layouts.app')
@section('header_title')
    The Healthcare Foundation
@endsection
@section('navigation')
 @include('layouts.homenav')
@endsection
@section('main-content')

    <!-- start of hero -->
    <section class="hero hero-style-1">
        <div class="hero-slider">
            <div class="slide">
                <div class="container">
                    <img src="assets/images/slider/slide-2.jpg" alt class="slider-bg">
                    <div class="row">
                        <div class="col col-md-6 slide-caption">
                            <div class="slide-title">
                                <h2>We Believe in  <span>Healthier life.</span></h2>
                            </div>
                            <div class="slide-subtitle">
                                <p>Our mission is to provide affordable and quality service in  </p>
                                <p> healthcare assistance and facilities and to encourage </p>
                                <p> people to live healthy life.</p>
                            </div>

                            <div class="btns">
                                <a href="/donate" class="theme-btn">Donate Now</a>
                                <a href="/about-us" class="theme-btn-s2">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="container">
                    <img src="assets/images/slider/slide-1.jpg" alt class="slider-bg">
                    <div class="row">
                        <div class="col col-md-6 slide-caption">
                            <div class="slide-title">
                                <h2>We See a <br><span>Carefree World.</span></h2>
                            </div>
                            <div class="slide-subtitle">
                                <p>Our vision is to provide assistance and healthcare facilities to  </p>
                                <p>everyone who can’t afford healthcare services.</p>
                            </div>
                            <div class="btns">
                                <a href="/donate" class="theme-btn">Donate Now</a>
                                <a href="/about-us" class="theme-btn-s2">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="slide">
                <div class="container">
                    <img src="assets/images/slider/slide-4.jpg" alt class="slider-bg">
                    <div class="row">
                        <div class="col col-md-6 slide-caption">
                            <div class="slide-title">
                                <h2>Lorem Ipsum is  <span>dummy text</span></h2>
                            </div>
                            <div class="slide-subtitle">
                                <p>Lorem Ipsum is simply dummy text of the </p>
                                <p>printing and typesetting.</p>
                            </div>
                            <div class="btns">
                                <a href="#" class="theme-btn">Donate Now</a>
                                <a href="#" class="theme-btn-s2">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- end of hero slider -->
    <!-- wpo-mission-area start -->
    <div class="wpo-mission-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>What We Serve?</span>
                        <h2>We Are In A Mission To Help The Helpless</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-mission-wrap">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12 custom-grid">
                        <div class="wpo-mission-item">
                            <div class="wpo-mission-icon">
                                <i class="fi flaticon-care"></i>

                            </div>
                            <div class="wpo-mission-content">
                                <h2>Healthcare Facilities</h2>
                                <p>High Dependency Unit(HDU), Diagnosis facilities, Intensive Care units(ICU) at minimal cost.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 custom-grid">
                        <div class="wpo-mission-item">
                            <div class="wpo-mission-icon-2">
                                <i class="fi flaticon-food-and-restaurant"></i>
                            </div>
                            <div class="wpo-mission-content">
                                <h2>Medical Assistance</h2>
                                <p>Guides patients to take a perfect healthcare facilities with minimal costs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 custom-grid">
                        <div class="wpo-mission-item">
                            <div class="wpo-mission-icon-4">
                                <i class="fi flaticon-call"></i>
                            </div>
                            <div class="wpo-mission-content">
                                <h2>Consultation</h2>
                                <p>Provides consultacy support to get financial aid from private and government for BPL patients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12 custom-grid">
                        <div class="wpo-mission-item">
                            <div class="wpo-mission-icon-3">
                                <i class="fi flaticon-book"></i>
                            </div>
                            <div class="wpo-mission-content">
                                <h2>Education Assistance</h2>
                                <p>Provides consultacy support to get financial aid from private and government for BPL patients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-mission-area end -->
    <!-- wpo-about-area start -->
    <div class="wpo-about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 colsm-12">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span>What We Do?</span>
                            <h2>We Believe in Healthier life.</h2>
                        </div>
                        <p>2010 was the year "The Healthcare Foundation" was introduced to you. In the last decade We have served ample amount of  people not only by providing healthcare facilities but also by providing education assistance, health awareness programmes and others. We are partnering with different sectors of  healthcare system to provide the best facilities at lowest rates.  </p>
                        <p>we have  setup  critical care unit, diagnostics, intensive care unit at government and semi government premises to help people enjoy private heathcare facilities at minimal rates. </p>
                        <div class="btns">
                            <a href="/about-us" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 colsm-12">
                    <div class="wpo-about-img-3">
                        <img src="assets/images/about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-about-area end -->

    <!-- wpo-case-area start -->
    <div class="wpo-case-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Our Causes</span>
                        <h2>Popular Causes What You Should Know</h2>
                    </div>
                </div>
            </div>
            <div class="wpo-case-wrap">
                <div class="wpo-case-slider">
                    @foreach ($causes as $item)
                    <div class="wpo-case-single">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/storage/uploads/{{$item->image_path}}" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>{{$item->cause_title}}</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>65.5</span>%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><span>Raised:</span> $7,000.00</li>
                                        <li><span>Goal:</span> $8,000.00</li>
                                    </ul>
                                </div>
                                <div class="case-btn">
                                    <ul>
                                        <li><a href="/causes/{{$item->cause_slug}}">Learn More</a></li>
                                        <li><a href="/donate">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-case-area end -->
    <!-- .wpo-counter-area start -->
    <div class="wpo-counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpo-counter-grids">
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="6200">00</span>+</h2>
                            </div>
                            <p>Donation</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="80">00</span>+</h2>
                            </div>
                            <p>Fund Raised</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="245">00</span>+</h2>
                            </div>
                            <p>Volunteers</p>
                        </div>
                        <div class="grid">
                            <div>
                                <h2><span class="odometer" data-count="605">00</span>+</h2>
                            </div>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-counter-area end -->
    <!-- wpo-team-area start -->
    <div class="wpo-team-area section-padding ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Check Our Work</span>
                        <h2>Our Memorable Story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="carousel js-flickity">
                    <!-- images from unsplash.com -->
                    <div class="carousel-cell">
                      <img src="/storage/uploads/image1.jpg" alt="" />
                    </div>
                    <div class="carousel-cell">
                        <img src="/storage/uploads/image2.jpg" alt="" />
                    </div>
                    <div class="carousel-cell">
                        <img src="/storage/uploads/image3.jpg" alt="" />
                    </div>
                    <div class="carousel-cell">
                        <img src="/storage/uploads/image4.jpg" alt="" />
                    </div>
                    <div class="carousel-cell">
                        <img src="/storage/uploads/image5.jpg" alt="" />
                    </div>
                    <div class="carousel-cell">
                        <img src="/storage/uploads/image6.jpg" alt="" />
                    </div>

                </div>
                <div class="btns pt-5 text-center" style="margin-top:50px">
                    <a href="/gallery" class="theme-btn pt-5">Check Gallery</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="wpo-team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Meet Our Team</span>
                        <h2>Our Expert Volunteer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 custom-grid">
                    <div class="wpo-team-wrap">
                        <div class="wpo-team-img">
                            <img src="assets/images/team/team-1.jpg" alt="">
                        </div>
                        <div class="wpo-team-content">
                            <div class="wpo-team-text-sub">
                                <h2>Smith Tomkin</h2>
                                <span>CEO & Founder</span>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 custom-grid">
                    <div class="wpo-team-wrap">
                        <div class="wpo-team-img">
                            <img src="assets/images/team/team-2.jpg" alt="">
                        </div>
                        <div class="wpo-team-content">
                            <div class="wpo-team-text-sub">
                                <h2>Robert Honey</h2>
                                <span>Volunteer</span>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 custom-grid">
                    <div class="wpo-team-wrap">
                        <div class="wpo-team-img">
                            <img src="assets/images/team/team-3.jpg" alt="">
                        </div>
                        <div class="wpo-team-content">
                            <div class="wpo-team-text-sub">
                                <h2>Juliya Jossoy</h2>
                                <span>Volunteer</span>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- wpo-team-area end -->
    <!-- world area start -->
    <div class="wpo-world-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-world-section">
                        <h2>Lets Chenge The World With Humanity</h2>
                        <a href="volunteer.html"><img src="assets/images/team/1.png" alt="">Become A Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- world area end -->
    <!-- wpo-event-area start -->
    <div class="wpo-event-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Our Events</span>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="row" id="event_disp">
                <div class="col-md-4 col-sm-6 col-12 custom-grid">
                    <div class="wpo-event-item">
                        <div class="wpo-event-img">
                            <img src="assets/images/event/img-1.jpg" alt="">
                            <div class="thumb-text">
                                <span>25</span>
                                <span>NOV</span>
                            </div>
                        </div>
                        <div class="wpo-event-text">
                            <h2>Free Treatment</h2>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>8.00 - 5.00</li>
                                <li><i class="fi flaticon-pin"></i>Newyork City</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="/event-details">Learn More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 custom-grid">
                    <div class="wpo-event-item">
                        <div class="wpo-event-img">
                            <img src="assets/images/event/img-2.jpg" alt="">
                            <div class="thumb-text-2">
                                <span>25</span>
                                <span>NOV</span>
                            </div>
                        </div>
                        <div class="wpo-event-text">
                            <h2>Free Treatment</h2>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>8.00 - 5.00</li>
                                <li><i class="fi flaticon-pin"></i>Newyork City</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="/event-details">Learn More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 custom-grid">
                    <div class="wpo-event-item">
                        <div class="wpo-event-img">
                            <img src="assets/images/event/img-3.jpg" alt="">
                            <div class="thumb-text-3">
                                <span>25</span>
                                <span>NOV</span>
                            </div>
                        </div>
                        <div class="wpo-event-text">
                            <h2>Free Treatment </h2>
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>8.00 - 5.00</li>
                                <li><i class="fi flaticon-pin"></i>Newyork City</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <a href="/event-details">Learn More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
    <!-- wpo-cta-area start -->
    <div class="wpo-cta-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpo-cta-text">
                        <h2>You Can Help The Poor With Us</h2>
                        <p>"Since you get more joy out of giving joy to others, you should put a good deal of thought into the happiness that you are able to give." </p>
                        <div class="btns">
                            <a href="/donate" class="theme-btn">Donate Now</a>
                            <a href="/contact" class="theme-btn-s2">Join Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-cta-area end -->
    <!-- wpo-blog-area start -->
    <div class="wpo-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-section-title">
                        <span>Our Blog</span>
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row" id="blog_disp">

            </div>
        </div>
    </div>
    <!-- wpo-blog-area end -->
@endsection
@section('script')
<script src="/assets/js/index.js"></script>
@endsection
