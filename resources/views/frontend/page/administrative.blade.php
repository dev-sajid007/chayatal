@extends('layouts.frontend.app')

@section('content')
    <!-- our-volunteers section -->
    <section class="our-volunteers team-page">
        <div class="container">
            <div class="row">
                @foreach ($datas as $data)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="img-holder">
                                <figure><img src="{{asset(@$data->photo)}}" alt=""></figure>
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
                                <h4><a href="single-volunteer.html">{{@$data->name}}</a></h4>
                                <span>{{@$data->designation}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- our-volunteers section end -->
@endsection