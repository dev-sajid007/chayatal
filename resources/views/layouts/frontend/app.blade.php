<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Charitex | Responsive HTML 5 Template</title>
<!-- Stylesheets -->
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

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
                                <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
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
                            <li><i class="fa fa-phone"></i>Call:  123 4561 5523 </li>
                           <li><i class="fa fa-envelope"></i>Email:  info@templatepath.com</li>
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
                            <a href="index.html"><img src="{{asset('frontend/images/home/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-bar">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('frontend/images/home/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-bar">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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

    <!--Main Slider-->
    <section class="main-banner banner">
	    <div class="rev_slider_wrapper">
	        <div id="main_slider" class="rev_slider"  data-version="5.0">
	        	
	            <ul>
	                <li data-index='rs-355' class="slide_show slide_1" data-transition='slidingoverlayright' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Boxes' data-description=''>

	                    <img src="{{asset('frontend/images/slider/slider-1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

	                    <div class="main_heading tp-caption tp-resizeme"
	                        data-x="left" data-hoffset="0"
	                        data-y="center" data-voffset="-140"
	                        data-whitespace="nowrap"
	                        data-transform_idle="o:1;"
	                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"  
	                        data-transform_out="y:[100%];s:1000;s:1000;" 
	                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
	                        data-start="2000" 
	                        data-splitin="none" 
	                        data-splitout="none">
	                        <div class="banner-title"><h1>You can help the poor</h1></div>
	                    </div>
	                    <div class="tp-caption tp-resizeme" 
	                        data-x="left" data-hoffset="0" 
	                        data-y="center" data-voffset="-60" 
	                        data-transform_idle="o:1;"                         
	                        data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
	                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
	                        data-splitin="none" 
	                        data-splitout="none" 
	                        data-responsive_offset="on"
	                        data-start="2300">
	                        <div class="banner-text"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa<br /> qui officia deserunt mollit anim id est laborum. </p></div>
	                    </div>
	                    <div class="tp-caption tp-resizeme" 
	                        data-x="left" data-hoffset="0" 
	                        data-y="center" data-voffset="30" 
	                        data-transform_idle="o:1;"                         
	                        data-transform_in="y:[-1000%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
	                        data-splitin="none" 
	                        data-splitout="none" 
	                        data-responsive_offset="on"
	                        data-start="2600">
	                        <button class="donate-box-btn btn-one">donate now</button>
	                    </div>
                    </li>

	                <li data-index='rs-356' class="slide_show slide_2" data-transition='slidingoverlayleft' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Slots vertical' data-description=''>

	                    <img src="{{asset('frontend/images/slider/slider-2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

	                    <div class="main_heading tp-caption tp-resizeme"
	                        data-x="left" data-hoffset="0"
	                        data-y="center" data-voffset="-140"
	                        data-whitespace="nowrap"
	                        data-transform_idle="o:1;"
	                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"  
	                        data-transform_out="y:[100%];s:1000;s:1000;" 
	                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
	                        data-start="2000" 
	                        data-splitin="none" 
	                        data-splitout="none">
	                        <div class="banner-title"><h1>You can help the poor</h1></div>
	                    </div>
	                    <div class="tp-caption tp-resizeme" 
	                        data-x="left" data-hoffset="0" 
	                        data-y="center" data-voffset="-60" 
	                        data-transform_idle="o:1;"                         
	                        data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
	                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
	                        data-splitin="none" 
	                        data-splitout="none" 
	                        data-responsive_offset="on"
	                        data-start="2300">
	                        <div class="banner-text"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa<br /> qui officia deserunt mollit anim id est laborum. </p></div>
	                    </div>
	                    <div class="tp-caption tp-resizeme" 
	                        data-x="left" data-hoffset="0" 
	                        data-y="center" data-voffset="30" 
	                        data-transform_idle="o:1;"                         
	                        data-transform_in="y:[1000%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
	                        data-splitin="none" 
	                        data-splitout="none" 
	                        data-responsive_offset="on"
	                        data-start="2600">
	                        <button class="donate-box-btn btn-one">donate now</button>
	                    </div>
                    </li>

                    <li class="slide_show slide_3" data-index='rs-381' data-transition='slidingoverlaydown' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='3D Curtain Vertical' data-description=''>

	                    <img src="{{asset('frontend/images/slider/slider-3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

	                    <div class="main_heading tp-caption tp-resizeme"
	                        data-x="left" data-hoffset="0"
	                        data-y="center" data-voffset="-140"
	                        data-whitespace="nowrap"
	                        data-transform_idle="o:1;"
	                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"  
	                        data-transform_out="y:[100%];s:1000;s:1000;" 
	                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
	                        data-start="2000" 
	                        data-splitin="none" 
	                        data-splitout="none">
	                        <div class="banner-title"><h1>You can help the poor</h1></div>
	                    </div>
	                    <div class="tp-caption tp-resizeme" 
	                        data-x="left" data-hoffset="0" 
	                        data-y="center" data-voffset="-60" 
	                        data-transform_idle="o:1;"                         
	                        data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
	                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
	                        data-splitin="none" 
	                        data-splitout="none" 
	                        data-responsive_offset="on"
	                        data-start="2300">
	                        <div class="banner-text"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa<br /> qui officia deserunt mollit anim id est laborum. </p></div>
	                    </div>
	                    <div class="tp-caption tp-resizeme" 
	                        data-x="left" data-hoffset="0" 
	                        data-y="center" data-voffset="30" 
	                        data-transform_idle="o:1;"                         
	                        data-transform_in="x:[1000%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
	                        data-splitin="none" 
	                        data-splitout="none" 
	                        data-responsive_offset="on"
	                        data-start="2600">
	                        <button class="donate-box-btn btn-one">donate now</button>
	                    </div>
                    </li>
	          
	            </ul>
	        </div>
	    </div>
    </section>
    <!--Main Slider End-->

    <!-- cause section -->
    <section class="our-cause section-padding text-center">
    	<div class="container">
    		<div class="cause-title">
    			<div class="section-title"><h2>Our <span>CAuses</span></h2></div>
    			<div class="title"><p>Cupidatat non proident sunt in culpa qui officia deserunt mollit</p></div>
    		</div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <a href="causes-details.html">
                                <figure><img src="{{asset('frontend/images/cause/1.jpg')}}" alt=""></figure>
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        <div class="cause-content">
                            <div class="progress-item">
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="meta">
                                <li>Raised: $40,000</li>
                                <li>Goal: $50,000</li>
                            </ul>
                            <h4><a href="causes-details.html">Raise fund for Healthy Food</a></h4>
                            <div class="text"><p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt.</p></div>
                            <button class="btn-one donate-box-btn">Donate Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <a href="causes-details.html">
                                <figure><img src="{{asset('frontend/images/cause/2.jpg')}}" alt=""></figure>
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        <div class="cause-content">
                            <div class="progress-item">
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="meta">
                                <li>Raised: $40,000</li>
                                <li>Goal: $50,000</li>
                            </ul>
                            <h4><a href="causes-details.html">Awareness Program</a></h4>
                            <div class="text"><p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt.</p></div>
                            <button class="btn-one donate-box-btn">Donate Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <a href="causes-details.html">
                                <figure><img src="{{asset('frontend/images/cause/3.jpg')}}" alt=""></figure>
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        <div class="cause-content">
                            <div class="progress-item">
                                <div class="progress" data-value="80">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                        <div class="value-holder"><span class="value"></span>%</div>
                                    </div>
                                </div>
                            </div>
                            <ul class="meta">
                                <li>Raised: $40,000</li>
                                <li>Goal: $50,000</li>
                            </ul>
                            <h4><a href="causes-details.html">Bring Them to Classroom</a></h4>
                            <div class="text"><p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt.</p></div>
                            <button class="btn-one donate-box-btn">Donate Now</button>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </section>
    <!-- cause section end -->

    <!-- help-us section -->
    <section class="help-us section-padding text-center">
        <div class="container">
            <div class="help-us-title">
                <div class="section-title"><h2>How can you  <span>help us</span></h2></div>
                <div class="title"><p>Cupidatat non proident sunt in culpa qui officia deserunt mollit</p></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item one">
                        <div class="icon-box">
                            <i class="flaticon-box"></i>
                        </div>
                        <h4>Become Donator</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item two">
                        <div class="icon-box">
                            <i class="flaticon-piggy-bank"></i>
                        </div>
                        <h4>Fundrising</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item three">
                        <div class="icon-box">
                            <i class="flaticon-people"></i>
                        </div>
                        <h4>Become Volunteer</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item four">
                        <div class="icon-box">
                            <i class="flaticon-people-2"></i>
                        </div>
                        <h4>Adopt a Child</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- help-us section end -->

    <!-- img-gallery -->
    <section class="img-gallery text-center section-padding">
        <div class="container">
            <div class="img-gallery-title">
                <div class="section-title"><h2>Our <span>Gallery</span></h2></div>
                <div class="title"><p>Cupidatat non proident sunt in culpa qui officia deserunt mollit</p></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/gallery/1.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{asset('frontend/images/gallery/1.jpg')}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/gallery/2.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{asset('frontend/images/gallery/1.jpg')}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/gallery/3.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{asset('frontend/images/gallery/1.jpg')}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/gallery/4.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{asset('frontend/images/gallery/1.jpg')}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/gallery/5.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{asset('frontend/images/gallery/1.jpg')}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/gallery/6.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="{{asset('frontend/images/gallery/1.jpg')}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-btn">
                <a href="gallery.html" class="btn-two">View All</a>
            </div>
        </div>
    </section>
    <!-- img-gallery end -->

    <!-- our-volunteers section -->
    {{-- <section class="our-volunteers section-padding">
        <div class="container">
            <div class="our-volunteers-title text-center">
                <div class="section-title"><h2>Our <span>Volunteers</span></h2></div>
                <div class="title"><p>Cupidatat non proident sunt in culpa qui officia deserunt mollit</p></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/team/1.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="single-volunteer.html">Tony Brown</a></h4>
                            <span>Business man</span>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/team/2.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="single-volunteer.html">Tony Brown</a></h4>
                            <span>Business man</span>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/team/3.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="single-volunteer.html">Tony Brown</a></h4>
                            <span>Business man</span>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <figure><img src="{{asset('frontend/images/team/4.jpg')}}" alt=""></figure>
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="single-volunteer.html">Tony Brown</a></h4>
                            <span>Business man</span>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit 
                                sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- our-volunteers section end -->

    <!-- testimonials area -->
    <section class="testimonials section-padding text-center">
        <div class="container">
            <div class="testimonials-title">
                <div class="section-title"><h2>What People <span>Say</span></h2></div>
                <div class="title"></div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                    <div class="testimonial-slider">
                        <div class="testimonials-content">
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Enim ad minim veniam quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <div class="testimonials-autor">
                                <figure><img src="{{asset('frontend/images/home/tes-autor.png')}}" alt=""></figure>
                                <div class="autor">Samanta Doe</div>
                                <span>Donator</span>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Enim ad minim veniam quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <div class="testimonials-autor">
                                <figure><img src="{{asset('frontend/images/home/tes-autor.png')}}" alt=""></figure>
                                <div class="autor">Samanta Doe</div>
                                <span>Donator</span>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Enim ad minim veniam quis nostrud exercitation ullamco laboris nisiut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <div class="testimonials-autor">
                                <figure><img src="{{asset('frontend/images/home/tes-autor.png')}}" alt=""></figure>
                                <div class="autor">Samanta Doe</div>
                                <span>Donator</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials area end -->

    <!-- event & donation section -->
    <section class="event-donation section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 upcoming-event">
                    <div class="event-carousel">
                        <div class="event-donation-title">Upcoming <span>Events</span></div>
                        <div class="events-slide">
                            <div class="single-item">
                                <div class="date">20<span>Jan</span></div>
                                <div class="event-content">
                                    <h4><a href="events.html">Heart to Heart Event</a></h4>
                                    <ul class="meta">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM - 11.00 PM</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>29 Newyork City</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="date">20<span>Jan</span></div>
                                <div class="event-content">
                                    <h4><a href="events.html">Heart to Heart Event</a></h4>
                                    <ul class="meta">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM - 11.00 PM</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>29 Newyork City</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="date">20<span>Jan</span></div>
                                <div class="event-content">
                                    <h4><a href="events.html">Heart to Heart Event</a></h4>
                                    <ul class="meta">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM - 11.00 PM</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>29 Newyork City</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="date">20<span>Jan</span></div>
                                <div class="event-content">
                                    <h4><a href="events.html">Heart to Heart Event</a></h4>
                                    <ul class="meta">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>9.00 AM - 11.00 PM</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>29 Newyork City</li>
                                    </ul>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="outslide">
                            <div id="slider-next"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 make-donation">
                    <div class="donate-content">
                        <div class="event-donation-title">Make a <span>Donation</span></div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod 
                            incididunt labore et dolore magna aliqua.</p>
                        </div>
                        <div class="dinate-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>I Want to Donate for</label>
                                    <select class="custom-select-box">
                                        <option selected="selected">I Want to Donate for</option>
                                        <option>United Kingdom</option>
                                        <option>California</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Currency</label>
                                    <select class="custom-select-box">
                                        <option selected="selected">Currency</option>
                                        <option>United Kingdom</option>
                                        <option>California</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>How much do you want to donate?</label>
                                    <select class="custom-select-box">
                                        <option selected="selected">$50</option>
                                        <option>$100</option>
                                        <option>$200</option>
                                        <option>$300</option>
                                        <option>$500</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <label>Payment Type</label>
                                    <input type="radio" name="optionsRadios"  value="option1" checked="checked">
                                    <div class="text">One Time</div>
                                    <input type="radio" name="optionsRadios"  value="option1">
                                    <div class="text">Recurring</div>
                                </div>
                            </div>
                            <button class="btn-two donate-box-btn">Donate Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- event & donation section end -->

    <!-- sponsors section -->
    <section class="our-sponsors section-padding text-center">
        <div class="container">
            <div class="sponsors-title">
                <div class="section-title"><h2>Our <span>Sponsors</span></h2></div>
                <div class="title"><p>Cupidatat non proident sunt in culpa qui officia deserunt mollit</p></div>
            </div>
            <ul class="sponsors-slider">
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/1.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/2.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/3.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/4.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/5.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/6.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/1.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/2.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/3.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/4.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/5.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/6.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/1.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/2.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/3.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/4.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/5.png')}}" alt=""></figure></a></li>
                <li><a href="#"><figure><img src="{{asset('frontend/images/sponsors/6.png')}}" alt=""></figure></a></li>
            </ul>
        </div>
    </section>
    <!-- sponsors section end -->

    <!-- news section -->
    <section class="news-section section-padding">
        <div class="container">
            <div class="news-title text-center">
                <div class="section-title"><h2>Recent News</h2></div>
                <div class="title"><p>Cupidatat non proident sunt in culpa qui officia deserunt mollit</p></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-box">
                            <div class="img-holder">
                                <figure><a href="single-blog.html"><img src="{{asset('frontend/images/news/1.jpg')}}" alt=""></a></figure>
                            </div>
                            <ul class="img-content text-center">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>20 Jan, 2017</li>
                                <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>350 Likes</li>
                                <li><i class="fa fa-comments-o" aria-hidden="true"></i>75 Comments</li>
                            </ul>
                        </div>
                        <div class="news-content">
                            <h4><a href="single-blog.html">Heart to Heart Event</a></h4>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adip
                                sicing elit sed do eiusmod temporincididunt.
                                Labore dolore magna aliqua. </p>
                            </div>
                            <a href="#" class="btn-two">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-box">
                            <div class="img-holder">
                                <figure><a href="single-blog.html"><img src="{{asset('frontend/images/news/2.jpg')}}" alt=""></a></figure>
                            </div>
                            <ul class="img-content text-center">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>20 Jan, 2017</li>
                                <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>350 Likes</li>
                                <li><i class="fa fa-comments-o" aria-hidden="true"></i>75 Comments</li>
                            </ul>
                        </div>
                        <div class="news-content">
                            <h4><a href="single-blog.html">Heart to Heart Event</a></h4>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adip
                                sicing elit sed do eiusmod temporincididunt.
                                Labore dolore magna aliqua. </p>
                            </div>
                            <a href="#" class="btn-two">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-box">
                            <div class="img-holder">
                                <figure><a href="single-blog.html"><img src="{{asset('frontend/images/news/3.jpg')}}" alt=""></a></figure>
                            </div>
                            <ul class="img-content text-center">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>20 Jan, 2017</li>
                                <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>350 Likes</li>
                                <li><i class="fa fa-comments-o" aria-hidden="true"></i>75 Comments</li>
                            </ul>
                        </div>
                        <div class="news-content">
                            <h4><a href="single-blog.html">Heart to Heart Event</a></h4>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet consectetur adip
                                sicing elit sed do eiusmod temporincididunt.
                                Labore dolore magna aliqua. </p>
                            </div>
                            <a href="#" class="btn-two">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news section end -->

    <!-- main foorer area -->
    <footer class="main-footer-area">
        <div class="container">
            <div class="footer-top-area">
                <ul class="footer-socila">
                    <li><h4>Connect With Us:</h4></li>
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
                                <figure><a href="index.html"><img src="images/footer/logo.png" alt=""></a></figure>
                            </div>
                            <div class="text">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock a Latin professor.</p>
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
                                <li><a href="gallery.html"><figure><img src="{{asset('frontend/images/footer/1.jpg')}}" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="{{asset('frontend/images/footer/2.jpg')}}" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="{{asset('frontend/images/footer/3.jpg')}}" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="{{asset('frontend/images/footer/4.jpg')}}" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="{{asset('frontend/images/footer/5.jpg')}}" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="{{asset('frontend/images/footer/6.jpg')}}" alt=""></figure></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-colmun col-md-3 col-sm-6 col-xs-12">
                        <div class="contact-widget">
                            <h4>contact us</h4>
                            <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod.</p></div>
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
                <div class="text"><p>Copyright © copy <a href="#">Charity</a> 2017. All Rights Reserved</p></div>
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
	                <form  action="#" class="donate-form default-form">
	                    <ul class="chicklet-list clearfix">
	                        <li>
	                            <input type="radio" id="donate-amount-1" name="donate-amount" />
	                            <label for="donate-amount-1" data-amount="1000" >$1000</label>
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
	                                <span>Or</span><input type="text" id="other-amount" placeholder="Other Amount"  />
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
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>


<!-- jQuery js -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="{{asset('frontend/js/map-script.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.countTo.js')}}"></script>
<script src="{{asset('frontend/js/isotope.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/js/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('frontend/js/owl.js')}}"></script>
<script src="{{asset('frontend/js/masterslider.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.mixitup.min.js')}}"></script>
<script src="{{asset('frontend/js/validate.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>      
<script type="text/javascript" src="{{asset('frontend/js/theme.js')}}"></script>
<script src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('frontend/js/map-script.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script> 


<!-- End of .page_wrapper -->
</body>
</html>
