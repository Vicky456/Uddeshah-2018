<!-- aside -->
<div id="aside" class="app-aside modal fade nav-dropdown">
    <!-- fluid app aside -->
    <div class="left navside dark dk" layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a href="/" class="navbar-brand">

                <span class="hidden-folded inline">Admin Dashboard</span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-light">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Main</small>
                    </li>

                    <li>
                        <a href="/admin" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li><li>
                        <a href="/" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Home Page</span>
                        </a>
                    </li>

                    <li>
                        <a href="/Events_list" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'/assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Events List</span>
                        </a>
                    </li>

                    <li>
                        <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>

                            <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'/assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Events</span>
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="/EventsInsert" >
                                    <span class="nav-text">Events Entry</span>
                                </a>
                            </li>
                            <li>
                                <a href="/Events_Mlist" >
                                    <span class="nav-text">Events Counts</span>
                                </a>
                            </li>
                            <li>
                                <a href="/EventsUpdate" >
                                    <span class="nav-text">Events update</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/Events_Timeline?day=1">


                            <span class="nav-icon">
                      <i class="material-icons">
                        <span ui-include="'../assets/images/i_4.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Day 1 Timeline</span>
                        </a>

                    </li>
                    <li>
                        <a href="/Events_Timeline?day=2">
                       <span class="nav-icon">
                      <i class="material-icons">
                        <span ui-include="'../assets/images/i_8.svg'"></span>
                      </i>
                    </span>
                            <span class="nav-text">Day 2 Timeline</span>
                        </a>

                    </li>



                </ul>
            </nav>
        </div>
        <div flex-no-shrink class="b-t">
            <div class="nav-fold">
                <a href="profile.html">
        	    <span class="pull-left">

        	    </span>
                    <span class="clear hidden-folded p-x">
                        <span class="block _800"><h5>{{\Illuminate\Support\Facades\Auth::user()->name}}</h5></span>

        	    </span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- / -->