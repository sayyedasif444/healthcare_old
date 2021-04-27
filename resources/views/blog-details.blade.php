@extends('layouts.app')
@section('header_title')
{{$blogs[0]->blog_title}}
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
                        <h2>Latest News</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/blogs">Blogs</a></li>
                            <li><span>{{$blogs[0]->blog_title}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->
    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="wpo-wpo-blog-content clearfix">
                        <div class="post">
                            <div class="entry-media">
                                <img src="/storage/uploads/{{$blogs[0]->image_path}}" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><a ><img src="/assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a ><i class="ti-calendar"></i> {{$blogs[0]->blog_date}}</a></li>
                                <li><a  id="likes_count"><i class="ti-heart"></i> <span>{{$blogs[0]->blog_likes}}</span></a></li>
                            </ul>
                            <h2 class="text-capitalize">{{$blogs[0]->blog_title}}</h2>
                            <div id="blog_det"></div>
                        </div>
                    </div>
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
                                                    <h4>{{$item->name}}<span class="comments-date">{{$item->blog_date}}</span></h4>
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
                    <p id="blog_id" style="display: none">{{$blogs[0]->blog_id}}</p>
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
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-single-section -->

@endsection
@section('script')
    <script src="/assets/js/blogs-details.js"></script>
@endsection
