
@extends('layouts.frontend.app')

@section('content')
<section class="news-section section-padding">
    <div class="container">
        <div class="news-title text-center">
            <div class="section-title"><h2>Audit Reports</h2></div>
            <div class="title"><p></p></div>
        </div>
        <div class="row">
            @foreach ($reports as $report)
                
            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px">
                <div class="single-item">
                    <div class="img-box">
                        <div class="img-holder">
                            <figure><a target="blank" href="{{$report->pdf}}"><img src="{{asset($report->photo)}}" alt=""></a></figure>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4><a target="blank" href="{{$report->pdf}}">{{$report->title}}</a></h4>
                    </div>
                </div>
            </div>

            @endforeach

         
        </div>
    </div>
</section>
@endsection