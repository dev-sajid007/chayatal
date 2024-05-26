@extends('layouts.frontend.app')

@section('content')
    <!--Main Slider-->
    <section class="main-banner banner">
	    <div class="rev_slider_wrapper">

	        <div id="main_slider" class="rev_slider"  data-version="5.0">
	        	
	            <ul>
                    @forelse ($banners as $banner)

                        <li data-index='rs-{{$banner->id}}' class="slide_show slide_1" data-transition='slidingoverlayright' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off' data-title='Slide Boxes' data-description=''>

                            <img src="{{asset($banner->photo)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

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
                                <div class="banner-title"><h1>{{$banner->title}}</h1></div>
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
                                <div class="banner-text"><p>{!!$banner->description!!}</p></div>
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
                                <button class="donate-box-btn btn-one">{{$banner->button_text}}</button>
                            </div>
                        </li>
                    @empty
                        <li class="text-center"><h1>No Banner Found :)</h1></li>
                    @endforelse
	              
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
                <div class="title"><p></p></div>
            </div>
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="{{asset($gallery->photo)}}" alt=""></figure>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{asset($gallery->photo)}}" class="fancybox"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonials-content">
                                <div class="text">
                                    <p>{!!$testimonial->content!!}</p>
                                </div>
                                <div class="testimonials-autor">
                                    <figure><img src="{{asset($testimonial->photo)}}" alt=""></figure>
                                    <div class="autor">{{$testimonial->name}}</div>
                                    <span>Donator</span>
                                </div>
                            </div>
                        @endforeach
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
                            @foreach ($events as $event)
                            <div class="single-item">
                                @php
                                    $date = new DateTime($event->date);
                                @endphp

                                <div class="date">{{$date->format('d') }}<span>{{ $date->format('M') }}</span></div>
                                
                                <div class="event-content">
                                    <h4><a href="events.html">{{$event->title}}</a></h4>
                                    <ul class="meta">
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{\Carbon\Carbon::parse($event->start_time)->format('g:i A')}} - {{\Carbon\Carbon::parse($event->end_time)->format('g:i A')}}</li>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$event->location}}</li>
                                    </ul>
                                    <div class="text">
                                        <p>{{ Str::words($event->description, 23) }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                <div class="title"><p></p></div>
            </div>
            <ul class="sponsors-slider">
                @foreach ($sponsors as $sponsor)
                    <li><a href="#"><figure><img src="{{asset($sponsor->photo)}}" alt=""></figure></a></li>
                @endforeach
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

                @foreach ($newses as $news)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-box">
                                <div class="img-holder">
                                    <figure><a href="{{route('news.show', $news->id)}}"><img src="{{asset($news->photo)}}" alt=""></a></figure>
                                </div>
                                {{-- <ul class="img-content text-center">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>20 Jan, 2017</li>
                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>350 Likes</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>75 Comments</li>
                                </ul> --}}
                            </div>
                            <div class="news-content">
                                <h4><a href="single-blog.html">{{$news->title}}</a></h4>
                                <div class="text">
                                    <p>{!! $news->description !!}</p>
                                </div>
                                <a href="{{route('news.show', $news->id)}}" class="btn-two">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- news section end -->
@endsection