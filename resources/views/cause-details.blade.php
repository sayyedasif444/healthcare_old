@extends('layouts.app')
@section('header_title')
{{$causes[0]->cause_title}}
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
                            <h2>Single Causes</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/causes">Causes</a></li>
                                <li><span>{{$causes[0]->cause_title}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wpo-breadcumb-area end -->

        <!-- wpo-event-details-area start -->
        <div class="wpo-case-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="wpo-case-details-wrap">
                            <div class="wpo-case-details-img">
                                <img src="/storage/uploads/{{$causes[0]->image_path}}" alt="">
                            </div>
                            <div class="wpo-case-details-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#Description">Description</a></li>
                                    <li><a data-toggle="tab" href="#Donations">Donations</a></li>
                                    <li><a data-toggle="tab" href="#Comments">Comments</a></li>
                                </ul>
                            </div>
                            <div class="wpo-case-details-text">
                                <div class="tab-content">
                                    <div id="Description" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-case-content">
                                                    <div class="wpo-case-text-top">
                                                        <h2 class="text-capitalize">{{$causes[0]->cause_title}}</h2>
                                                        {{--<div class="progress-section">
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
                                                            <li><span>Donar:</span> 380</li>
                                                        </ul> --}}

                                                        <div class="case-bb-text " id="cause_det">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="Comments" class="tab-pane wpo-blog-single-section">
                                        <div class="comments-area">
                                            <div class="comments-section">
                                                <h3 class="comments-title">Comments</h3>
                                                <ol class="comments" id="comments_section">
                                                    @foreach ($comments as $item)
                                                    <li class="comment even thread-even depth-1" id="comment-1">
                                                        <div id="div-comment-1">
                                                            <div class="comment-theme">
                                                                <div class="comment-image"><img src="/assets/images/blog-details/comments-author/img-1.jpg" alt></div>
                                                            </div>
                                                            <div class="comment-main-area">
                                                                <div class="comment-wrapper">
                                                                    <div class="comments-meta">
                                                                        <h4>{{$item->name}}<span class="comments-date">{{$item->cause_date}}</span></h4>
                                                                    </div>
                                                                    <div class="comment-area">
                                                                        <p>{{$item->message}}</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ol>
                                            </div> <!-- end comments-section -->
                                        </div> <!-- end comments-area -->
                                        <p id="cause_id" style="display: none">{{$causes[0]->cause_id}}</p>
                                        <div class="comment-respond">
                                            <h3 class="comment-reply-title">Leave a Comment</h3>
                                            <form method="post" id="commentform" class="comment-form">
                                                <div class="form-inputs">
                                                    <input placeholder="Name" type="text" id="comment_name">
                                                    <input placeholder="Email" type="email" id="comment_email">
                                                </div>
                                                <div class="form-textarea">
                                                    <textarea placeholder="Write Your Comments..." id="comment_msg"></textarea>
                                                </div>
                                                <div class="form-submit">
                                                    <input id="submit" value="Reply" type="submit">
                                                </div>
                                                <p id="comment_err_msg"></p>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="Donations" class="tab-pane">
                                        <form action="#">
                                            <div class="wpo-donations-amount">
                                                <h2>Your Donation</h2>
                                                <input type="text" class="form-control" name="text" id="text" placeholder="Enter Donation Amount">
                                            </div>
                                            <div class="wpo-donations-details">
                                                <h2>Details</h2>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                        <input type="text" class="form-control" name="name" id="fname" placeholder="First Name">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Last Name">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                        <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Adress">
                                                    </div>
                                                    <div class="col-lg-12 col-12 form-group">
                                                        <textarea class="form-control" name="note"  id="note" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpo-doanation-payment">
                                                <h2>Choose Your Payment Method</h2>
                                                <div class="wpo-payment-area">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="wpo-payment-option" id="open4">
                                                                <div class="wpo-payment-select">
                                                                    <ul>
                                                                        <li class="addToggle">
                                                                            <input id="add" checked="checked"  type="radio" name="payment" value="30">
                                                                            <label for="add">Payment By Card</label>
                                                                        </li>
                                                                        <li class="removeToggle">
                                                                            <input id="remove" type="radio" name="payment" value="30">
                                                                            <label for="remove">Offline Donation</label>
                                                                        </li>
                                                                    </ul>
                                                               </div>
                                                                <div id="open5" class="payment-name">
                                                                    <ul>
                                                                        <li class="visa"><input id="1" type="radio" name="size" value="30">
                                                                            <label for="1"><img src="/assets/images/checkout/img-1.png" alt=""></label>
                                                                        </li>
                                                                        <li class="mas"><input id="2" type="radio" name="size" value="30">
                                                                            <label for="2"><img src="/assets/images/checkout/img-2.png" alt=""></label>
                                                                        </li>
                                                                        <li class="ski"><input id="3" type="radio" name="size" value="30">
                                                                            <label for="3"><img src="/assets/images/checkout/img-3.png" alt=""></label>
                                                                        </li>
                                                                        <li class="pay"><input id="4" type="radio" name="size" value="30">
                                                                            <label for="4"><img src="/assets/images/checkout/img-4.png" alt=""></label>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="contact-form form-style">
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                <label>Card holder Name</label>
                                                                                <input type="text" placeholder=""  name="name">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                <label>Card Number</label>
                                                                                <input type="text" placeholder="" id="card" name="card">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                <label>CVV</label>
                                                                                <input type="text" placeholder="" name="CVV">
                                                                            </div>
                                                                            <div class="col-lg-6 col-md-12 col-12">
                                                                                <label>Expire Date</label>
                                                                                <input type="text" placeholder=""  name="date">
                                                                            </div>
                                                                        </div>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submit-area">
                                                <button type="submit" class="theme-btn submit-btn">Donate Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            {{-- <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    <li><a href="#">Donations</a></li>
                                    <li><a href="#">Charity</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Non Profit</a></li>
                                    <li><a href="#">Poor People</a></li>
                                    <li><a href="#">Helping Hand</a></li>
                                    <li><a href="#">Video</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-event-details-area end -->

@endsection
@section('script')
    <script src="/assets/js/causes-details.js"></script>
@endsection
