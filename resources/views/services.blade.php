@extends('template.master')

@section('content')

<div class="custom__cursor-one"></div>
<div class="custom__cursor-two"></div>
<!-- Preloader start -->
<div class="theme-loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!-- Preloader end -->

<!-- Services Area Start -->
<div class="services__page section-padding">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-6 col-lg-8">
                <div class="services__page-title lg-t-center">
                    <span class="subtitle">Our Services</span>
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="services__page-item">
                    <div class="services__page-item-left">
                        <div class="services__page-item-left-icon">
                            <img src="{{ asset('/img/icon/service-1.png') }}" alt="">
                        <div class="services__area-item-icon-one">
                            <img src="{{ asset('/img/icon/services-1.png') }}" alt="">
                        </div>
                        </div>
                        <div class="services__page-item-left-content">
                            <h4><a href="services-details.html">UI/UX Designing</a></h4>
                        </div>
                    </div>
                    <div class="services__page-item-center">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis</p>
                    </div>
                    <div class="services__page-item-right">
                        <a href="services-details.html"><i class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-30">
                <div class="services__page-item">
                    <div class="services__page-item-left">
                        <div class="services__page-item-left-icon">
                            <img src="{{ asset('/img/icon/service-2.png') }}" alt="">
                        <div class="services__area-item-icon-one">
                            <img src="{{ asset('/img/icon/services-2.png') }}" alt="">
                        </div>
                        </div>
                        <div class="services__page-item-left-content">
                            <h4><a href="services-details.html">Web & apps Development</a></h4>
                        </div>
                    </div>
                    <div class="services__page-item-center">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis</p>
                    </div>
                    <div class="services__page-item-right">
                        <a href="services-details.html"><i class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-30">
                <div class="services__page-item">
                    <div class="services__page-item-left">
                        <div class="services__page-item-left-icon">
                            <img src="{{ asset('/img/icon/service-3.png') }}" alt="">
                        <div class="services__area-item-icon-one">
                            <img src="{{ asset('/img/icon/services-3.png') }}" alt="">
                        </div>
                        </div>
                        <div class="services__page-item-left-content">
                            <h4><a href="services-details.html">Digital  Marketing</a></h4>
                        </div>
                    </div>
                    <div class="services__page-item-center">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis</p>
                    </div>
                    <div class="services__page-item-right">
                        <a href="services-details.html"><i class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="services__page-item">
                    <div class="services__page-item-left">
                        <div class="services__page-item-left-icon">
                            <img src="{{ asset('/img/icon/service-4.png') }}" alt="">
                        <div class="services__area-item-icon-one">
                            <img src="{{ asset('/img/icon/services-4.png') }}" alt="">
                        </div>
                        </div>
                        <div class="services__page-item-left-content">
                            <h4><a href="#">Branding strategy</a></h4>
                        </div>
                    </div>
                    <div class="services__page-item-center">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis</p>
                    </div>
                    <div class="services__page-item-right">
                        <a href="#"><i class="fal fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
<!-- Video Area Start -->
<div class="video__area" data-background="{{ asset('/img/video-1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video__area-play-icon video-pulse"> <a class="video-popup" href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a> </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Area End -->
<!-- Feedback Area Start -->
<div class="feedback__area section-padding">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-12">
                <div class="feedback__area-title">
                    <span class="subtitle-one">Our Reviews</span>
                    <h2>Awesome client Feedback</h2>                         
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 xl-mb-30">
                <div class="feedback__area-item">
                    <div class="feedback__area-item-quote">
                        <img src="{{ asset('/img/icon/quote.png') }}" alt="">
                    </div>
                    <div class="feedback__area-item-reviews">
                        <h5>Good :</h5>
                        <ul>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="feedback__area-item-content">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis metus mattis quis.</p>
                    </div>
                    <div class="feedback__area-item-bottom">
                        <div class="feedback__area-item-bottom-avatar">
                            <img src="{{ asset('/img/avatar/feedback-1.jpg') }}" alt="">
                        </div>
                        <div class="feedback__area-item-bottom-title">
                            <h5>david bowie</h5>
                            <span>UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 lg-mb-30">
                <div class="feedback__area-item">
                    <div class="feedback__area-item-quote">
                        <img src="{{ asset('/img/icon/quote.png') }}" alt="">
                    </div>
                    <div class="feedback__area-item-reviews">
                        <h5>Good :</h5>
                        <ul>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="feedback__area-item-content">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis metus mattis quis.</p>
                    </div>
                    <div class="feedback__area-item-bottom">
                        <div class="feedback__area-item-bottom-avatar">
                            <img src="{{ asset('/img/avatar/feedback-2.jpg') }}" alt="">
                        </div>
                        <div class="feedback__area-item-bottom-title">
                            <h5>michel aoun</h5>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="feedback__area-item">
                    <div class="feedback__area-item-quote">
                        <img src="{{ asset('/img/icon/quote.png') }}" alt="">
                    </div>
                    <div class="feedback__area-item-reviews">
                        <h5>Good :</h5>
                        <ul>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="feedback__area-item-content">
                        <p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis metus mattis quis.</p>
                    </div>
                    <div class="feedback__area-item-bottom">
                        <div class="feedback__area-item-bottom-avatar">
                            <img src="{{ asset('/img/avatar/feedback-3.jpg') }}" alt="">
                        </div>
                        <div class="feedback__area-item-bottom-title">
                            <h5>steve rhodes</h5>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feedback Area End -->
<!-- Footer Area Start -->
<div class="footer__area pt-60 pb-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div class="footer__area-widget t-center">
                    <div class="footer__area-widget-about m-0">
                        <div class="footer__area-widget-about-social three">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
                                <li><a href="#"><i class="fal fa-basketball-ball"></i></a> </li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a> </li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a> </li>
                            </ul>
                        </div>
                        <div class="footer__area-widget-about-menu three">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog-standard.html">News</a></li>
                                <li><a href="portfolio-1.html">Portfolio</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End -->
<!-- Copyright Area Start -->
<div class="copyright__area">
    <div class="container">
        <div class="row align-items-center copyright__area-border">
            <div class="col-xl-12">
                <div class="copyright__area-left t-center">
                    <p>Copyright © 2022<a href="index-2.html"> ThemeOri</a> Website by Metier </p>
                </div>
            </div>
        </div>
    </div>
</div>	
<!-- Copyright Area End -->
<!-- Scroll Btn Start -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
</div>
<!-- Scroll Btn End -->
@endsection