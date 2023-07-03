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

<!-- Contact Area Start -->
<div class="contact__area section-padding">
    <div class="container">
        <div class="row mb-60">
            <div class="col-xl-5 col-lg-6">
                <div class="contact__area-title">
                    <span class="subtitle">Contact Us</span>
                    <h2>Need Yor any help Contact with Us</h2> 
                </div>
                <div class="contact__area-info">
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="far fa-phone-alt"></i>
                            <span>Phone :</span>
                        </div>
                        <div class="contact__area-info-item-content">
                            <a href="tel:+123(458)896895">+123 ( 458 ) 896 895</a>
                        </div>
                    </div>
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fal fa-envelope"></i>
                            <span>Email :</span>
                        </div>
                        <div class="contact__area-info-item-content">
                            <a href="mailto:support@gamil.com">support@gamil.com</a>
                        </div>
                    </div>
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="far fa-map-marker-alt"></i>
                            <span>Location :</span>
                        </div>
                        <div class="contact__area-info-item-content">
                            <a href="#">66W3+Q4G Buxton, UK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__area-bottom">
                    <div class="contact__area-bottom-form page">
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-12 mb-25">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="text" name="name" placeholder="Your Name" required="required"> </div>
                                </div>
                                <div class="col-sm-12 mb-25">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="text" name="email" placeholder="Email Address" required="required"> </div>
                                </div>
                                <div class="col-sm-12 mb-25">
                                    <div class="contact__area-bottom-form-item">
                                        <input type="text" name="subject" placeholder="Subject" required="required"> </div>
                                </div>
                                <div class="col-sm-12 mb-30">
                                    <div class="contact__area-bottom-form-item">
                                        <textarea name="message" rows="5" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mb-45">
                                    <div class="contact__area-bottom-form-item">
                                        <label>
                                            <input class="mr-10" type="checkbox">I agree with services tarms and condition</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contact__area-bottom-form-item">
                                        <button class="theme-btn-1" type="submit">Submit Now<i class="far fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="contact__area-bottom-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894606!2d-74.11976383964463!3d40.69766374865767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1652012644726!5m2!1sen!2sbd" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->
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