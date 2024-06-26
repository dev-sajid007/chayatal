
@extends('layouts.frontend.app')

@section('content')
<section class="news-section section-padding">
    <div class="container">
        <div class="news-title text-center">
            <div class="section-title"><h2>Chayatal Media</h2></div>
            <div class="title"><p></p></div>
        </div>
        <div class="row">
            @foreach ($medias as $media)
                
            <div class="col-md-4 col-sm-6 col-xs-12 " style="margin-top: 20px">
                <div class="single-item">
                    <div class="img-box">
                        <div class="img-holder">
                            <iframe  width="370" height="250" src="https://www.youtube.com/embed/{{$media['code']}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

         
        </div>
    </div>
</section>
@endsection