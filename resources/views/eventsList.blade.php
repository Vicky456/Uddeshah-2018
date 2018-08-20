@extends('layouts.events')


@section('header')
    <header>
        <!-- start navigation -->
        <nav class="navbar bg-transparent full-width-pull-menu white-link no-transition">
            <div class="container-fluid nav-header-container height-100px padding-three-half-lr xs-height-70px xs-padding-15px-lr">
                <!-- start header navigation -->
                <div class="row">

                    <!-- start logo -->
                    <div class="col-md-4 col-sm-4 col-xs-6 text-center xs-text-left">
                        <h3 style="top: 15px;position:  relative;" class="text-white">Uddeshah Events <span style="color: red">*</span></h3>
                    </div>
                    <!-- end logo -->

                </div>
            </div>
            <!-- end header navigation -->
        </nav>
        <!-- end navigation -->
    </header>
@endsection



@section('content')

    @include('events_list_ui.eventsListUI2')
    @include('events_list_ui.eventsListUI3')

@endsection
