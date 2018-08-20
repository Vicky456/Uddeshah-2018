

<!-- start magic box section -->
<section class="parallax wow fadeIn" data-stellar-background-ratio="0.2" style="background-image: url(images/pofo-magic-box-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12 text-center center-col margin-70px-bottom  sm-margin-40px-bottom xs-margin-30px-bottom">
                <span class="text-extra-large display-block alt-font text-extra-dark-gray margin-10px-bottom font-weight-600">What is in the magic box?</span>
                <p class="width-75 sm-width-90 xs-width-100 center-col">I am sure you will be surprised with tons of ready demos and elements included in the Pofo template.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid padding-seven-lr">
        <div class="feature-box feature-box-7 equalize xs-equalize-auto">

        <?php
        use Illuminate\Support\Facades\DB;$data = DB::connection('mysql')->select('SELECT * FROM `event_catlog`');
        ?>
            @foreach($data as $a)
            <!-- start feature item -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-15px-tb wow fadeInRight last-paragraph-no-margin">
                <div class="box border-none bg-white box-shadow-large">
                    <div class="content">
                        <figure>
                            <h6 class="text-deep-pink font-weight-300 margin-5px-bottom">{{$a->count}}</h6>
                            <span class="alt-font text-extra-dark-gray display-block margin-5px-bottom">{{$a->event_name}}</span>
                            <div class="details">
                                <p class="width-80 center-col">{{$a->event_desc}}</p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- end feature item -->
            @endforeach

        </div>
    </div>
</section>
<!-- end magic box section -->