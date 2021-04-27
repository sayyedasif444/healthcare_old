@extends('layouts.app')
@section('header_title')
Gallery
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
                        <h2>Gallery</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Gallery</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->
    <!-- wpo-event-area start -->
    <div class="wpo-donation-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="demo-gallery">
                        <ul id="lightgallery" class="list-unstyled row">
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/storage/uploads/image1.jpg 375, /storage/uploads/image1.jpg 480, /storage/uploads/image1.jpg 800" data-src="/storage/uploads/image1.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="/storage/uploads/image1.jpg">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/storage/uploads/image2.jpg 375, /storage/uploads/image2.jpg 480, /storage/uploads/image2.jpg 800" data-src="/storage/uploads/image2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="/storage/uploads/image2.jpg">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/storage/uploads/image3.jpg 375, /storage/uploads/image3.jpg 480, /storage/uploads/image3.jpg 800" data-src="/storage/uploads/image3.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="/storage/uploads/image3.jpg">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/storage/uploads/image4.jpg 375, /storage/uploads/image4.jpg 480, /storage/uploads/image4.jpg 800" data-src="/storage/uploads/image4.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="/storage/uploads/image4.jpg">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/storage/uploads/image5.jpg 375, /storage/uploads/image5.jpg 480, /storage/uploads/image5.jpg 800" data-src="/storage/uploads/image5.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="/storage/uploads/image5.jpg">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="/storage/uploads/image6.jpg 375, /storage/uploads/image6.jpg 480, /storage/uploads/image6.jpg 800" data-src="/storage/uploads/image6.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                <a href="">
                                    <img class="img-responsive" src="/storage/uploads/image6.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-event-area end -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#lightgallery').lightGallery();
    });
</script>
@endsection
