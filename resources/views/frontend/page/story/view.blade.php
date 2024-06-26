
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
                            <figure><img src="{{asset($story->photo)}}" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            <div class="single-blog-title">{{$story->title}}</div>
                            <div class="text">
                                {!! $story->description !!}
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