@extends('layouts.app')
@section('header_title')
Causes
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
                            <h2>Our Causes</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span>Causes</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wpo-breadcumb-area end -->

       <!-- wpo-case-area start -->

       <div class="wpo-case-area-2 section-padding">
        <div class="container">

            <div class="wpo-case-wrap">
                <div class="row">
                    @foreach ($causes as $item)
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
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
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-2.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>40.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-3.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-4.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-5.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-6.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-6.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-6.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 custom-grid col-12">
                        <div class="wpo-case-item">
                            <div class="wpo-case-img">
                                <img src="/assets/images/case/img-6.png" alt="">
                            </div>
                            <div class="wpo-case-content">
                                <div class="wpo-case-text-top">
                                    <h2>Title for cause</h2>
                                    <div class="progress-section">
                                        <div class="process">
                                            <div class="progress">
                                                <div class="progress-bar">
                                                    <div class="progress-value"><span>80.5</span>%</div>
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
                                        <li><a href="/cause-details">Learn More</a></li>
                                        <li><a href="/donation">Donate Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
       </div>
    <!-- wpo-case-area end -->

@endsection
