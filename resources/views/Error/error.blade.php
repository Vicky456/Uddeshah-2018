@extends('layouts.errorPage')

@section('content')

    <!-- start page not found section -->
    <section id="home" class="no-padding parallax mobile-height wow fadeIn" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg31.jpg');">
        <div class="opacity-full bg-extra-dark-gray"></div>
        <div class="container position-relative full-screen">
            <div class="slider-typography text-center">
                <div class="slider-text-middle-main">
                    <div class="slider-text-middle">
                        <div class="bg-black-opacity-light width-50 center-col sm-width-80">
                            <div class="padding-fifteen-all xs-padding-20px-all">
                                <span class="title-extra-large text-white font-weight-600 display-block margin-30px-bottom xs-margin-10px-bottom">404!</span>
                                <h6 class="text-uppercase text-deep-pink font-weight-600 alt-font display-block margin-5px-bottom">Page Not Found</h6>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page not found section -->

@endsection
