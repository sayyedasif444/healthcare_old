@extends('layouts.app')
@section('header_title')
Blogs
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
                            <li><a href="index.html">Home</a></li>
                            <li><span>Blog</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->

    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row" >
                <div class="col col-md-8">
                    <div class="wpo-wpo-blog-content" id="blog_disp">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="assets/images/blog/img-4.jpg" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="ti-calendar"></i> Sep 25,2020</a></li>
                                <li><a href="#"><i class="ti-heart"></i> 35</a></li>
                            </ul>
                            <h3><a href="/blog-details">Help the helpless who need you.</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                            <a href="/blog-details" class="read-more">Read More...</a>
                        </div>
                        <div class="post format-video">
                            <div class="entry-media video-holder">
                                <img src="assets/images/blog/img-5.jpg" alt>
                                <a href="https://www.youtube.com/embed/iSbzh0r9IV4?autoplay=1" class="video-btn" data-type="iframe">
                                    <i class="fi flaticon-play-button-2"></i>
                                </a>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="ti-calendar"></i> Sep 25,2020</a></li>
                                <li><a href="#"><i class="ti-heart"></i> 35</a></li>
                            </ul>
                            <h3><a href="/blog-details">They are waiting for your help.</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                            <a href="/blog-details" class="read-more">Read More...</a>
                        </div>
                        <div class="post format-gallery">
                            <div class="entry-media post-slider">
                                <img src="assets/images/blog/img-6.jpg" alt>
                                <img src="assets/images/blog/img-4.jpg" alt>
                            </div>
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="ti-calendar"></i> Sep 25,2020</a></li>
                                <li><a href="#"><i class="ti-heart"></i> 35</a></li>
                            </ul>
                            <h3><a href="/blog-details">They are waiting for your help.</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                            <a href="/blog-details" class="read-more">Read More...</a>
                        </div>
                        <div class="post format-quote">
                            <ul class="entry-meta">
                                <li><a href="#"><img src="assets/images/blog/admin.jpg" alt> By Admin</a></li>
                                <li><a href="#"><i class="ti-calendar"></i> Sep 25,2020</a></li>
                                <li><a href="#"><i class="ti-heart"></i> 35</a></li>
                            </ul>
                            <h3><a href="/blog-details">They are waiting for your help.</a></h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                        </div>
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fi ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fi ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
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

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end wpo-blog-pg-section -->

@endsection
@section('script')
<script src="/assets/js/blogs.js"></script>
@endsection
