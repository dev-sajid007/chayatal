@extends('layouts.backend.app')
@push('css')
    <!--Dropify for image upload-->
    
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }

    </style>
    <!--Dropify for image upload-->
@endpush
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0 text-gray-800">Event</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Event</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Event</h6>
                    <a href="{{ route('admin.website.event.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <form method="POST"
                    action="{{ isset($event) ? route('admin.website.event.update', $event->id) : route('admin.website.event.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                                <div class="card-body row">
                                    <div class="form-group col-12 col-md-4">
                                        <label for="name">Title</label>
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title"
                                            value="{{ $event->title ?? old('title') }}" autofocus>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="date">Date</label>
                                        <input id="date" type="date"
                                            class="form-control @error('date') is-invalid @enderror" name="date"
                                            value="{{ $event->date ?? old('date') }}" autofocus>
                                        @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12 col-md-4">
                                        <label for="start_time">Start Time</label>
                                        <input id="start_time" type="time"
                                            class="form-control @error('start_time') is-invalid @enderror" name="start_time"
                                            value="{{ $event->start_time ?? old('start_time') }}" autofocus>
                                        @error('start_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="form-group col-12 col-md-6">
                                                <label for="end_time">End Time</label>
                                                <input id="end_time" type="time"
                                                    class="form-control @error('end_time') is-invalid @enderror" name="end_time"
                                                    value="{{ $event->end_time ?? old('end_time') }}" autofocus>
                                                @error('end_time')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="form-group col-12 col-md-6">
                                                <label for="location">Location</label>
                                                <input id="location" type="text"
                                                    class="form-control @error('location') is-invalid @enderror" name="location"
                                                    value="{{ $event->location ?? old('location') }}" placeholder="Enter Location" autofocus>
                                                @error('location')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
    
                                            <div class="form-group col-12">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="6" class="form-control @error('description') is-invalid @enderror" name="description"
                                                     placeholder="Enter Description" autofocus>{{@$event->description}}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-md-4">
                                        <label for="photo">Photo</label>
                                        <input type="file" class="form-control dropify @error('photo') is-invalid @enderror" data-default-file="{{isset($event->photo) ? asset($event->photo) : ''}}"  name="photo" data-height="235" />
                                        @error('photo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3">
                                            <i class="fa fa-save"></i>
                                          
                                            @if (@$event)
                                             Update
                                            @else
                                             Submit
                                            @endif
                                            
                                       </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Row-->
@endsection
@push('js')
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            //Dropify Image Upload
            $('.dropify').dropify();
            //Select2
            $('.select2').select2();
        });
    </script>
@endpush
