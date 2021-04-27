@extends('layouts.app')
@section('header_title')
Events
@endsection
@section('navigation')
 @include('layouts.nav')
@endsection
@section('main-content')
        <!-- end of header -->
        <!-- .wpo-breadcumb-area start -->
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Our Event</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span>Event</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wpo-breadcumb-area end -->

        <!-- wpo-event-area start -->

        <!-- wpo-case-area end -->
        <div class="wpo-event-area-2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <h2>Our Events</h2>
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
                                <h2>Education for All Children</h2>
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
                                <h2>Food for All Everyone</h2>
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
                    <div class="col-md-4 col-sm-6 col-12 custom-grid">
                        <div class="wpo-event-item">
                            <div class="wpo-event-img">
                                <img src="assets/images/event/img-4.jpg" alt="">
                                <div class="thumb-text">
                                    <span>25</span>
                                    <span>NOV</span>
                                </div>
                            </div>
                            <div class="wpo-event-text">
                                <h2>Education for All Children</h2>
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
                                <img src="assets/images/event/img-5.jpg" alt="">
                                <div class="thumb-text-2">
                                    <span>25</span>
                                    <span>NOV</span>
                                </div>
                            </div>
                            <div class="wpo-event-text">
                                <h2>Food for All Everyone</h2>
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
                                <img src="assets/images/event/img-6.jpg" alt="">
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

@endsection
@section('script')
<script src="/assets/js/event.js"></script>
@endsection
