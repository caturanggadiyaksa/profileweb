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

<!-- Portfolio Details Start -->
<div class="portfolio__details-two section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 lg-mb-30">
                <div class="portfolio__details-two-left">
                    <div class="portfolio__details-two-left-content">
                        <h2 class="mb-30">Design and Development</h2>
                        <p class="mb-20">Maecenas tincidunt hendrerit odio sed consectetur. Duis porta purus sapien, eget pretium augue consectetur ut. Nunc nibh augue, pretium quis imperdiet pellentesque, molestie eget nisi. Sed rutrum sit amet eros ac egestas.</p>
                        <p>Maecenas tincidunt dolor in massa iaculis, vitae dignissim sem finibus. Pellentesque elementum vel arcu sit amet rhoncus. Nulla at eleifend lorem. Praesent et ex sed metus</p>                            
                    </div>                        
                    <div class="all__sidebar">
                        <div class="all__sidebar-item details one">
                            <h4>Portfolio Details</h4>
                            <div class="all__sidebar-item-details">
                                <div class="all__sidebar-item-details-list">
                                    <h6>Client :</h6>
                                    <span>ThemeOri agency</span>
                                </div>
                                <div class="all__sidebar-item-details-list">
                                    <h6>Category :</h6>
                                    <span>Brochure Design</span>
                                </div>
                                <div class="all__sidebar-item-details-list">
                                    <h6>Date :</h6>
                                    <span>27 March, 2022</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="row mb-30">
                    <div class="col-sm-6 sm-mb-30">
                        <img class="img__full" src="{{ asset('/img/portfolio/portfolio-22.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img class="img__full" src="{{ asset('/img/portfolio/portfolio-8.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 sm-mb-30">
                        <img class="img__full" src="{{ asset('/img/portfolio/portfolio-23.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img class="img__full" src="{{ asset('/img/portfolio/portfolio-12.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Details End -->
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