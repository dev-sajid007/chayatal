
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
                            <figure><img src="{{asset($project->photo)}}" alt=""></figure>
                        </div>
                        <div class="lower-content">
                            <ul class="meta">
                                @php
                                    $date = new DateTime($project->created_at);
                                @endphp
                            </ul>
                            <div class="single-blog-title">{{$project->title}}</div>
                            <div class="text">
                                {!! $project->description !!}
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