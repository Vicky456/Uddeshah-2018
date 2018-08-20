


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="/assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="/assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="/assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css /assets/styles/app.min.css -->
    <link rel="stylesheet" href="/assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="/assets/styles/font.css" type="text/css" />
</head>
<body>
<div class="app" id="app">

    <!-- ############ LAYOUT START-->


@yield('header')
    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
        <div class="app-header white box-shadow">
            @yield('navbar')
        </div>

        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            <!-- only need a height for layout 4 -->
            @yield('content')


            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->





@yield('footer')

    <!-- ############ LAYOUT END-->

</div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="/assets/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
<script src="/assets/libs/jquery/tether/dist/js/tether.min.js"></script>
<script src="/assets/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="/assets/libs/jquery/underscore/underscore-min.js"></script>
<script src="/assets/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="/assets/libs/jquery/PACE/pace.min.js"></script>

<script src="/assets/scripts/config.lazyload.js"></script>

<script src="/assets/scripts/palette.js"></script>
<script src="/assets/scripts/ui-load.js"></script>
<script src="/assets/scripts/ui-jp.js"></script>
<script src="/assets/scripts/ui-include.js"></script>
<script src="/assets/scripts/ui-device.js"></script>
<script src="/assets/scripts/ui-form.js"></script>
<script src="/assets/scripts/ui-nav.js"></script>
<script src="/assets/scripts/ui-screenfull.js"></script>
<script src="/assets/scripts/ui-scroll-to.js"></script>
<script src="/assets/scripts/ui-toggle-class.js"></script>

<script src="/assets/scripts/app.js"></script>

<!-- ajax -->
<script src="/assets/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="/assets/scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
