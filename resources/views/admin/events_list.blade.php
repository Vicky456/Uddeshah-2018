@extends('layouts.adminPage')

@section('header')
    @include('admin.header')
@endsection

@section('navbar')
    @include('admin.navBar')
@endsection

@section('content')
    <div class="padding">
        <div class="box">

            <?php
            use Illuminate\Support\Facades\DB;


            $data = DB::connection('mysql')->select('SELECT U.name,U.email,ET.event_name FROM evenReg ER, users U,event_table ET WHERE U.id=ER.`user_id` and ET.id=`events_id`');


            ?>
            <div class="box-header">
                <h2 style="text-transform: capitalize;font-size:  24px;">Event Name : {{$data[0]->event_name}} - <span style="font-size:  15px;top: -2px;position:  relative;">count : [{{sizeof($data)}}]</span></h2>
            </div>
            <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                    <div class="row">
                        <div class="col-sm-12">
                            <table ui-jp="dataTable"  class="table table-striped b-t b-b dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <tr role="row">
                                    <th style="width: 222px;" class="sorting_asc" tabindex="0"
                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">Name
                                        engine
                                    </th>
                                    <th style="width: 286px;" class="sorting" tabindex="0"
                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="Browser: activate to sort column ascending">Email
                                    </th>
                                    <th style="width: 286px;" class="sorting" tabindex="0"
                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                        aria-label="Platform(s): activate to sort column ascending">Events Name
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php


                                for($i=0;$i<sizeof($data);$i++){
                                    ?>
                                <tr>

                                    <td >{{$data[$i]->name}}</td>
                                    <td >{{$data[$i]->email}}</td>
                                    <td >{{$data[$i]->event_name}}</td>
                                </tr>

                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')

@endsection