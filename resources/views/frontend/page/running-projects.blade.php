
@extends('layouts.frontend.app')

@section('content')
<section class="news-section section-padding">
    <div class="container">
        <div class="news-title text-center">
            <div class="section-title"><h2>Running Projects</h2></div>
            <div class="title"><p></p></div>
        </div>
        <div class="row">
            @foreach ($projects as $project)
                
            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px">
                <div class="single-item">
                    <div class="img-box">
                        <div class="img-holder">
                            <figure><a href="{{route('single-project',$project->id)}}"><img src="{{asset($project->thumbnail)}}" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4><a href="{{route('single-project',$project->id)}}">{{$project->title}}</a></h4>
                        <a href="{{route('single-project',$project->id)}}" class="btn-two">Details</a>
                    </div>
                </div>
            </div>

            @endforeach

         
        </div>
    </div>
</section>
@endsection