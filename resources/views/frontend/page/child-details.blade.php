@extends('layouts.frontend.app')
@section('content')
<section class="our-cause causes-details">
    <div class="container">
        <div class="row">
            <div class="content-side col-md-4 col-sm-12 col-xs-12">
                <div class="card" >
                    <div class="card-body" style="border: 1px solid #ddd;padding:45px">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img style="width:260px" height="250" src="{{asset($child->image)}}" alt=""></figure>
                            </div>
                            <div class="cause-content">
                                
                                <div class="content-side-title">{{$child->name}}</div>
                                <ul>
                                    <li>Date Of Birth: {{$child->dob}}</li>
                                    <li>Dream: {{$child->dream}}</li>
                                    <li>Country: {{$child->country}}</li>
                                    <li>Amount: {{$child->amount}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="text">
                    {{$child->description}}
                </div>
                <a href="{{route('donation')}}" class="btn-one donate-box-btn">Donate Now</a>
            </div>
        </div>
    </div>
</section>
@endsection