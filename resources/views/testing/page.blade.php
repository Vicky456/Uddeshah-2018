@extends('layouts.events')




@section('content')


    <div class=" mobile-height">

    <?php
    use Illuminate\Support\Facades\DB;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id=1;
    }

    $data = DB::connection('mysql')->select("SELECT * FROM `event_table` where `id`='$id'");



    for($i=0;$i<sizeof($data);$i++){
    ?>

    <!-- start hero with parallax section -->
        <section class="wow fadeIn no-padding parallax xs-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('{{$data[$i]->img}}');">
            <div class="container full-screen position-relative">
                <div class="slider-typography">

                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle md-padding-15px-lr">
                            <div class="col-lg-8 col-sm-10 col-lg-push-4 col-sm-push-1 text-left bg-white-opacity padding-seven-all md-padding-ten-all sm-text-center">
                                <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">{{$data[$i]->event_name}}</div>
                                <div class="separator-line-horrizontal-full width-100 margin-35px-tb sm-margin-25px-tb xs-margin-20px-tb bg-extra-dark-gray"></div>
                                <span class="text-dark-gray text-extra-large font-weight-300 margin-35px-bottom display-block sm-margin-25px-bottom xs-margin-15px-bottom">{{$data[$i]->event_name}}</span>
                                <a href="" target="_blank" class="btn btn-dark-gray btn-medium">Register Now</a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- end hero banner with parallax section -->

        <?php
        }
        ?>

    </div>
@endsection
