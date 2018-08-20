<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="/vendor/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" href="/vendor/waves/waves.min.css">
    <link rel="stylesheet" href="/vendor/chartist/chartist.min.css">
    <link rel="stylesheet" href="/vendor/switchery/dist/switchery.min.css">
    <link rel="stylesheet" href="/vendor/morris/morris.css">
    <link rel="stylesheet" href="/vendor/jvectormap/jquery-jvectormap-2.0.3.css">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="css/core.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

</head>
<body class="large-sidebar fixed-sidebar fixed-header content-appear">



    <div class="wrapper">
    {{--@yield('content')--}}
        <!-- Sidebar -->
        <div class="site-sidebar-overlay"></div>
        <div class="site-sidebar">
            <a class="logo" href="index.html">
                <span class="l-text">Neptune</span>
                <span class="l-icon"></span>
            </a>
            <div class="custom-scroll custom-scroll-light">
                <ul class="sidebar-menu">
                    <li class="menu-title m-t-0-5">Navigation</li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-dashboard"></i></span>
                            <span class="s-text">Dashboard</span>
                        </a>
                        <ul>
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="index2.html">Dashboard 2</a></li>
                            <li><a href="index3.html">Dashboard 3</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="tag tag-danger">7</span>
                            <span class="s-icon"><i class="ti-package"></i></span>
                            <span class="s-text">Widgets</span>
                        </a>
                        <ul>
                            <li><a href="widgets-blog.html">Blog</a></li>
                            <li><a href="widgets-social.html">Social</a></li>
                            <li><a href="widgets-ecommerce.html">Ecommerce</a></li>
                            <li><a href="widgets-navigation.html">Navigation</a></li>
                            <li><a href="widgets-headers.html">Headers</a></li>
                            <li><a href="widgets-footers.html">Footers</a></li>
                            <li><a href="widgets-tiles.html">Tiles</a></li>
                            <li><a href="widgets-modals.html">Modals</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Main</li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="tag tag-purple">12</span>
                            <span class="s-icon"><i class="ti-paint-bucket"></i></span>
                            <span class="s-text">UI Kit</span>
                        </a>
                        <ul>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-notifications.html">Notifications</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-navs.html">Navs</a></li>
                            <li><a href="ui-progress.html">Progress</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-other.html">Other</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-pencil-alt"></i></span>
                            <span class="s-text">Forms</span>
                        </a>
                        <ul>
                            <li><a href="forms-basic.html">Basic Elements</a></li>
                            <li><a href="forms-editors.html">Editors</a></li>
                            <li><a href="forms-plugins.html">Plugins</a></li>
                            <li><a href="forms-pickers.html">Form Pickers</a></li>
                            <li><a href="forms-masks.html">Form Masks</a></li>
                            <li><a href="forms-wizard.html">Form Wizard</a></li>
                            <li><a href="forms-xeditable.html">X-editable</a></li>
                            <li><a href="forms-upload.html">File Upload</a></li>
                            <li><a href="forms-typeahead.html">Typeahead</a></li>
                            <li><a href="forms-range-slider.html">Range Slider</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-menu-alt"></i></span>
                            <span class="s-text">Tables</span>
                        </a>
                        <ul>
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-editable.html">Editable Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Tables</a></li>
                            <li><a href="tables-jsgrid.html">jsGrid Tables</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="tag tag-success">3</span>
                            <span class="s-icon"><i class="ti-gallery"></i></span>
                            <span class="s-text">Pages</span>
                        </a>
                        <ul>
                            <li><a href="pages-blank.html">Blank</a></li>
                            <li><a href="pages-403.html">Error 403</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                            <li><a href="pages-faq.html">FAQ</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-profile.html">Profile</a></li>
                            <li><a href="pages-sign-in.html">Sign In</a></li>
                            <li><a href="pages-sign-in2.html">Sign In 2</a></li>
                            <li><a href="pages-reset-password.html">Reset Password</a></li>
                            <li><a href="pages-sign-up.html">Sign Up</a></li>
                            <li><a href="pages-contactform.html">Contact Form</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-view-grid"></i></span>
                            <span class="s-text">Apps</span>
                        </a>
                        <ul>
                            <li><a href="apps-inbox.html">Inbox</a></li>
                            <li><a href="apps-chat.html">Chat</a></li>
                            <li><a href="apps-contacts.html">Contacts</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-star"></i></span>
                            <span class="s-text">Icons</span>
                        </a>
                        <ul>
                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                            <li><a href="icons-material.html">Material Design</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-weather.html">Weather Icons</a></li>
                            <li><a href="icons-ionicons.html">Ionicons</a></li>
                            <li><a href="icons-typicons.html">Typicons</a></li>
                            <li><a href="icons-pe7.html">Pe7 Icons</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-settings"></i></span>
                            <span class="s-text">Utilities</span>
                        </a>
                        <ul>
                            <li><a href="utilities-color.html">Color utilities</a></li>
                            <li><a href="utilities-border.html">Border utilities</a></li>
                            <li><a href="utilities-other.html">Other utilities</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">More</li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-location-arrow"></i></span>
                            <span class="s-text">Extra</span>
                        </a>
                        <ul>
                            <li><a href="extra-animations.html">Animations</a></li>
                            <li><a href="extra-comments.html">Comments</a></li>
                            <li><a href="extra-lightbox.html">Lightbox</a></li>
                            <li><a href="extra-nestable.html">Nestable</a></li>
                            <li><a href="extra-crop.html">Image Crop</a></li>
                            <li><a href="extra-loading-progress.html">Loading Progress</a></li>
                            <li><a href="extra-prices.html">Prices</a></li>
                            <li><a href="extra-timeline.html">Timeline</a></li>
                            <li><a href="extra-search.html">Search</a></li>
                            <li><a href="extra-scrollbar.html">Scroll Bar</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-new-window"></i></span>
                            <span class="s-text">Frontend</span>
                        </a>
                        <ul>
                            <li><a href="frontend.html">Frontend 1</a></li>
                            <li><a href="frontend2.html">Frontend 2</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="tag tag-info">6</span>
                            <span class="s-icon"><i class="ti-bar-chart-alt"></i></span>
                            <span class="s-text">Charts</span>
                        </a>
                        <ul>
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartjs.html">Chart.js</a></li>
                            <li><a href="charts-peity.html">Peity Chart</a></li>
                            <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            <li><a href="charts-easy.html">Easy Pie Chart</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-email"></i></span>
                            <span class="s-text">Email Templates</span>
                        </a>
                        <ul>
                            <li><a href="email-basic.html">Basic</a></li>
                            <li><a href="email-alert.html">Alert</a></li>
                            <li><a href="email-ecommerce.html">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="with-sub">
                        <a href="#" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-location-pin"></i></span>
                            <span class="s-text">Maps</span>
                        </a>
                        <ul>
                            <li><a href="maps-vector.html">Vector Map</a></li>
                            <li><a href="maps-google.html">Google Map</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="calendar.html" class="waves-effect  waves-light">
                            <span class="s-icon"><i class="ti-calendar"></i></span>
                            <span class="s-text">Calendar</span>
                        </a>
                    </li>
                    <li class="with-sub compact-hide">
                        <a href="javascript: void(0);" class="waves-effect  waves-light">
                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                            <span class="s-icon"><i class="ti-menu"></i></span>
                            <span class="s-text">Menu Levels</span>
                        </a>
                        <ul>
                            <li class="with-sub">
                                <a href="javascript: void(0);">
                                    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                    <span class="s-text">Level 1</span>
                                </a>
                                <ul>
                                    <li class="with-sub">
                                        <a href="javascript: void(0);">
                                            <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                            <span class="s-text">Level 1.2</span>
                                        </a>
                                        <ul>
                                            <li class="with-sub">
                                                <a href="javascript: void(0);">
                                                    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
                                                    <span class="s-text">Level 1.2.3</span>
                                                </a>
                                                <ul>
                                                    <li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
                                                    <li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript: void(0);">Level 1.2.3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript: void(0);">Level 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript: void(0);">Level 1</a></li>
                        </ul>
                    </li>
                    <li class="menu-title compact-hide">Unique Visitors</li>
                    <li class="compact-hide">
                        <div id="sidebar-chart" class="chartist-animated chartist-light"></div>
                    </li>
                    <li class="menu-title compact-hide">Tags</li>
                    <li class="compact-hide">
                        <a href="javascript: void(0);" class="waves-effect  waves-light">
                            <span class="s-icon"><i class="fa fa-circle-o text-danger"></i></span>
                            <span class="s-text">Ideas</span>
                        </a>
                    </li>
                    <li class="compact-hide">
                        <a href="javascript: void(0);" class="waves-effect  waves-light">
                            <span class="s-icon"><i class="fa fa-circle-o text-warning"></i></span>
                            <span class="s-text">Projects</span>
                        </a>
                    </li>
                    <li class="compact-hide">
                        <a href="documentation.html" class="waves-effect  waves-light">
                            <span class="s-icon"><i class="fa fa-circle-o text-primary"></i></span>
                            <span class="s-text">Documentation</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Sidebar second -->
        <div class="site-sidebar-second custom-scroll custom-scroll-dark">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">Todo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-1" role="tabpanel">
                    <div class="sidebar-chat animated fadeIn">
                        <div class="sidebar-group">
                            <h6>Favorites</h6>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-success"></span>
                                <span class="sc-name">John Doe</span>
                                <span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
                            </a>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-success"></span>
                                <span class="sc-name">Vance Osborn</span>
                            </a>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-danger"></span>
                                <span class="sc-name">Wolfe Stevie</span>
                                <span class="tag tag-primary">7</span>
                            </a>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-warning"></span>
                                <span class="sc-name">Jonathan Mel</span>
                            </a>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-secondary"></span>
                                <span class="sc-name">Carleton Josiah</span>
                            </a>
                        </div>
                        <div class="sidebar-group">
                            <h6>Work</h6>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-secondary"></span>
                                <span class="sc-name">Larry Hal</span>
                            </a>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-success"></span>
                                <span class="sc-name">Ron Carran</span>
                                <span class="sc-writing"> typing...<i class="ti-pencil"></i></span>
                            </a>
                        </div>
                        <div class="sidebar-group">
                            <h6>Social</h6>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-success"></span>
                                <span class="sc-name">Lucius Skyler</span>
                                <span class="tag tag-primary">3</span>
                            </a>
                            <a class="text-black" href="#">
                                <span class="sc-status bg-danger"></span>
                                <span class="sc-name">Landon Graham</span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-chat-window animated fadeIn">
                        <div class="scw-header clearfix">
                            <a class="text-grey pull-xs-left" href="#"><i class="ti-angle-left"></i> Back</a>
                            <div class="pull-xs-right">
                                <strong>Jonathan Mel</strong>
                                <div class="avatar box-32">
                                    <img src="img/avatars/5.jpg" alt="">
                                    <span class="status bg-success top right"></span>
                                </div>
                            </div>
                        </div>
                        <div class="scw-item">
                            <span>Hello!</span>
                        </div>
                        <div class="scw-item self">
                            <span>Meeting at 16:00 in the conference room. Remember?</span>
                        </div>
                        <div class="scw-item">
                            <span>No problem. Thank's for reminder!</span>
                        </div>
                        <div class="scw-item self">
                            <span>Prepare to be amazed.</span>
                        </div>
                        <div class="scw-item">
                            <span>Good. Can't wait!</span>
                        </div>
                        <div class="scw-form">
                            <form>
                                <input class="form-control" type="text" placeholder="Type...">
                                <button class="btn btn-secondary" type="button"><i class="ti-angle-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2" role="tabpanel">
                    <div class="sidebar-activity animated fadeIn">
                        <div class="notifications">
                            <div class="n-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar box-48">
                                            <img class="b-a-radius-circle" src="img/avatars/1.jpg" alt="">
                                            <span class="n-icon bg-danger"><i class="ti-pin-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="n-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">uploaded <a class="text-black" href="#">monthly report</a></div>
                                        <div class="text-muted font-90">12 minutes ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="n-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar box-48">
                                            <img class="b-a-radius-circle" src="img/avatars/3.jpg" alt="">
                                            <span class="n-icon bg-success"><i class="ti-comment"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="n-text"><a class="text-black" href="#">Vance Osborn</a> <span class="text-muted">commented </span> <a class="text-black" href="#">Project</a></div>
                                        <div class="n-comment m-y-0-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
                                        <div class="text-muted font-90">3 hours ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="n-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar box-48">
                                            <img class="b-a-radius-circle" src="img/avatars/2.jpg" alt="">
                                            <span class="n-icon bg-danger"><i class="ti-email"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="n-text"><a class="text-black" href="#">Ron Carran</a> <span class="text-muted">send you files</span></div>
                                        <div class="row row-sm m-y-0-5">
                                            <div class="col-xs-4">
                                                <img class="img-fluid" src="img/photos-1/1.jpg" alt="">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-fluid" src="img/photos-1/2.jpg" alt="">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-fluid" src="img/photos-1/3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="text-muted font-90">30 minutes ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="n-item">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar box-48">
                                            <img class="b-a-radius-circle" src="img/avatars/4.jpg" alt="">
                                            <span class="n-icon bg-primary"><i class="ti-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="n-text"><a class="text-black" href="#">Larry Hal</a> <span class="text-muted">invited you to </span><a class="text-black" href="#">Project</a></div>
                                        <div class="text-muted font-90">10:58</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3" role="tabpanel">
                    <div class="sidebar-todo animated fadeIn">
                        <div class="sidebar-group">
                            <h6>Important</h6>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Mock up</span>
                                </label>
                            </div>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Prototype iPhone</span>
                                </label>
                            </div>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Build final version</span>
                                </label>
                            </div>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Approval docs</span>
                                </label>
                            </div>
                        </div>
                        <div class="sidebar-group">
                            <h6>Secondary</h6>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Website redesign</span>
                                </label>
                            </div>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked>
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Skype call</span>
                                </label>
                            </div>
                            <div class="st-item">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Blog post</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4" role="tabpanel">
                    <div class="sidebar-settings animated fadeIn">
                        <div class="sidebar-group">
                            <h6>Main</h6>
                            <div class="ss-item">
                                <div class="text-truncate">Anyone can register</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                            </div>
                            <div class="ss-item">
                                <div class="text-truncate">Allow commenting</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                            </div>
                            <div class="ss-item">
                                <div class="text-truncate">Allow deleting</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                            </div>
                        </div>
                        <div class="sidebar-group">
                            <h6>Notificatiоns</h6>
                            <div class="ss-item">
                                <div class="text-truncate">Commits</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9"></div>
                            </div>
                            <div class="ss-item">
                                <div class="text-truncate">Messages</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                            </div>
                        </div>
                        <div class="sidebar-group">
                            <h6>Security</h6>
                            <div class="ss-item">
                                <div class="text-truncate">Daily backup</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                            </div>
                            <div class="ss-item">
                                <div class="text-truncate">API Access</div>
                                <div class="ss-checkbox"><input type="checkbox" class="js-switch" data-size="small" data-color="#3e70c9" checked></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Template options -->
        <div class="template-options custom-scroll custom-scroll-dark">
            <div class="to-toggle"><i class="ti-settings"></i></div>
            <div class="to-content">
                <h6>Layouts</h6>
                <div class="row m-b-2 text-xs-center">
                    <div class="col-xs-6 m-b-2">
                        <a href="index.html">
                            <img src="img/layouts/1.png" class="img-fluid">
                        </a>
                        <div class="text-muted">Default</div>
                    </div>
                    <div class="col-xs-6 m-b-2">
                        <label>
                            <input name="compact-sidebar" type="checkbox">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <img src="img/layouts/2.png" class="img-fluid">
                        </label>
                        <div class="text-muted">Compact Sidebar</div>
                    </div>
                    <div class="col-xs-6 m-b-2">
                        <label>
                            <input name="fixed-header" type="checkbox" checked>
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <img src="img/layouts/3.png" class="img-fluid">
                        </label>
                        <div class="text-muted">Fixed Header</div>
                    </div>
                    <div class="col-xs-6 m-b-2">
                        <label>
                            <input name="boxed-wrapper" type="checkbox">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <img src="img/layouts/4.png" class="img-fluid">
                        </label>
                        <div class="text-muted">Boxed Wrapper</div>
                    </div>
                </div>
                <h6>Skins</h6>
                <div class="row">
                    <div class="col-xs-3 m-b-2">
                        <label>
                            <input name="skin" value="skin-default" type="radio" checked>
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-first bg-white"></span>
                                <span class="skin-second skin-dark-blue"></span>
                                <span class="skin-third bg-info"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 m-b-2">
                        <label>
                            <input name="skin" value="skin-1" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-first skin-dark-blue-2"></span>
                                <span class="skin-second bg-white"></span>
                                <span class="skin-third bg-danger"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 m-b-2">
                        <label>
                            <input name="skin" value="skin-2" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-first bg-white"></span>
                                <span class="skin-second bg-black"></span>
                                <span class="skin-third bg-success"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 m-b-2">
                        <label>
                            <input name="skin" value="skin-3" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-first bg-white"></span>
                                <span class="skin-second skin-grey"></span>
                                <span class="skin-third bg-purple"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 m-b-2">
                        <label>
                            <input name="skin" value="skin-4" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-first skin-dark-blue"></span>
                                <span class="skin-second skin-dark-blue-2"></span>
                                <span class="skin-third bg-warning"></span>
                            </div>
                        </label>
                    </div>
                    <div class="col-xs-3 m-b-2">
                        <label>
                            <input name="skin" value="skin-5" type="radio">
                            <div class="to-icon"><i class="ti-check"></i></div>
                            <div class="to-skin">
                                <span class="skin-first bg-primary"></span>
                                <span class="skin-second bg-white"></span>
                                <span class="skin-third bg-primary"></span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <div class="site-header">
            <nav class="navbar navbar-light">
                <ul class="nav navbar-nav">
                    <li class="nav-item m-r-1 hidden-lg-up">
                        <a class="nav-link collapse-button" href="#">
                            <i class="ti-menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-xs-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-check"></i>
                            <span class="tag tag-success top">3</span>
                        </a>
                        <div class="dropdown-tasks dropdown-menu dropdown-menu-right animated slideInUp">
                            <div class="t-item">
                                <div class="m-b-0-5">
                                    <a class="text-black" href="#">First Task</a>
                                    <span class="pull-xs-right text-muted">75%</span>
                                </div>
                                <progress class="progress progress-danger progress-sm" value="75" max="100">100%</progress>
                                <span class="avatar box-32">
										<img src="img/avatars/2.jpg" alt="">
									</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">5 min ago</span>
                            </div>
                            <div class="t-item">
                                <div class="m-b-0-5">
                                    <a class="text-black" href="#">Second Task</a>
                                    <span class="pull-xs-right text-muted">40%</span>
                                </div>
                                <progress class="progress progress-purple progress-sm" value="40" max="100">100%</progress>
                                <span class="avatar box-32">
										<img src="img/avatars/3.jpg" alt="">
									</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">15:07</span>
                            </div>
                            <div class="t-item">
                                <div class="m-b-0-5">
                                    <a class="text-black" href="#">Third Task</a>
                                    <span class="pull-xs-right text-muted">100%</span>
                                </div>
                                <progress class="progress progress-warning progress-sm" value="100" max="100">100%</progress>
                                <span class="avatar box-32">
										<img src="img/avatars/4.jpg" alt="">
									</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">yesterday</span>
                            </div>
                            <div class="t-item">
                                <div class="m-b-0-5">
                                    <a class="text-black" href="#">Fourth Task</a>
                                    <span class="pull-xs-right text-muted">60%</span>
                                </div>
                                <progress class="progress progress-success progress-sm" value="60" max="100">100%</progress>
                                <span class="avatar box-32">
										<img src="img/avatars/5.jpg" alt="">
									</span>
                                <a class="text-black" href="#">John Doe</a>, <span class="text-muted">3 days ago</span>
                            </div>
                            <a class="t-item text-black text-xs-center" href="#">
                                <strong>View all tasks</strong>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <i class="ti-bell"></i>
                            <span class="tag tag-danger top">12</span>
                        </a>
                        <div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated slideInUp">
                            <div class="m-item">
                                <div class="mi-icon bg-info"><i class="ti-comment"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">commented post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
                                <div class="mi-time">5 min ago</div>
                            </div>
                            <div class="m-item">
                                <div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
                                <div class="mi-time">15:07</div>
                            </div>
                            <div class="m-item">
                                <div class="mi-icon bg-purple"><i class="ti-user"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">followed</span> <a class="text-black" href="#">Kate Doe</a></div>
                                <div class="mi-time">yesterday</div>
                            </div>
                            <div class="m-item">
                                <div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
                                <div class="mi-text"><a class="text-black" href="#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="#">Lorem ipsum dolor</a></div>
                                <div class="mi-time">3 days ago</div>
                            </div>
                            <a class="t-item text-black text-xs-center" href="#">
                                <strong>View all notifications</strong>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="avatar box-32">
                                <img src="img/avatars/1.jpg" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <a class="dropdown-item" href="#">
                                <i class="ti-email m-r-0-5"></i> Inbox
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-user m-r-0-5"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ti-settings m-r-0-5"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-help m-r-0-5"></i> Help</a>
                            <a class="dropdown-item" href="#"><i class="ti-power-off m-r-0-5"></i> Sign out</a>
                        </div>
                    </li>
                    <li class="nav-item hidden-md-up">
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse-1">
                            <i class="ti-more"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link site-sidebar-second-toggle" href="#" data-toggle="collapse">
                            <i class="ti-arrow-left"></i>
                        </a>
                    </li>
                </ul>
                <div class="navbar-toggleable-sm collapse" id="collapse-1">
                    <div class="header-form pull-md-left m-md-r-1">
                        <form>
                            <input type="text" class="form-control b-a" placeholder="Search for...">
                            <button type="submit" class="btn bg-white b-a-0">
                                <i class="ti-search"></i>
                            </button>
                        </form>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                Add
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <a class="dropdown-item" href="#">
                                    Link
                                    <span class="tag tag-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="#">Another link</a>
                                <a class="dropdown-item" href="#">
                                    Something else here
                                    <span class="tag tag-success">7</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="site-content">
            <!-- Content -->
            <div class="content-area p-y-1">
                <div class="container-fluid">
                    <div class="row row-md">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block bg-white tile tile-1 m-b-2">
                                <div class="t-icon right"><span class="bg-danger"></span><i class="ti-shopping-cart-full"></i></div>
                                <div class="t-content">
                                    <h6 class="text-uppercase m-b-1">Orders</h6>
                                    <h1 class="m-b-1">1,325</h1>
                                    <span class="tag tag-danger m-r-0-5">+17%</span>
                                    <span class="text-muted font-90">from previous period</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block bg-white tile tile-1 m-b-2">
                                <div class="t-icon right"><span class="bg-success"></span><i class="ti-bar-chart"></i></div>
                                <div class="t-content">
                                    <h6 class="text-uppercase m-b-1">Revenue</h6>
                                    <h1 class="m-b-1">$ 47,855</h1>
                                    <i class="fa fa-caret-up text-success m-r-0-5"></i><span>12,350</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block bg-white tile tile-1 m-b-2">
                                <div class="t-icon right"><span class="bg-primary"></span><i class="ti-package"></i></div>
                                <div class="t-content">
                                    <h6 class="text-uppercase m-b-1">Products</h6>
                                    <h1 class="m-b-1">6,800</h1>
                                    <span class="tag tag-primary m-r-0-5">+125</span>
                                    <span class="text-muted font-90">arraving today</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="box box-block bg-white tile tile-1 m-b-2">
                                <div class="t-icon right"><span class="bg-warning"></span><i class="ti-receipt"></i></div>
                                <div class="t-content">
                                    <h6 class="text-uppercase m-b-1">Sold</h6>
                                    <h1 class="m-b-1">1,682</h1>
                                    <div id="sparkline1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">Projects monitor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">Memory usage</a>
                        </li>
                    </ul>
                    <div class="box box-block bg-white b-t-0 m-b-2">
                        <div class="text-muted m-b-1">Calculated in last 10 days</div>
                        <div class="chart-container demo-chart">
                            <div id="main-chart" class="chart-placeholder"></div>
                        </div>
                    </div>
                    <div class="row row-md m-b-2">
                        <div class="col-md-4">
                            <div class="box bg-white text-xs-center">
                                <div class="box-block p-b-1">
                                    <h5 class="m-b-2">Open projects</h5>
                                    <div class="btn-group m-b-1">
                                        <button type="button" class="btn btn-secondary active waves-effect waves-light">Week</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Month</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Year</button>
                                    </div>
                                    <div id="donut" class="chart-container demo-chart-2"></div>
                                </div>
                                <div class="box-block b-t">
                                    <span class="text-muted">last contract signed</span> <a class="text-primary" href="#"><span class="underline">today at 14:57</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="box bg-white">
                                <table class="table table-grey-head m-md-b-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Project</th>
                                        <th>Last update</th>
                                        <th>Progress</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jonathan Mel</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">First project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">5 minutes ago</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-success progress-sm d-inline-block m-b-0" value="44" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Larry Hal</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Second project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">3 days ago</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-danger progress-sm d-inline-block m-b-0" value="75" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ron Carran</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Third project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">Last monday</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-warning progress-sm d-inline-block m-b-0" value="20" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Carleton Josiah</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Another project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">5 minutes ago</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-primary progress-sm d-inline-block m-b-0" value="10" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Wolfe Stevie</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Old project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">3 days ago</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-info progress-sm d-inline-block m-b-0" value="90" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Vance Osborn</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Important project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">Last monday</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-warning progress-sm d-inline-block m-b-0" value="35" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Jonathan Mel</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">First project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">5 minutes ago</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-success progress-sm d-inline-block m-b-0" value="44" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Larry Hal</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Second project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">3 days ago</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-danger progress-sm d-inline-block m-b-0" value="75" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Ron Carran</td>
                                        <td>
                                            <a class="text-primary" href="#"><span class="underline">Third project</span></a>
                                        </td>
                                        <td>
                                            <span class="text-muted">Last monday</span>
                                        </td>
                                        <td>
                                            <progress class="progress progress-warning progress-sm d-inline-block m-b-0" value="20" max="100">100%</progress>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="box box-block bg-white">
                        <div class="clearfix m-b-1">
                            <h5 class="pull-xs-left">Sales statistics</h5>
                            <div class="pull-xs-right">
                                <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-angle-down"></i></button>
                                <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-reload"></i></button>
                                <button class="btn btn-link btn-sm text-muted" type="button"><i class="ti-close"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div id="world" style="height: 400px;"></div>
                            </div>
                            <div class="col-md-4 demo-progress">
                                <p class="m-b-0-5">New York City <span class="pull-xs-right">25%</span></p>
                                <progress class="progress progress-success progress-sm" value="25" max="100">100%</progress>
                                <p class="m-b-0-5">Singapore <span class="pull-xs-right">15%</span></p>
                                <progress class="progress progress-info progress-sm" value="15" max="100">100%</progress>
                                <p class="m-b-0-5">Tokyo <span class="pull-xs-right">30%</span></p>
                                <progress class="progress progress-warning progress-sm m-b-2" value="30" max="100">100%</progress>
                                <p class="m-b-0-5">Hong Kong <span class="pull-xs-right">5%</span></p>
                                <progress class="progress progress-danger progress-sm m-b-2" value="5" max="100">100%</progress>
                                <a class="btn btn-outline-primary" href="#">Detail statistics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    2016 © Neptune
                </div>
            </footer>
        </div>

    </div>

    <!-- Vendor JS -->
    <script type="text/javascript" src="/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/vendor/tether//js/tether.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap//js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
    <script type="text/javascript" src="/vendor/jscrollpane/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/vendor/jscrollpane/mwheelIntent.js"></script>
    <script type="text/javascript" src="/vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="/vendor/waves/waves.min.js"></script>
    <script type="text/javascript" src="/vendor/chartist/chartist.min.js"></script>
    <script type="text/javascript" src="/vendor/switchery/dist/switchery.min.js"></script>
    <script type="text/javascript" src="/vendor/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="/vendor/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="/vendor/flot.tooltip//js/jquery.flot.tooltip.min.js"></script>
    <script type="text/javascript" src="/vendor/CurvedLines/curvedLines.js"></script>
    <script type="text/javascript" src="/vendor/TinyColor/tinycolor.js"></script>
    <script type="text/javascript" src="/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/vendor/raphael/raphael.min.js"></script>
    <script type="text/javascript" src="/vendor/morris/morris.min.js"></script>
    <script type="text/javascript" src="/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script type="text/javascript" src="/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>

    <!-- Neptune JS -->
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/demo.js"></script>
    <script type="text/javascript" src="/js/index.js"></script>

</body>
</html>
