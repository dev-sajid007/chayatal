@extends('layouts.frontend.app')

@section('content')
<style>
    .tns-controls{
        display: none
    }
</style>
    <!--Main Slider-->
    <section class="main-banner banner">
        <div class="rev_slider_wrapper">

            <div id="main_slider" class="rev_slider" data-version="5.0">

                <ul>
                    @forelse ($banners as $banner)
                        <li data-index='rs-{{ $banner->id }}' class="slide_show slide_1"
                            data-transition='slidingoverlayright' data-slotamount='default' data-easein='default'
                            data-easeout='default' data-masterspeed='default' data-rotate='0' data-saveperformance='off'
                            data-title='Slide Boxes' data-description=''>

                            <img src="{{ asset($banner->photo) }}" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                            <div class="main_heading tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="center"
                                data-voffset="-140" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                                data-transform_out="y:[100%];s:1000;s:1000;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="2000"
                                data-splitin="none" data-splitout="none">
                                <div class="banner-title">
                                    <h1>{{ $banner->title }}</h1>
                                </div>
                            </div>
                            <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="center"
                                data-voffset="-60" data-transform_idle="o:1;"
                                data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                                <div class="banner-text">
                                    <p>{!! $banner->description !!}</p>
                                </div>
                            </div>
                            <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="center"
                                data-voffset="30" data-transform_idle="o:1;"
                                data-transform_in="y:[-1000%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                                <button class="donate-box-btn btn-one">{{ $banner->button_text }}</button>
                            </div>
                        </li>
                    @empty
                        <li class="text-center">
                            <h1>No Banner Found :)</h1>
                        </li>
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
                <div class="section-title">
                    <h2>Sponsor a <span>Child</span></h2>
                </div>
                <div class="title">
                    <p>By sponsoring a child you can help a child to attend school to get his education without any risk of
                        dropout.
                        In our child sponsorship program you can provide support for a child and his community.</p>
                </div>
            </div>
            <div class="row my-slider">
                @foreach ($childs as $child)
                    <div class="col-md-3">
                        <div class="single-item">
                            <div class="img-holder">
                                <a href="{{ route('childs.show', $child->id) }}">
                                    <figure><img style="width: 260px;height:250px" src="{{ asset($child->image) }}"
                                            alt=""></figure>
                                    <div class="overlay">
                                    </div>
                                </a>
                            </div>
                            @php
                                $diff = date('Y') - date('Y', strtotime($child->dob));
                            @endphp
                            <div class="cause-content">
                                <ul class="meta">
                                    <li>Age: {{ $diff }}</li>
                                    <li>Gender: {{ $child->gender }}</li>
                                    <li>Dream: {{ $child->dream }}</li>
                                </ul>
                                <h4><a href="{{ route('childs.show', $child->id) }}">{{ $child->name }}</a></h4>
                                <a href="{{ route('childs.show', $child->id) }}" class="btn-one donate-box-btn">Sponsor
                                    Me</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- cause section end -->

    <!-- help-us section -->
    <section class="help-us section-padding text-center">
        <div class="container">
            <div class="help-us-title">
                <div class="section-title">
                    <h2>How can you <span>help us</span></h2>
                </div>
                <div class="title">
                    <p>Your little contribution may bright a child's future.</p>
                </div>
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
                <div class="section-title">
                    <h2>Our <span>Gallery</span></h2>
                </div>
                <div class="title">
                    <p></p>
                </div>
            </div>
            <div class="row">
                @foreach ($galleries as $gallery)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="{{ asset($gallery->photo) }}" alt=""></figure>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ asset($gallery->photo) }}" class="fancybox"><i
                                                    class="fa fa-picture-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="gallery-btn">
                {{-- <a href="gallery.html" class="btn-two">View All</a> --}}
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
                <div class="section-title">
                    <h2>What People <span>Say</span></h2>
                </div>
                <div class="title"></div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                    <div class="testimonial-slider">
                        @foreach ($testimonials as $testimonial)
                            <div class="testimonials-content">
                                <div class="text">
                                    <p>{!! $testimonial->content !!}</p>
                                </div>
                                <div class="testimonials-autor">
                                    <figure><img src="{{ asset($testimonial->photo) }}" alt=""></figure>
                                    <div class="autor">{{ $testimonial->name }}</div>
                                    <span>Well Wisher</span>
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

                                    <div class="date">{{ $date->format('d') }}<span>{{ $date->format('M') }}</span>
                                    </div>

                                    <div class="event-content">
                                        <h4><a href="events.html">{{ $event->title }}</a></h4>
                                        <ul class="meta">
                                            <li><i class="fa fa-clock-o"
                                                    aria-hidden="true"></i>{{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }}
                                                - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</li>
                                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->location }}
                                            </li>
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
                            <p>Donate any amount for the welfare of the underprivileged children of Chayatal Bangladesh.</p>
                        </div>
                        <div class="dinate-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>I Want to Donate for</label>
                                    <select class="custom-select-box" required>
                                        <option>Campus 1</option>
                                        <option>Campus 2</option>
                                        <option>Campus 3</option>
                                        <option>Campus 4</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Currency</label>
                                    <select class="custom-select-box" id="currency">
                                        <option value="BDT">BDT</option>
                                        <option value="USD">USD</option>
                                        <option value="AUD">Australian dollar</option>
                                        <option value="CAD">Canadian dollar</option>
                                        <option value="EUR">Euro</option>
                                        <option value="GBP">United Kingdom</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>How much do you want to donate?</label>
                                    <input type="number" name="" value="1000" class="form-control"
                                        id="total_amount">
                                </div>
                            </div>
                            <button type="submit" class="btn-two" id="sslczPayBtn"
                                order="If you already have the transaction generated for current order"
                                endpoint="/pay-via-ajax"> Pay Now
                            </button>
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
                <div class="section-title">
                    <h2>Our <span>Sponsors</span></h2>
                </div>
                <div class="title">
                    <p></p>
                </div>
            </div>
            <ul class="sponsors-slider">
                @foreach ($sponsors as $sponsor)
                    <li><a href="#">
                            <figure><img src="{{ asset($sponsor->photo) }}" alt=""></figure>
                        </a></li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- sponsors section end -->

    <!-- news section -->
    <section class="news-section section-padding">
        <div class="container">
            <div class="news-title text-center">
                <div class="section-title">
                    <h2>Recent News</h2>
                </div>
                <div class="title">
                    <p>The activities of Chayatal Bangladesh have been reported by various media outlets.</p>
                </div>
            </div>
            <div class="row news-slider">

                @foreach ($newses as $news)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-box">
                                <div class="img-holder">
                                    <figure><a href="{{ route('news.show', $news->id) }}"><img
                                                src="{{ asset($news->photo) }}" alt=""></a></figure>
                                </div>
                                {{-- <ul class="img-content text-center">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>20 Jan, 2017</li>
                                    <li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>350 Likes</li>
                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>75 Comments</li>
                                </ul> --}}
                            </div>
                            <div class="news-content">
                                <h4><a href="{{ route('news.show', $news->id) }}">{{ $news->title }}</a></h4>
                                <div class="text">
                                    <p>{!! $news->description !!}</p>
                                </div>
                                <a href="{{$news->button_link}}" class="btn-two">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- news section end -->
@endsection
@push('js')
    <script>
        var slider = tns({
            container: '.my-slider',
            items: 1,
            mouseDrag: true,
            swipeAngle: false,
            autoplayButton:false,
            responsive: {
                640: {
                    edgePadding: 20,
                    gutter: 20,
                    items: 2
                },
                700: {
                    gutter: 30
                },
                900: {
                    items: 4
                }
            }
        });

        var newsSlider = tns({
            container: '.news-slider',
            items: 1,
            mouseDrag: true,
            swipeAngle: false,
            autoplayButton:false,
            responsive: {
                640: {
                    edgePadding: 20,
                    gutter: 20,
                    items: 2
                },
                700: {
                    gutter: 30
                },
                900: {
                    items: 3
                }
            }
        });


        $("#sslczPayBtn").click(function(e) {
            var obj = {};
            obj.currency = $('#currency').val();
            obj.amount = $('#total_amount').val();
            obj.name = "Customer Name";
            obj.email = "customer@mail.com";
            obj.address = "Customer Address";
            obj.phone = "8801XXXXXXXXX";
            $(this).prop('postdata', obj);
        });
    </script>
@endpush
