
<!-- Header Area Start -->
{{-- <div class="header__area all-page">
    <div class="container custom-container">
        <div class="header__area-box">
            <div class="header__area-box-logo two">
                <a href="index-2.html"> <img src="{{ asset('/img/logo-2.png') }}" alt=""> </a>
                <div class="responsive-menu"></div>
            </div>
            <div class="header__area-box-main-menu meanmenu-responsive">
                <ul id="mobilemenu">
                    <li class="menu-item-has-children"><a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html">Home 01</a> </li>
                            <li><a href="index-3.html">Home 02</a> </li>
                            <li><a href="index-4.html">Home 03</a> </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Page</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a> </li>
                            <li><a href="services.html">Services</a> </li>
                            <li><a href="services-details.html">Services Details</a> </li>
                            <li><a href="error.html">Error</a> </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Portfolio</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio-1.html">Portfolio 01</a> </li>
                            <li><a href="portfolio-2.html">Portfolio 02</a> </li>
                            <li><a href="portfolio-3.html">Portfolio 03</a> </li>
                            <li><a href="portfolio-details.html">Portfolio Details 01</a> </li>
                            <li><a href="portfolio-details-2.html">Portfolio Details 02</a> </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">News</a>
                        <ul class="sub-menu">
                            <li><a href="blog-standard.html">News</a> </li>
                            <li><a href="blog-details.html">News Details</a> </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a> </li>
                </ul>
            </div>
            <div class="header__area-box-sidebar">
                <div class="header__area-box-sidebar-popup-icon"> <a href="#"><i class="fal fa-bars"></i></a> </div>
            </div>
            <!-- sidebar Menu Start -->
            <div class="header__area-box-sidebar-popup">
                <div class="sidebar-close-btn"> <a href="#"><i class="fal fa-times"></i></a> </div>
                <div class="header__area-box-sidebar-popup-logo">
                    <a href="index-2.html"> <img src="{{ asset('/img/logo-2.png') }}" alt=""> </a>
                </div>
                <p>Aliquam nibh tortor, faucibus quis ligula eget, faucibus auctor sapien. Fusce vulputate magna in
                    magna pellentesque in mauris dignissim, imperdiet risus ac, congue nunc.</p>
                <div class="header__area-box-sidebar-popup-contact">
                    <h4 class="mb-25">Contact Us</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-12 mb-30">
                                <div class="header__area-box-sidebar-popup-contact-form-item two"> <i
                                        class="far fa-user"></i>
                                    <input type="text" name="name" placeholder="Your Name" required="required">
                                </div>
                            </div>
                            <div class="col-sm-12 mb-30">
                                <div class="header__area-box-sidebar-popup-contact-form-item two"> <i
                                        class="far fa-envelope-open"></i>
                                    <input type="text" name="email" placeholder="Email Address" required="required">
                                </div>
                            </div>
                            <div class="col-sm-12 mb-30">
                                <div class="header__area-box-sidebar-popup-contact-form-item two"> <i
                                        class="fal fa-pen"></i>
                                    <textarea name="message" rows="5" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="header__area-box-sidebar-popup-contact-form-item">
                                    <button class="theme-btn-1" type="submit">Submit Now<i
                                            class="fal fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="header__area-box-sidebar-popup-follow-us">
                    <h4 class="mb-25">Follow Us</h4>
                    <div class="header__area-box-sidebar-popup-follow-us-social two">
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
</div> --}}
<!-- Header Area End -->


			
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




