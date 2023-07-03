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
	
	<!-- Services Details Area Start -->
    <div class="services__details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="services__details-left">
                        <div class="services__details-left-content mb-40">
                            <h2 class="mb-30">Design Research</h2>
                            <p>Research for your next design project is done by a team of industry experts. We help with research, data analysis, and visualization. Our expertise covers many different fields including UX Design, Brand Strategy, Content Writing, User Experience Design and more.</p>
                        </div>
                        <div class="services__details-left-image mb-60">
                            <img src="{{ asset('/img/services_details-1.jpg') }}" alt="">
                            <div class="row mt-30">
                                <div class="col-sm-6 sm-mb-30">
                                    <img class="img__full" src="{{ asset('/img/services_details-2.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-6">
                                    <img class="img__full" src="{{ asset('/img/services_details-3.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="services__details-left-feedback">
                            <div class="row">
                                <div class="col-xl-6 xl-mb-30">
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
                                <div class="col-xl-6 lg-mb-30">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="all__sidebar ml-25 xl-ml-0">
                        <div class="all__sidebar-item services">
                            <h4>Our Services</h4>
                            <div class="all__sidebar-item-category">
                                <ul>                                    
                                    <li><a href="services-details.html"><i class="far fa-angle-double-right"></i>Design Research<span>(08)</span></a></li>
                                    <li><a href="services-details.html"><i class="far fa-angle-double-right"></i>Development<span>(06)</span></a></li>
                                    <li><a href="services-details.html"><i class="far fa-angle-double-right"></i>Digital Marketing<span>(05)</span></a></li>
                                    <li><a href="services-details.html"><i class="far fa-angle-double-right"></i>Branding<span>(09)</span></a></li>
                                    <li><a href="services-details.html"><i class="far fa-angle-double-right"></i>Market Research<span>(03)</span></a></li>
                                    <li><a href="services-details.html"><i class="far fa-angle-double-right"></i>SEO marketing<span>(02)</span></a></li>
                                </ul>
                            </div>
                        </div>
						<div class="all__sidebar-item-help" data-background="{{ asset('/img/details-3.jpg') }}">
							<h4>Need Any Help?</h4>
							<div class="all__sidebar-item-help-contact">
								<div class="all__sidebar-item-help-contact-icon">
									<i class="fal fa-phone-alt"></i>
								</div>
								<div class="all__sidebar-item-help-contact-content">
									<span>Quick Help</span>
									<h6><a href="tel:+123(458)896895">+123 ( 458 ) 896 895</a></h6>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Services Details Area End -->
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