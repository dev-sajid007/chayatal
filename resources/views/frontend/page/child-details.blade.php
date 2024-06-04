@extends('layouts.frontend.app')

@section('content')

<section class="our-cause causes-details">
    <div class="container">
        <div class="row">
            <div class="content-side col-md-10 col-sm-12 col-xs-12">
                <div class="single-item">
                    <div class="img-holder">
                        <figure><img style="width:260px" height="250" src="{{asset($child->image)}}" alt=""></figure>
                    </div>
                    <div class="cause-content">
                        <div class="content-side-title">{{$child->name}}</div>
                        <ul class="meta">
                            <li>Date Of Birth: {{$child->dob}}</li>
                            <li>Gender: {{$child->gender}}</li>
                          
                        </ul>
                        <ul class="meta">
                            <li>Country: {{$child->country}}</li>
                            <li>Amount: {{$child->amount}}</li>
                        </ul>
                        <div class="text">
                            {!! $child->description !!}
                        </div>
                        <button class="btn-one donate-box-btn">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection