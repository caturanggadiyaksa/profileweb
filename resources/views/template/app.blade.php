
<!DOCTYPE html>
<html lang="en">



<head>
	<!-- Start Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Metier  - Portfolio HTML5 Template"/>
	<meta name="keywords" content="Creative, Digital, multipage, landing, freelancer template"/>
	<meta name="author" content="ThemeOri">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title of Site -->
	<title>Metier  - Portfolio HTML5 Template</title>
	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('/img/favicon-1.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset('/css/all.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
	<!-- Swiper -->
	<link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css') }}">
	<!-- Magnific -->
	<link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
	<!-- Mean menu -->
	<link rel="stylesheet" href="{{ asset('/css/meanmenu.min.css') }}">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('/sass/style.css') }}"> 
</head>

<body class="custom__cursor">

	<header>
				
		<!-- Header Area Start -->
		<div class="header__area">
			<div class="container custom-container">
				<div class="header__area-box">
					<div class="header__area-box-logo">
						<a href="index-2.html"> <img src="{{ asset('/img/logo-1.png') }}" alt=""> </a>
						<div class="responsive-menu"></div>
					</div>
					<div class="header__area-box-main-menu one meanmenu-responsive">
						<ul id="mobilemenu">
							<li class="menu-item-has-children"><a href="/">Home</a>
								
							</li>
							<li class="menu-item-has-children"><a href="">Page</a>
								@php
									$navigations = \App\Models\Navigation::whereIn('order', [2, 3, 4])->get();
								@endphp


    


								<ul class="sub-menu">
									@foreach($navigations as $navigation)
										<li><a href="{{ $navigation->url }}">{{ $navigation->title }}</a></li>
									@endforeach
									
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="">Portfolio</a>

								@php
									$navigations = \App\Models\Navigation::whereIn('order', [5, 6])->get();
								@endphp
								<ul class="sub-menu">
									@foreach($navigations as $navigation)
										<li><a href="{{ $navigation->url }}">{{ $navigation->title }}</a></li>
									@endforeach

									
									
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="">News</a>
								@php
									$navigations = \App\Models\Navigation::whereIn('order', [7, 8])->get();
								@endphp
								<ul class="sub-menu">
									@foreach($navigations as $navigation)
										<li><a href="{{ $navigation->url }}">{{ $navigation->title }}</a></li>
									@endforeach
									
								</ul>
							</li>

							@php
								$navigations = \App\Models\Navigation::whereIn('order', [9])->get();
							@endphp
							@foreach($navigations as $navigation)
								<li><a href="{{ $navigation->url }}">{{ $navigation->title }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="header__area-box-sidebar">
						<div class="header__area-box-sidebar-popup-icon"> <a href="#"><i class="fal fa-bars"></i></a> </div>
					</div>
					<!-- sidebar Menu Start -->
					<div class="header__area-box-sidebar-popup">
						<div class="sidebar-close-btn one"> <i class="fal fa-times"></i> </div>
						<div class="header__area-box-sidebar-popup-logo">
							<a href="index-2.html"> <img src="{{ asset('/img/logo-1.png') }}" alt=""> </a>
						</div>
						<p>Aliquam nibh tortor, faucibus quis ligula eget, faucibus auctor sapien. Fusce vulputate magna in
							magna pellentesque in mauris dignissim, imperdiet risus ac, congue nunc.</p>
						<div class="header__area-box-sidebar-popup-contact">
							<h4 class="mb-25">Contact Us</h4>
							<form action="#">
								<div class="row">
									<div class="col-sm-12 mb-30">
										<div class="header__area-box-sidebar-popup-contact-form-item"> <i
												class="far fa-user"></i>
											<input type="text" name="name" placeholder="Your Name" required="required">
										</div>
									</div>
									<div class="col-sm-12 mb-30">
										<div class="header__area-box-sidebar-popup-contact-form-item"> <i
												class="far fa-envelope-open"></i>
											<input type="text" name="email" placeholder="Email Address" required="required">
										</div>
									</div>
									<div class="col-sm-12 mb-30">
										<div class="header__area-box-sidebar-popup-contact-form-item"> <i
												class="fal fa-pen"></i>
											<textarea name="message" rows="5" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="header__area-box-sidebar-popup-contact-form-item">
											<button class="theme-btn" type="submit">Submit Now<i
													class="fal fa-long-arrow-right"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="header__area-box-sidebar-popup-follow-us">
							<h4 class="mb-25">Follow Us</h4>
							<div class="header__area-box-sidebar-popup-follow-us-social">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
									<li><a href="#"><i class="fab fa-twitter"></i></a> </li>
									<li><a href="#"><i class="fab fa-instagram"></i></a> </li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="sidebar-overlay"></div>
					<!-- sidebar Menu Start -->
				</div>
			</div>
		</div>
		<!-- Header Area End -->
	</header>

	<main>
		@yield('content')
	</main>




<!-- Main JS -->
<script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- Counter up -->
<script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('/js/popper.min.js') }}"></script>
<!-- Progressbar JS -->
<script src="{{ asset('/js/progressbar.min.js') }}"></script>
<!-- Magnific JS -->
<script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('/js/swiper-bundle.min.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
<!-- Isotope JS -->
<script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
<!-- Mean menu -->
<script src="{{ asset('/js/jquery.meanmenu.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('/js/custom.js') }}"></script>
</body>


</html>


