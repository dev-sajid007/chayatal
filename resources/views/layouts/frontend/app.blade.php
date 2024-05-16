<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chayatal Bangladesh</title>
    <!-- Stylesheets -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/revolution-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

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

    <!-- donate popup -->
    <div id="donate-popup" class="donate-popup">
        <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
        <div class="popup-inner">
            <div class="container">
                <div class="donate-form-area">
                    <h2>Donation Information</h2>
                    <h4>How much would you like to donate:</h4>
                    <form action="#" class="donate-form default-form">
                        <ul class="chicklet-list clearfix">
                            <li>
                                <input type="radio" id="donate-amount-1" name="donate-amount" />
                                <label for="donate-amount-1" data-amount="1000">$1000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                                <label for="donate-amount-2" data-amount="2000">$2000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-3" name="donate-amount" />
                                <label for="donate-amount-3" data-amount="3000">$3000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-4" name="donate-amount" />
                                <label for="donate-amount-4" data-amount="4000">$4000</label>
                            </li>
                            <li>
                                <input type="radio" id="donate-amount-5" name="donate-amount" />
                                <label for="donate-amount-5" data-amount="5000">$5000</label>
                            </li>
                            <li class="other-amount">

                                <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                                    <span>Or</span><input type="text" id="other-amount"
                                        placeholder="Other Amount" />
                                </div>
                            </li>
                        </ul>
                        <h3>Donor Information</h3>
                        <div class="form-bg">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Your Name*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Email*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Address*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <p>Phn Num*</p>
                                        <input type="text" name="fname" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="payment-option">
                            <li>
                                <h4>Choose your payment method:</h4>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Paypal</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Offline Donation</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Credit Card</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input name="pay-us" type="checkbox">
                                        <span>Debit Card</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <div class="center"><button class="btn-one" type="submit">Donate Now</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- donate popup -->


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


    <!-- End of .page_wrapper -->
</body>

</html>
