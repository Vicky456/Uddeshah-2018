@extends('layouts.adminPage')

@section('header')
    @include('admin.header')
@endsection

@section('navbar')
    @include('admin.navBar')
@endsection

@section('content')
    <div class="p-a white lt box-shadow">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="m-b-0 _300">Welcome to Uddeshah</h4>
                <small class="text-muted">dashboard for you {{\Illuminate\Support\Facades\Auth::user()->name}}</small>
            </div>

        </div>
    </div>
    <div class="padding">
        <?php
        use Illuminate\Support\Facades\DB;


        $data = DB::connection('mysql')->select("SELECT * FROM event_table WHERE id in (SELECT `events_id` FROM `evenreg` WHERE `user_id`='".\Illuminate\Support\Facades\Auth::user()->id."')");



        for($i=0;$i<sizeof($data);$i++){
            ?>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="box">
                    <div class="item dark">
                        <a href=""><img src="{{$data[$i]->img}}" class="w-full"></a>

                        <div class="bottom gd-overlay p-a-xs">
                            <a href="" class="text-md block p-x-sm">{{$data[$i]->event_name}}</a>
                        </div>

                    </div>
                    <div class="p-a">

                        <div class="m-b h-2x"><a href="" class="_800">{{$data[$i]->date_on}} | by <a href="" class="text-medium-gray">{{$data[$i]->dept}}</a></a></div>
                        <p class="h-3x">{{$data[$i]->event_name}}</p>
                        <div><a href="/EventsReg?id={{$data[$i]->id}}" class="btn btn-xs white" >Read More</a> <a onclick="func_R({{$data[$i]->id}})" class="btn btn-xs white red">Remove Events</a></div>
                    </div>
                </div>
            </div>
        <?php
            }
            ?>
    </div>

    <script>

        function func_R(e) {
            var ck=confirm("conform");
            if(ck) {
                (document.getElementById("eid")).value = "" + e;
                (document.getElementById("typ")).value = "remove";
                (document.getElementById("stu_form")).submit();
            }else{
                alert("cancel okay");
            }
        }

    </script>

    <form id="stu_form" method="POST" action="{{ route('EventsReg.store') }}" enctype="multipart/form-data"  ui-jp="parsley" novalidate="">
        {{ csrf_field() }}
        <input type="hidden" name="type" value="insert" id="typ">
        <input type="hidden" value="" name="eid" id="eid">
    </form>
@endsection


@section('footer')

@endsection