
@extends('layouts.frontend.app')

@section('content')
 <!-- blog single page -->
 <section class="sidebar-page-container blog-page blog-single causes-details">
    <div class="container">
        <div class="row">
            <div class="content-side col-md-12">
                <div class="blog-single-section">
                    <div class="news-style-one">
                        <div class="img-box">
                            <figure><img src="{{asset($news->photo)}}" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="meta">
                                @php
                                    $date = new DateTime($news->created_at);
                                @endphp
                                <li class=""><i class="fa fa-calendar"></i>{{$date->format('d') }} {{$date->format('M') }}, {{$date->format('Y') }}</li>
                            </ul>
                            <div class="single-blog-title">{{$news->title}}</div>
                            <div class="text">
                                {!! $news->description !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog single page end -->
@endsection