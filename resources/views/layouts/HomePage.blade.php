<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

    <!-- title -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- et line icon -->
    <link rel="stylesheet" href="css/et-line-icons.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- themify icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="css/justified-gallery.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <!-- bootsnav -->
    <link rel="stylesheet" href="css/bootsnav.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!--[if IE]>
    <script src="js/html5shiv.js"></script>



    <![endif]-->

    <style type="text/css">
        .one-third-screen {
            height: 780px;
        }

        .clo{
            transform: scale(1);
        }
        @media (min-width: 600px) {
            .clo{
                transform: scale(1);
            }
        }
        @media only screen and (min-width: 600px) {

            .clo{
                transform: scale(2.5);
            }
        }
    </style>
    @yield('style')
</head>
<body>

@yield('header')

@yield('content')

@yield('footer')




<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript libraries -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script type="text/javascript" src="js/smooth-scroll.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<!-- menu navigation -->
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script>
<!-- animation -->
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- page scroll -->
<script type="text/javascript" src="js/page-scroll.js"></script>
<!-- swiper carousel -->
<script type="text/javascript" src="js/swiper.min.js"></script>
<!-- counter -->
<script type="text/javascript" src="js/jquery.count-to.js"></script>
<!-- parallax -->
<script type="text/javascript" src="js/jquery.stellar.js"></script>
<!-- magnific popup -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<!-- portfolio with shorting tab -->
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<!-- images loaded -->
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<!-- pull menu -->
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/hamburger-menu.js"></script>
<!-- counter  -->
<script type="text/javascript" src="js/counter.js"></script>
<!-- fit video  -->
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<!-- equalize -->
<script type="text/javascript" src="js/equalize.min.js"></script>
<!-- skill bars  -->
<script type="text/javascript" src="js/skill.bars.jquery.js"></script>
<!-- justified gallery  -->
<script type="text/javascript" src="js/justified-gallery.min.js"></script>
<!--pie chart-->
<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
<!-- instagram -->
<script type="text/javascript" src="js/instafeed.min.js"></script>
<!-- retina -->
<script type="text/javascript" src="js/retina.min.js"></script>
<!-- revolution -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
<!-- setting -->
<script type="text/javascript" src="js/main.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-54513701-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>