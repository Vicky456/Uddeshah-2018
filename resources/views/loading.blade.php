@extends('layouts.HomePage')

@section('header')

@endsection

@section('content')
    <!-- start slider section -->
    <section class="no-padding  full-screen">
        <div class="swiper-container swiper-vertical-pagination swiper-container-vertical no-transition">
            <div class="swiper-wrapper">

                <?php

                for($i=1;$i<6;$i++){
                    ?>
                <div id="secl<?php echo $i;?>" class="swiper-slide parallax cover-background" style="background-image: url('Pic/<?php echo $i;?>.png');">
                    <div class="full-screen width-100 position-relative">
                        <div class="slider-typography text-left">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-bottom padding-100px-lr xs-padding-30px-lr">
                                    <div style="background-color: #ff214f99;" class="swiper-bottom-content bg-deep-pink width-500px padding-80px-all margin-50px-left sm-no-margin-left xs-width-90 xs-padding-20px-all">
                                        <h4 class="xs-margin-5px-bottom"><a href="/" class="font-weight-600 text-white alt-font text-white-hover">Lisa's Schweizer Branding</a></h4>


                                        <div class="clear-both"></div>
                                        <a href="/" class="btn btn-black btn-very-small margin-70px-bottom xs-no-margin-bottom">Launch Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>


                    <div class="swiper-slide cover-background swiper-slide-active" style="background-image: url('Pic/<?php echo $i;?>.png');">
                        <div class="full-screen width-100 position-relative" style="min-height: 765px;">
                            <div class="slider-typography text-left">
                                <div class="slider-text-middle-main">
                                    <div class="slider-text-bottom padding-100px-lr xs-padding-30px-lr">
                                        <div class="swiper-bottom-content bg-deep-pink width-500px padding-80px-all margin-50px-left sm-no-margin-left xs-width-90 xs-padding-20px-all" style="background-color: #ff214f80;">
                                            <h4 class="xs-margin-5px-bottom"><a href="/" class="font-weight-600 text-white alt-font text-white-hover">Lisa's Schweizer Branding</a></h4>

                                            <div class="box-arrow" style="background-color: white;width: 236px;"><a href="/" style="color: black"><img src="images/homepage-option19-arrow-bg.jpg" alt="" data-no-retina="">Launch Page</a></div>
                                            <div class="clear-both"></div>
                                            <a href="/" class="btn btn-black btn-very-small margin-70px-bottom xs-no-margin-bottom" style="opacity: 0;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- start slide item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-vertical swiper-pagination-white"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end slider section -->


@endsection


@section('footer')

@endsection