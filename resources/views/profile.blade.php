@extends('template.app')

@section('content')

<div class="custom__cursor-one main"></div>
<div class="custom__cursor-two main"></div>
<!-- Preloader start -->
<div class="theme-loader">
	<div class="spinner">
		<div class="double-bounce1"></div>
		<div class="double-bounce2"></div>
	</div>
</div>
<!-- Preloader end -->

<!-- Banner Area Start -->
<div class="banner__area" data-background="{{ asset('/img/banner.png') }}">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="banner__area-content">
					<h1>Create your <span>Portfolio</span></h1> <a class="theme-btn" href="portfolio-3.html">All Project
						<i class="fal fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="banner__area-bottom">
		<div class="banner__area-bottom-icon">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-behance"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
</div>
<!-- Banner Area End -->
<!-- Features Area Start -->
<div class="features__area">
	<div class="container-fluid px-0">
		<div class="row gx-0">
			<div class="col-xl-12">
				<div class="swiper features-slider">
					<div class="swiper-wrapper">
						<div class="features__area-item swiper-slide"> <img src="{{ asset('/img/features-1.jpg') }}" alt="">
							<div class="features__area-item-content">
								<div class="features__area-item-content-icon"> <a href="services-details.html"><i
											class="fal fa-plus"></i></a> </div>
								<h3><a href="services-details.html">Product Design</a></h3>
								<p>Design strategy</p>
							</div>
						</div>
						<div class="features__area-item features__area-item-hover swiper-slide"> <img
								src="{{ asset('/img/features-2.jpg') }}" alt="">
							<div class="features__area-item-content">
								<div class="features__area-item-content-icon"> <a href="services-details.html"><i
											class="fal fa-plus"></i></a> </div>
								<h3><a href="services-details.html">Product Design</a></h3>
								<p>Design strategy</p>
							</div>
						</div>
						<div class="features__area-item swiper-slide"> <img src="{{ asset('/img/features-3.jpg') }}" alt="">
							<div class="features__area-item-content">
								<div class="features__area-item-content-icon"> <a href="services-details.html"><i
											class="fal fa-plus"></i></a> </div>
								<h3><a href="services-details.html">Product Design</a></h3>
								<p>Design strategy</p>
							</div>
						</div>
						<div class="features__area-item swiper-slide"> <img src="{{ asset('/img/features-4.jpg') }}" alt="">
							<div class="features__area-item-content">
								<div class="features__area-item-content-icon"> <a href="services-details.html"><i
											class="fal fa-plus"></i></a> </div>
								<h3><a href="services-details.html">Product Design</a></h3>
								<p>Design strategy</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Features Area End -->
<!-- Services Area Start -->
<div class="services__area section-padding" data-background="{{ asset('/img/services.png') }}">
	<div class="container">
		<div class="row mb-60">
			<div class="col-xl-12">
				<div class="services__area-title lg-t-center">
					<span class="subtitle one">Our Services</span>
					<h2>Our Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 mb-30">
				<div class="services__area-item">
					<span>01</span>
					<div class="services__area-item-icon">
						<img src="{{ asset('/img/icon/services-11.png') }}" alt="">
						<div class="services__area-item-icon-one">
							<img src="{{ asset('/img/icon/services-1.png') }}" alt="">
						</div>
					</div>
					<div class="services__area-item-content">
						<h4><a href="services-details.html">Designing</a></h4>
						<p>Praesent vitae augue sem. Phasellus pretium eu ipsum sit amet interdum.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 md-mb-30">
				<div class="services__area-item">
					<span>02</span>
					<div class="services__area-item-icon">
						<img src="{{ asset('/img/icon/services-22.png') }}" alt="">
						<div class="services__area-item-icon-one">
							<img src="{{ asset('/img/icon/services-2.png') }}" alt="">
						</div>
					</div>
					<div class="services__area-item-content">
						<h4><a href="services-details.html">Development</a></h4>
						<p>Praesent vitae augue sem. Phasellus pretium eu ipsum sit amet interdum.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 md-mb-30">
				<div class="services__area-item">
					<span>03</span>
					<div class="services__area-item-icon">
						<img src="{{ asset('/img/icon/services-33.png') }}" alt="">
						<div class="services__area-item-icon-one">
							<img src="{{ asset('/img/icon/services-3.png') }}" alt="">
						</div>
					</div>
					<div class="services__area-item-content">
						<h4><a href="services-details.html">Branding</a></h4>
						<p>Praesent vitae augue sem. Phasellus pretium eu ipsum sit amet interdum.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="services__area-item">
					<span>04</span>
					<div class="services__area-item-icon">
						<img src="{{ asset('/img/icon/services-44.png') }}" alt="">
						<div class="services__area-item-icon-one">
							<img src="{{ asset('/img/icon/services-4.png') }}" alt="">
						</div>
					</div>
					<div class="services__area-item-content">
						<h4><a href="services-details.html">Designing</a></h4>
						<p>Praesent vitae augue sem. Phasellus pretium eu ipsum sit amet interdum.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Services Area End -->
<!-- Video Area Start -->
<div class="video__area" data-background="{{ asset('/img/video.jpg') }}">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="video__area-play-icon video-pulse"> <a class="video-popup"
						href="https://www.youtube.com/watch?v=0WC-tD-njcA"><i class="fas fa-play"></i></a> </div>
			</div>
		</div>
	</div>
</div>
<!-- Video Area End -->
<!-- Work Area Start -->
<div class="work__area section-padding">
	<div class="container">
		<div class="row mb-60">
			<div class="col-xl-12">
				<div class="work__area-title lg-t-center">
					<span class="subtitle one">How IT Work</span>
					<h2>Simple Work Process</h2>
				</div>
			</div>
		</div>
		<div class="row mb-110">
			<div class="col-xl-4 col-lg-4 col-md-6 pr-110 lg-mb-30">
				<div class="work__area-item"> <span>01</span>
					<div class="work__area-item-icon"> <img src="{{ asset('/img/icon/work-1.png') }}" alt=""> </div>
					<div class="work__area-item-content">
						<h4>Concept Creation</h4>
						<p>pellentesque in dolor vel malesuada. Donec finibus libero odio</p>
					</div>
					<div class="work__area-item-shape"> <img src="{{ asset('/img/icon/shape-1.png') }}" alt=""> </div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 pl-55 pr-55 md-mb-30">
				<div class="work__area-item"> <span>02</span>
					<div class="work__area-item-icon"> <img src="{{ asset('/img/icon/work-2.png') }}" alt=""> </div>
					<div class="work__area-item-content">
						<h4>Sketch Drawing</h4>
						<p>pellentesque in dolor vel malesuada. Donec finibus libero odio</p>
					</div>
					<div class="work__area-item-shape"> <img src="{{ asset('/img/icon/shape-2.png') }}" alt=""> </div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 pl-110">
				<div class="work__area-item"> <span>03</span>
					<div class="work__area-item-icon"> <img src="{{ asset('/img/icon/work-3.png') }}" alt=""> </div>
					<div class="work__area-item-content">
						<h4>Final Design</h4>
						<p>pellentesque in dolor vel malesuada. Donec finibus libero odio</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="faq">
					<div class="faq-item">
						<div class="faq-item-card">
							<div class="faq-item-card-header">
								<h5>What are the acceptable formats for the portfolio?</h5> <i
									class="fal fa-angle-up"></i>
							</div>
							<div class="faq-item-card-header-content active">
								<p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis metus
									mattis quis. Curabitur a tincidunt risus, non gravida ipsum. Sed at ligula porta,
									dictum magna id, molestie mi. Mauris et ligula dui. Aliquam erat volutpat. Nam
									pharetra, risus vitae bibendum pellentesque, dui metus convallis felis, non semper
									leo leo nec augue. Maecenas vestibulum ornare iaculis. Integer elit arcu, lobortis
									id felis eu, scelerisque maximus libero.</p>
							</div>
						</div>
					</div>
					<div class="faq-item">
						<div class="faq-item-card">
							<div class="faq-item-card-header">
								<h5>Protect Your Business with Insurance?</h5> <i class="fal fa-angle-down"></i>
							</div>
							<div class="faq-item-card-header-content display-none">
								<p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis metus
									mattis quis. Curabitur a tincidunt risus, non gravida ipsum. Sed at ligula porta,
									dictum magna id, molestie mi. Mauris et ligula dui. Aliquam erat volutpat. Nam
									pharetra, risus vitae bibendum pellentesque, dui metus convallis felis, non semper
									leo leo nec augue. Maecenas vestibulum ornare iaculis. Integer elit arcu, lobortis
									id felis eu, scelerisque maximus libero.</p>
							</div>
						</div>
					</div>
					<div class="faq-item m-0">
						<div class="faq-item-card">
							<div class="faq-item-card-header">
								<h5>Open a Business Bank Account?</h5> <i class="fal fa-angle-down"></i>
							</div>
							<div class="faq-item-card-header-content display-none">
								<p>pellentesque in dolor vel malesuada. Donec finibus libero odio, ac iaculis metus
									mattis quis. Curabitur a tincidunt risus, non gravida ipsum. Sed at ligula porta,
									dictum magna id, molestie mi. Mauris et ligula dui. Aliquam erat volutpat. Nam
									pharetra, risus vitae bibendum pellentesque, dui metus convallis felis, non semper
									leo leo nec augue. Maecenas vestibulum ornare iaculis. Integer elit arcu, lobortis
									id felis eu, scelerisque maximus libero.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Work Area End -->
<!-- Footer Area Start -->
<div class="footer__area section-padding">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-7 col-lg-7">
				<div class="footer__area-widget">
					<div class="footer__area-widget-about lg-t-center">
						<div class="footer__area-widget-about-logo">
							<a href="index-2.html"><img src="{{ asset('/img/logo-1.png') }}" alt=""></a>
						</div>
						<div class="footer__area-widget-about-social">
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
						<div class="footer__area-widget-about-menu">
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
			<div class="col-xl-5 col-lg-5">
				<div class="footer__area-widget">
					<div class="footer__area-widget-subscribe one">
						<h4>Subscribe</h4>
						<form action="#">
							<input type="text" placeholder="Email Address">
							<button type="submit"><i class="fal fa-hand-pointer"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer Area End -->
<!-- Copyright Area Start -->
<div class="copyright__area copyright__area-one">
	<div class="container">
		<div class="row align-items-center copyright__area-border">
			<div class="col-xl-12">
				<div class="copyright__area-left copyright__area-one-left">
					<p>Copyright © 2022<a href="index-2.html"> ThemeOri</a> Website by Metier </p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Copyright Area End -->
<!-- Scroll Btn Start -->
<div class="scroll-up scroll-one">
	<svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
	</svg>
</div>
<!-- Scroll Btn End -->

@endsection