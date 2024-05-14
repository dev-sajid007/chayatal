<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Charitex | Responsive HTML 5 Template</title>
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
        <div class="preloader"></div>
        <!-- /.preloader -->

        <!--Header search-->
        <section class="header-search">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="search-form pull-right">
                            <form action="#">
                                <div class="search">
                                    <input type="search" name="search" value="" placeholder="Search Something">
                                    <button type="submit"><span class="fa fa-search"
                                            aria-hidden="true"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Header search-->

        <!-- main header area -->
        <header class="main-header">
            <div class="header-upper">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <ul class="top-left">
                                <li><i class="fa fa-phone"></i>Call: 123 4561 5523 </li>
                                <li><i class="fa fa-envelope"></i>Email: info@templatepath.com</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="top-right clearfix">
                                <div class="search-button">
                                    <div class="toggle-search">
                                        <button><span class="fa fa-search" aria-hidden="true"></span></button>
                                    </div>
                                </div>
                                <ul class="social-link">
                                    <li>Follow Us On: </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-lower">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset($info->logo) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="menu-bar">
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            @foreach ($menus as $menu)
                                            <li class="{{count($menu->childs) > 0 ? "dropdown" : ""}}"><a href="index.html">{{$menu->title}}</a>
                                                @if ($menu->childs)
                                                <ul>
                                                    @foreach ($menu->childs as $item)
                                                        <li><a href="causes.html">{{ $item->title}}</a></li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </nav>
                                <div class="info-box">
                                    <button class="donate-box-btn btn-one">donate now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset($info->logo) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="menu-bar">
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="index.html">Home</a>
                                            </li>
                                            <li><a href="about.html">about</a>
                                            </li>
                                            <li class="dropdown"><a href="#">Causes</a>
                                                <ul>
                                                    <li><a href="causes.html">Causes</a></li>
                                                    <li><a href="causes-details.html">Causes Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Events</a>
                                                <ul>
                                                    <li><a href="events.html">Our Events</a></li>
                                                    <li><a href="events-details.html">Events Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="single-volunteer.html">Single Volunteer</a></li>
                                                    <li><a href="gallery.html">Our Gallery</a></li>
                                                    <li><a href="error.html">Error Page</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="blog.html">Blog</a>
                                                <ul>
                                                    <li><a href="our-blog.html">Our Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="info-box">
                                    <button class="donate-box-btn btn-one">donate now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Sticky Header-->

        @yield('content')

        <!-- main foorer area -->
        <footer class="main-footer-area">
            <div class="container">
                <div class="footer-top-area">
                    <ul class="footer-socila">
                        <li>
                            <h4>Connect With Us:</h4>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                    <div class="footer-subscribe">
                        <form method="post" action="index.html">
                            <div class="form-group">
                                <input type="email" name="search" placeholder="Email Address" required>
                                <button type="submit" class="btn-one">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="main-footer">
                    <div class="row">
                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <div class="logo-widget">
                                <div class="footer-logo">
                                    <figure><a href="index.html"><img src="images/footer/logo.png"
                                                alt=""></a></figure>
                                </div>
                                <div class="text">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock a Latin professor.</p>
                                </div>
                                <a href="contact.html">Contact us</a>
                            </div>
                        </div>
                        <div class="footer-column col-md-2 col-sm-6 col-xs-12">
                            <div class="link-widget">
                                <h4>Quick Links</h4>
                                <ul class="list">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="causes-details.html">Causes</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="single-volunteer.html">Volunteers</a></li>
                                    <li><a href="single-blog.html">Latest News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-colmun col-md-4 col-sm-6 col-xs-12">
                            <div class="gallery-widget">
                                <h4>Our Gallery</h4>
                                <ul class="img-list">
                                    <li><a href="gallery.html">
                                            <figure><img src="{{ asset('frontend/images/footer/1.jpg') }}"
                                                    alt=""></figure>
                                        </a></li>
                                    <li><a href="gallery.html">
                                            <figure><img src="{{ asset('frontend/images/footer/2.jpg') }}"
                                                    alt=""></figure>
                                        </a></li>
                                    <li><a href="gallery.html">
                                            <figure><img src="{{ asset('frontend/images/footer/3.jpg') }}"
                                                    alt=""></figure>
                                        </a></li>
                                    <li><a href="gallery.html">
                                            <figure><img src="{{ asset('frontend/images/footer/4.jpg') }}"
                                                    alt=""></figure>
                                        </a></li>
                                    <li><a href="gallery.html">
                                            <figure><img src="{{ asset('frontend/images/footer/5.jpg') }}"
                                                    alt=""></figure>
                                        </a></li>
                                    <li><a href="gallery.html">
                                            <figure><img src="{{ asset('frontend/images/footer/6.jpg') }}"
                                                    alt=""></figure>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-colmun col-md-3 col-sm-6 col-xs-12">
                            <div class="contact-widget">
                                <h4>contact us</h4>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa fa-home" aria-hidden="true"></i></div>
                                    <div class="text">1201 park street, Fifth Avenue,</div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa fa-phone"></i></div>
                                    <div class="text">[88] 657 524 332</div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                    <div class="mail"><a href="#">nfo@startravel.com</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <div class="text">
                        <p>Copyright © copy <a href="#">Charity</a> 2017. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
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
