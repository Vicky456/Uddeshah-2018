<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top white-link header-dark bg-transparent nav-box-width padding-four-lr">
        <div class="container-fluid nav-header-container">
            <div class="row">
                <!-- start logo -->
                <div class="col-lg-2 col-md-2 col-xs-5">
                    <h3 style="top: 15px;position:  relative;" class="text-white">Uddeshah</h3>
                    {{--<a href="index.html" title="Pofo" class="logo"><img src="images/uddeshah_1x.png"  class="logo-dark" alt="Pofo"><img src="images/uddeshah_1x.png"  alt="Pofo" class="logo-light default">uddeshah</a>--}}
                </div>
                <!-- end logo -->
                <div class="col-lg-8 col-md-8 col-xs-2 accordion-menu">
                    <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse no-padding-right" id="navbar-collapse-toggle-1">
                        <ul class="nav navbar-nav navbar-center alt-font text-normal">
                            <!-- start menu item -->
                            <li><a href="/" class="inner-link">Home</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li><a href="/Events" class="inner-link">Events</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li><a href="http://www.mcet.in/" class="inner-link">Dr MCET</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li><a href="http://www.sgsmcet.co.in/" target="_blank">SGS Mcet 2018-2019</a></li>
                            <?php
                                if(true){
                            ?>
                            <li><a href="/EventsInsert" target="_blank">Event Dashboard</a></li>
                            <?php
                                }
                            ?>
                            <!-- end menu item -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-5 sm-width-auto text-right sm-no-padding-left">
                    @auth
                        <a href="{{ url('/admin') }}" class="hidden-md hidden-lg btn btn-small btn-rounded btn-transparent-white inner-link">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        <a href="{{ url('/admin') }}" class="hidden-xs btn btn-small btn-rounded btn-transparent-white inner-link">{{\Illuminate\Support\Facades\Auth::user()->name}} Dashboard</a>

                    @else
                        <a target="_self" class="btn btn-very-small btn-rounded btn-white box-shadow-dark" href="{{ route('login') }}">Login</a>
                    @endauth

                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->