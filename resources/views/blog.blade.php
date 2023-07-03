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

<!-- Blog Standard Start -->
<div class="blog__standard section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 lg-mb-30">
                <div class="blog__standard-item">                        
                    <div class="blog__standard-item-image">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog-4.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog__standard-item-meta">
                        <ul>
                            <li><a href="#"><i class="far fa-calendar-alt"></i>09 June, 2022</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comment</a></li>
                        </ul>
                    </div>
                    <div class="blog__standard-item-content">
                        <h3><a href="blog-details.html">20 Beautiful Portfolios For Designers & Artists</a></h3>
                        <p>Pellentesque a placerat orci. Suspendisse rutrum lacus ipsum, eu vulputate augue blandit mollis. Integer vitae mi urna. Nam ultricies velit non tristique varius. Suspendisse sit amet molestie tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a class="simple-btn mt-35" href="blog-details.html">Discover More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog__standard-item">                        
                    <div class="blog__standard-item-image">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog-5.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog__standard-item-meta">
                        <ul>
                            <li><a href="#"><i class="far fa-calendar-alt"></i>07 June, 2022</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>3 Comment</a></li>
                        </ul>
                    </div>
                    <div class="blog__standard-item-content">
                        <h3><a href="blog-details.html">20 Beautiful Portfolios For Designers & Artists</a></h3>
                        <p>Pellentesque a placerat orci. Suspendisse rutrum lacus ipsum, eu vulputate augue blandit mollis. Integer vitae mi urna. Nam ultricies velit non tristique varius. Suspendisse sit amet molestie tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a class="simple-btn mt-35" href="blog-details.html">Discover More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog__standard-item">                        
                    <div class="blog__standard-item-image">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog-6.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog__standard-item-meta">
                        <ul>
                            <li><a href="#"><i class="far fa-calendar-alt"></i>04 June, 2022</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>5 Comment</a></li>
                        </ul>
                    </div>
                    <div class="blog__standard-item-content">
                        <h3><a href="blog-details.html">20 Beautiful Portfolios For Designers & Artists</a></h3>
                        <p>Pellentesque a placerat orci. Suspendisse rutrum lacus ipsum, eu vulputate augue blandit mollis. Integer vitae mi urna. Nam ultricies velit non tristique varius. Suspendisse sit amet molestie tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a class="simple-btn mt-35" href="blog-details.html">Discover More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog__standard-item">                        
                    <div class="blog__standard-item-image">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog-7.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog__standard-item-meta">
                        <ul>
                            <li><a href="#"><i class="far fa-calendar-alt"></i>02 June, 2022</a></li>
                            <li><a href="#"><i class="far fa-comments"></i>2 Comment</a></li>
                        </ul>
                    </div>
                    <div class="blog__standard-item-content">
                        <h3><a href="blog-details.html">20 Beautiful Portfolios For Designers & Artists</a></h3>
                        <p>Pellentesque a placerat orci. Suspendisse rutrum lacus ipsum, eu vulputate augue blandit mollis. Integer vitae mi urna. Nam ultricies velit non tristique varius. Suspendisse sit amet molestie tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <a class="simple-btn mt-35" href="blog-details.html">Discover More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="pagination mt-50">
                    <ul>
                        <li><a class="active" href="#">01</a>
                        </li>
                        <li><a href="#">02</a>
                        </li>
                        <li><a href="#">03</a>
                        </li>
                        <li><a href="#"><i class="far fa-ellipsis-h"></i></a>
                        </li>
                        <li><a href="#">08</a>
                        </li>
                    </ul>
                </div>
            </div>                
            <div class="col-xl-4 col-lg-4">
                <div class="all__sidebar ml-25 xl-ml-0">
                    <div class="all__sidebar-item">
                        <h4>Search Here</h4>
                        <div class="all__sidebar-item-search">
                            <form action="#">
                                <input type="text" placeholder="Search.....">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="all__sidebar-item">
                        <h4>Top Category</h4>
                        <div class="all__sidebar-item-category">
                            <ul>                                    
                                <li><a href="blog-standard.html"><i class="far fa-angle-double-right"></i>Design Research<span>(08)</span></a></li>
                                <li><a href="blog-standard.html"><i class="far fa-angle-double-right"></i>Development<span>(06)</span></a></li>
                                <li><a href="blog-standard.html"><i class="far fa-angle-double-right"></i>Digital Marketing<span>(05)</span></a></li>
                                <li><a href="blog-standard.html"><i class="far fa-angle-double-right"></i>Branding<span>(09)</span></a></li>
                                <li><a href="blog-standard.html"><i class="far fa-angle-double-right"></i>Market Research<span>(03)</span></a></li>
                                <li><a href="blog-standard.html"><i class="far fa-angle-double-right"></i>SEO marketing<span>(02)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="all__sidebar-item">
                        <h4>Recent Post</h4>
                        <div class="all__sidebar-item-post">
                            <div class="all__sidebar-item-post-item">
                                <div class="all__sidebar-item-post-item-image">
                                    <a href="blog-details.html"><img src="{{ asset('/img/post-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="all__sidebar-item-post-item-content">
                                    <span><i class="fal fa-calendar-alt"></i>05 June, 2022</span>
                                    <h5><a href="blog-details.html">Sample Brochure Design</a></h5>
                                </div>
                            </div>
                            <div class="all__sidebar-item-post-item">
                                <div class="all__sidebar-item-post-item-image">
                                    <a href="blog-details.html"><img src="{{ asset('/img/post-2.jpg') }}" alt=""></a>
                                </div>
                                <div class="all__sidebar-item-post-item-content">
                                    <span><i class="fal fa-calendar-alt"></i>02 June, 2022</span>
                                    <h5><a href="blog-details.html">Sample Brochure Design</a></h5>
                                </div>
                            </div>
                            <div class="all__sidebar-item-post-item">
                                <div class="all__sidebar-item-post-item-image">
                                    <a href="blog-details.html"><img src="{{ asset('/img/post-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="all__sidebar-item-post-item-content">
                                    <span><i class="fal fa-calendar-alt"></i>04 June, 2022</span>
                                    <h5><a href="blog-details.html">Sample Brochure Design</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="all__sidebar-item">
                        <h4>Tag</h4>
                        <div class="all__sidebar-item-tag">
                            <ul>
                                <li><a href="blog-standard.html">Design</a></li>
                                <li><a href="blog-standard.html">Brochure</a></li>
                                <li><a href="blog-standard.html">Product</a></li>
                                <li><a href="blog-standard.html">Business</a></li>
                                <li><a href="blog-standard.html">Developemnt</a></li>
                                <li><a href="blog-standard.html">Design</a></li>
                                <li><a href="blog-standard.html">Marketing</a></li>
                                <li><a href="blog-standard.html">Branding</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Standard End -->
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