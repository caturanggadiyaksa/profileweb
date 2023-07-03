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

<!-- About Area Start -->
<div class="about__page section-padding pb-100">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-6 col-lg-8">
                <div class="about__page-title">
                    <span class="subtitle">About Us</span>
                    <h2>Best Portfolio Management Software</h2>
                </div>
            </div>
        </div>
        <div class="row mb-100">
            <div class="col-xl-12">
                <div class="about__page-area">
                    <div class="about__page-area-experience">
                        <h3><span class="counter">16</span>+</h3>
                        <p>Years Experience In Our Company</p>
                    </div>
                    <img src="{{ asset('/img/about.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 lg-mb-30">
                <div class="about__page-area-item">
                    <h2><span class="counter">520</span>K</h2>
                    <p>project complete at last 5 years</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 sm-mb-30">
                <div class="about__page-area-item">
                    <h2><span class="counter">95</span>%</h2>
                    <p>Clients Happy with metier</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 sm-mb-30">
                <div class="about__page-area-item">
                    <h2><span class="counter">987</span>+</h2>
                    <p>Clients Active With Metier</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="about__page-area-item">
                    <h2><span class="counter">50</span>%</h2>
                    <p>project complete at last 5 years</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->
<!-- Team Area Start -->
<div class="team__area">
    <div class="container">
        <div class="row mb-60 team__area-border">
            <div class="col-xl-12">
                <div class="team__area-title lg-t-center">
                    <span class="subtitle">Team</span>
                    <h2>Experience</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 xl-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('/img/team/team-1.jpg') }}" alt="">
                        <div class="team__area-item-image-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                                <li><a href="#"><i class="fal fa-basketball-ball"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__area-item-content">
                        <h5>david beckham</h5>
                        <span>UI Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('/img/team/team-2.jpg') }}" alt="">
                        <div class="team__area-item-image-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                                <li><a href="#"><i class="fal fa-basketball-ball"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__area-item-content">
                        <h5>michel aoun</h5>
                        <span>CEO & Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 md-mb-30">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('/img/team/team-3.jpg') }}" alt="">
                        <div class="team__area-item-image-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                                <li><a href="#"><i class="fal fa-basketball-ball"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__area-item-content">
                        <h5>steve rhodes</h5>
                        <span>Project Manager</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="team__area-item">
                    <div class="team__area-item-image">
                        <img src="{{ asset('/img/team/team-4.jpg') }}" alt="">
                        <div class="team__area-item-image-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                                <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                                <li><a href="#"><i class="fal fa-basketball-ball"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team__area-item-content">
                        <h5>cansu tuman</h5>
                        <span>Senior Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Area End -->
<!-- Client Area Start -->
<div class="client__area">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-12">
                <div class="client__area-title">
                    <span class="subtitle-one">Global Clients</span>
                    <h2>We have more than 599+ global clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-1.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-2.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 lg-mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-3.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-4.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 lg-mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-5.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-6.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 sm-mb-30">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-7.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="client__area-item">
                    <img src="{{ asset('/img/brand/brand-8.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Area End -->
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
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Scroll Btn End -->
@endsection