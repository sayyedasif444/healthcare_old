@extends('layouts.app')
@section('header_title')
{{$events[0]->event_title}}
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
                        <h2>Single Event</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><span>Event</span></li>
                            <li><span>{{$events[0]->event_title}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->
    <!-- wpo-event-details-area start -->
    <div class="wpo-event-details-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                     <div class="wpo-event-item">
                        <div class="wpo-event-img">
                            <img src="/storage/uploads/{{$events[0]->image_path}}" alt="">
                            <div class="thumb-text">
                                <span id="nudate"></span>
                                <span id="mdate"></span>
                            </div>
                        </div>
                        <div class="wpo-event-details-text">
                            <h2>{{$events[0]->event_title}}</h2>
                             <div id="upper_desc">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</div>
                        </div>
                        <div class="wpo-event-details-wrap">
                            <div class="wpo-event-details-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#Schedule">Event Schedule</a></li>
                                    <li><a data-toggle="tab" href="#Contact">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="wpo-event-details-content">
                                <div class="tab-content">
                                    <div id="Schedule" class="tab-pane active">
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                                        <ul>
                                            <li>The wise man therefore in these matters.</li>
                                            <li>In a free hour, when our power of choice  and when nothing.</li>
                                            <li>Else he  pains to avoid pains.</li>
                                            <li>We denounce with righteous indignation dislike men. </li>
                                            <li>Which is the same as saying through.</li>
                                            <li>The wise man therefore always holds in these matters.</li>
                                            <li>Power of choice  and when nothing.</li>
                                            <li>Pains to avoid worse pains.</li>
                                        </ul>
                                    </div>

                                    <div id="Contact" class="tab-pane">
                                        <div class="event-contact">
                                            <div class="wpo-donations-details">
                                                <form method="post" class="contact-validation-active" id="commentform">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group">
                                                            <input type="text" class="form-control" name="name" id="cname" placeholder="Your Name">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group clearfix">
                                                            <input type="email" class="form-control" name="email" id="cemail" placeholder="Your Email">
                                                        </div>
                                                        <div class="col-lg-12 col-12 form-group">
                                                            <textarea class="form-control" name="note"  id="cnote" placeholder="Massage"></textarea>
                                                        </div>
                                                        <div class="submit-area col-lg-12 col-12">
                                                            <button type="submit" class="theme-btn submit-btn">Submit Now</button>

                                                        </div>
                                                    </div>
                                                    <p id="comment_err_msg"></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="event_id" style="display: none">{{$events[0]->event_id}}</p>
                <div class="col col-md-4">
                    <div class="wpo-blog-sidebar">

                        <div class="widget recent-post-widget">
                            <h3>Recent posts</h3>
                            <div class="posts">
                                @foreach ($allblogs as $item)
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="/storage/uploads/{{$item->image_path}}" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="/blogs/{{$item->blog_slug}}">{{$item->blog_title}}</a></h4>
                                        <span class="date">{{$item->blog_date}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-details-area end -->

@endsection
@section('script')
    <script src="/assets/js/event-details.js"></script>
@endsection
