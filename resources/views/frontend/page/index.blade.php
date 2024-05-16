
@extends('layouts.frontend.app')

@section('content')
<section class="welcome-section section-padding">
    <div class="container">
        <div class="welcome-title text-center">
            <div class="section-title"><h2>{{$page->title}}</h2></div>
            <div class="title"><p></p></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="welcome-content">
                    {{-- <div class="title-text">{{$page->title}}</div> --}}
                    <div class="text">
                        {!! $page->content !!}
                    </div>
                  
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="video-gallery">
                    <img src="{{asset($page->image)}}" alt="Awesome Video Gallery">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection