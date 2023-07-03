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

<!-- Portfolio Area Start -->
<div class="portfolio__area-two section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-60">
                <div class="portfolio__area-two-title"> <span class="subtitle-one">Portfolio</span>
                    <h2>Create Portfolio</h2> </div>
                <div class="portfolio__area-two-btn">
                    <ul>
                        <li class="active" data-filter="*">Show All</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".development">Development</li>
                        <li data-filter=".marketing">Marketing</li>
                        <li data-filter=".strategy">Strategy</li>
                        <li data-filter=".branding">Branding</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row portfolio__area-two-active">
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-7.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item marketing mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-8.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item branding design mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-9.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item development marketing mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-10.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item design mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-11.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item development branding strategy mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-12.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item strategy branding lg-mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-13.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item design lg-mb-30">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-14.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 portfolio-item strategy development">
                <div class="portfolio__area-two-item"> <img class="img__full" src="{{ asset('/img/portfolio/portfolio-15.jpg') }}" alt="">
                    <div class="portfolio__area-two-item-content"> <span>Photography</span>
                        <h4><a href="portfolio-details.html">Photography</a></h4> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Area End -->
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