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
        <section class="padding parallax xs-background-image-center" data-stellar-background-ratio="0.5" style="background-image:url('{{$data[$i]->img}}');">
            <div class="position-relative" style="min-height: 243em;">
                <div class="slider-typography" style="position: relative;top: 0">

                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle md-padding-15px-lr">
                            <div class="col-lg-8 col-sm-10 col-lg-push-4 col-sm-push-1 text-left bg-white-opacity padding-seven-all md-padding-ten-all sm-text-center">
                                <div class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">{{$data[$i]->event_name}}</div>
                                <div class="separator-line-horrizontal-full width-100 margin-35px-tb sm-margin-25px-tb xs-margin-20px-tb bg-extra-dark-gray"></div>
                                <span class="text-dark-gray text-extra-large font-weight-300 margin-35px-bottom display-block sm-margin-25px-bottom xs-margin-15px-bottom"><?php echo nl2br(base64_decode($data[$i]->event_desc)); ?></span>


                                <?php
                                //SELECT * FROM `evenReg` WHERE `user_id`='' and `events_id`=''
                                $data1 = DB::connection('mysql')->select("SELECT * FROM `evenReg` WHERE `user_id`='".\Illuminate\Support\Facades\Auth::user()->id."' and `events_id`='$id'");
                                if(!$data1){
                                ?>
                                <a onclick="func()" target="_blank" class="btn btn-dark-gray btn-medium">Register Now</a>
                                <?php
                                }else{
                                ?>
                                {{--<a target="_blank" class="btn btn-dark-gray btn-medium">View</a>--}}

                                <a target="_blank" class="btn btn-deep-pink btn-medium red" onclick="func_R()">Remove Events</a>
                                <?php
                                    }
                                ?>

                                <a target="_blank" onclick="window.history.back();" class="btn btn-dark-gray btn-medium">back</a>
                            </div>
                        </div>

                    </div>

                </div>

                <script>
                    function func() {
                        var ck=confirm("conform");
                        if(ck) {
                            var d = document.getElementById("stu_form");
                            d.submit();
                        }else{
                            alert("ok");
                        }
                    }

                    function func_R() {
                        var d=document.getElementById("typ");
                        d.value="remove";
                        alert(d.value);
                        var d1 = document.getElementById("stu_form");
                        d1.submit();
                    }

                </script>

                <form id="stu_form" method="POST" action="{{ route('EventsReg.store') }}" enctype="multipart/form-data"  ui-jp="parsley" novalidate="">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="insert" id="typ">
                <input type="hidden" value="{{$data[$i]->id}}" name="eid">
                </form>

            </div>
        </section>
        <!-- end hero banner with parallax section -->

        <?php
        }
        ?>

    </div>
@endsection
