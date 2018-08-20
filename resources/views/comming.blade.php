@extends('layouts.HomePage')

@section('header')

@endsection

@section('content')


    <!-- start countdown section -->
    <section class="no-padding full-screen cover-background" style="background: url('Pic/1.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="position-relative full-screen">
                        <div class="slider-typography text-center xs-overflow-auto">
                            <div class="slider-text-middle-main padding-ten-tb">
                                <div class="slider-text-middle bg-black-opacity xs-padding-15px-all">
                                    <div class="margin-eight-bottom xs-margin-30-bottom"><img src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="" /></div>
                                    <h6 class="font-weight-300 text-white margin-30px-bottom text-decoration-line-through-deep-pink width-45 center-col sm-width-60 xs-width-100">something awesome is in the works</h6>
                                    <div data-enddate="2018/8/25 12:30:00" class="countdown text-center text-white counter-box-5"></div>
                                    <div class="col-md-12 text-center social-icon-style-10 margin-six-top xs-margin-30px-top xs-no-padding">
                                        <ul class="large-icon no-margin-bottom">
                                            <li><a class="facebook text-white" href="http://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                            <li><a class="twitter text-white" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                            <li><a class="google text-white" href="http://google.com/" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                                            <li><a class="dribbble text-white" href="http://google.com/" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                                            <li><a class="linkedin text-white" href="http://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-11 col-xs-12 center-col text-center margin-six-bottom xs-margin-30px-bottom">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">About Digital Agency</div>
                    <h6 class="font-weight-300 text-extra-dark-gray no-margin">We always stay with our <strong class="font-weight-400">clients and respect</strong> their business. We deliver 100% and provide instant response to help them succeed in constantly changing and <strong class="font-weight-400">challenging business</strong> world.</h6>
                </div>
            </div>
            <div class="row">
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp">
                    <div class="feature-box">
                        <div class="content">
                            <i class="icon-browser text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">Live Website Builder</div>
                            <p class="width-85 margin-lr-auto sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp">
                    <div class="feature-box">
                        <div class="content">
                            <i class="icon-book-open text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">Live Content Creator</div>
                            <p class="width-85 margin-lr-auto sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-five-bottom last-paragraph-no-margin wow fadeInUp">
                    <div class="feature-box">
                        <div class="content">
                            <i class="icon-wallet text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">Create Unique Demos</div>
                            <p class="width-85 margin-lr-auto sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end about agency section -->
    <!-- start parallax with feature box section -->
    <section class="parallax one-second-screen parallax-feature-box sm-height-auto" data-stellar-background-ratio="0.3" style="background-image:url('images/homepage-9-parallax-img2.jpg');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-8 text-center center-col sm-margin-60px-bottom xs-margin-40px-bottom">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                        <img src="images/icon-play.png" class="width-130px" alt=""/></a>
                    <h4 class="alt-font text-white">We are delivering beautiful digital products for you</h4>
                </div>
            </div>
            <div class="row">
                <div class="parallax-feature-box-bottom z-index-5 wow fadeInUp">
                    <!-- start features box item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-four-bottom xs-margin-eight-bottom wow fadeInUp">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all position-relative xs-padding-five-all">
                            <i class="icon-desktop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom font-weight-600">Unique Design</div>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 sm-margin-four-bottom xs-margin-eight-bottom wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all position-relative xs-padding-five-all">
                            <i class="icon-tools icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom font-weight-600">Different Layout</div>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 xs-margin-eight-bottom wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all position-relative xs-padding-five-all">
                            <i class="icon-target icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom font-weight-600">Portfolio Styles</div>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start features box item -->
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="bg-white box-shadow-light text-center padding-twelve-all position-relative xs-padding-five-all">
                            <i class="icon-laptop icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top sm-margin-15px-bottom"></i>
                            <div class="alt-font text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom font-weight-600">WordPress Theme</div>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.</p>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </div>
    </section>
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-11 col-xs-12 center-col text-center margin-six-bottom xs-margin-30px-bottom">

                </div>
            </div>

        </div>
    </section>
@endsection


@section('footer')
    <!-- start footer -->
    <footer class="footer-standard-dark bg-extra-dark-gray">
        <div class="footer-widget-area padding-five-tb xs-padding-30px-tb">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray sm-no-border-right sm-margin-30px-bottom xs-text-center">
                        <!-- start logo -->
                        <a href="index-2.html" class="margin-20px-bottom display-inline-block"><img class="footer-logo" src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo"></a>
                        <!-- end logo -->
                        <p class="text-small width-95 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <!-- start social media -->
                        <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                            <ul class="small-icon no-margin-bottom">
                                <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter text-white" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="google text-white" href="https://plus.google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="instagram text-white" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!-- end social media -->
                    </div>
                    <!-- start additional links -->
                    <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-no-border-right sm-margin-30px-bottom xs-text-center">
                        <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Additional Links</div>
                        <ul class="list-unstyled">
                            <li><a class="text-small" href="index-2.html">Home Classic Corporate</a></li>
                            <li><a class="text-small" href="home-creative-business.html">Home Creative Business</a></li>
                            <li><a class="text-small" href="home-creative-designer.html">Home Creative Designer</a></li>
                            <li><a class="text-small" href="home-portfolio-minimal.html">Home Portfolio Minimal</a></li>
                            <li><a class="text-small" href="home-portfolio-parallax.html">Home Portfolio  parallax</a></li>
                            <li><a class="text-small" href="home-portfolio-personal.html">Home Portfolio Personal</a></li>
                        </ul>
                    </div>
                    <!-- end additional links -->
                    <!-- start contact information -->
                    <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-clear-both sm-no-border-right  xs-margin-30px-bottom xs-text-center">
                        <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Contact Info</div>
                        <p class="text-small display-block margin-15px-bottom width-80 xs-center-col">POFO Design Agency<br> 301 The Greenhouse, Custard Factory, London, E2 8DY.</p>
                        <div class="text-small">Email: <a href="mailto:sales@domain.com">sales@domain.com</a></div>
                        <div class="text-small">Phone: +44 (0) 123 456 7890</div>
                        <a href="contact-us-modern.html" class="text-small text-uppercase text-decoration-underline">View Direction</a>
                    </div>
                    <!-- end contact information -->
                    <!-- start instagram -->
                    <div class="col-md-3 col-sm-6 col-xs-12 widget padding-45px-left sm-padding-15px-left xs-text-center">
                        <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Instagram portfolio</div>
                        <div class="instagram-follow-api">
                            <ul id="instaFeed-footer"></ul>
                        </div>
                    </div>
                    <!-- end instagram -->
                </div>
            </div>
        </div>

        <div class="bg-dark-footer padding-50px-tb text-center xs-padding-30px-tb">
            <div class="container">
                <div class="row">
                    <!-- start copyright -->
                    <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">&copy; 2017 POFO is Proudly Powered by <a href="http://www.themezaa.com/" target="_blank" class="text-dark-gray">ThemeZaa</a></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">
                        <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
@endsection