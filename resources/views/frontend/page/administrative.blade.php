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
                            </div>
                            <div class="lower-content">
                                <h4 style="font-size: 14px!important">{{@$data->name}}</h4>
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
