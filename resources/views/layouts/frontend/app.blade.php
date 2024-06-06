<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chayatal Bangladesh</title>
    <!-- Stylesheets -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    {{-- <link rel="stylesheet" href="https://ganlanyuan.github.io/tiny-slider/demo/css/styles.css"> --}}
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset($info->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset($info->favicon) }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">

</head>


<body>
    <div class="page-wrapper">

        <!-- .preloader -->
        {{-- <div class="preloader"></div> --}}
        <!-- /.preloader -->

        <!-- main header area -->
        @include('layouts.frontend.partials.header')
        <!--End Sticky Header-->
        @yield('content')

        <!-- main foorer area -->
        @include('layouts.frontend.partials.footer')
        <!-- main footer area end -->


    </div>
    <!--End pagewrapper-->
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span
            class="icon fa fa-long-arrow-up"></span></div>


    <!-- jQuery js -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
    <script src="{{ asset('frontend/js/map-script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/js/masterslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/validate.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/theme.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/map-script.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

    @stack('js')
    <!-- End of .page_wrapper -->
    <script>
        (function (window, document) {
            var loader = function () {
                var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                //script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
        })(window, document);
    </script>
</body>

</html>
