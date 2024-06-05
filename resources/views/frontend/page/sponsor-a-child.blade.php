@extends('layouts.frontend.app')

@section('content')
<section class="our-cause section-padding text-center">
    <div class="container">
        <div class="cause-title">
            <div class="section-title">
                <h2>Sponsor a <span>Child</span></h2>
            </div>
            <div class="title">
                <p>By sponsoring a child you can help a child to attend school to get his education without any risk of
                    dropout.
                    In our child sponsorship program you can provide support for a child and his community.</p>
            </div>
        </div>
        <div class="row my-slider">
            @foreach ($childs as $child)
                <div class="col-md-3">
                    <div class="single-item">
                        <div class="img-holder">
                            <a href="{{ route('childs.show', $child->id) }}">
                                <figure><img style="width: 260px;height:250px" src="{{ asset($child->image) }}"
                                        alt=""></figure>
                                <div class="overlay">
                                </div>
                            </a>
                        </div>
                        @php
                            $diff = date('Y') - date('Y', strtotime($child->dob));
                        @endphp
                        <div class="cause-content">
                            <ul class="meta">
                                <li>Age: {{ $diff }}</li>
                                <li>Gender: {{ $child->gender }}</li>
                                <li>Dream: {{ $child->dream }}</li>
                            </ul>
                            <h4><a href="{{ route('childs.show', $child->id) }}">{{ $child->name }}</a></h4>
                            <a href="{{ route('childs.show', $child->id) }}" class="btn-one donate-box-btn">Sponsor
                                Me</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection