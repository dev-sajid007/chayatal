
@extends('layouts.frontend.app')

@section('content')
<section class="news-section section-padding">
    <div class="container">
        <div class="news-title text-center">
            <div class="section-title"><h2>Chayatal News</h2></div>
            <div class="title"><p></p></div>
        </div>
        <div class="row">
            @foreach ($newses as $news)
                
            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px">
                <div class="single-item">
                    <div class="img-box">
                        <div class="img-holder">
                            <figure><a href="{{route('single-project',$news->id)}}"><img src="{{asset($news->photo)}}" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4><a href="{{route('single-news',$news->id)}}">{{$news->title}}</a></h4>
                        <a href="{{route('single-news',$news->id)}}" class="btn-two">Read More</a>
                    </div>
                </div>
            </div>

            @endforeach

         
        </div>
    </div>
</section>
@endsection