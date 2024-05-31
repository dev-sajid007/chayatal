@extends('layouts.backend.app')
@push('css')
    <!--Dropify for image upload-->
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }

    </style>
    <!--Dropify for image upload-->
@endpush
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0 text-gray-800">News</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">News</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create News</h6>
                    <a href="{{ route('admin.website.news.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <form method="POST"
                    action="{{ isset($news) ? route('admin.website.news.update', $news->id) : route('admin.website.news.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                                <div class="card-body row">
                                    <div class="form-group col-12">
                                        <label for="name">Title</label>
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter Title"
                                            value="{{ $news->title ?? old('title') }}" autofocus>
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="row col-12">
                                        <div class="form-group col-12 col-md-6">
                                            <label for="">Content</label>
                                            <textarea  class="form-control @error('description') is-invalid @enderror" name="description" id="summernote" cols="30" rows="20"  value="">{{ $news->description ?? old('description') }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                        <div class="form-group col-12 col-md-6">
                                            <label for="photo">Photo</label>
                                            <input type="file" class="form-control dropify @error('photo') is-invalid @enderror" data-default-file="{{isset($news->photo) ? asset($news->photo) : ''}}"  name="photo" data-height="235" />
                                            @error('photo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3">
                                            <i class="fa fa-save"></i>
                                          
                                            @if (@$news)
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
    integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        //Dropify Image Upload
        $('.dropify').dropify();
        //Select2
        $('.select2').select2();
        $('#summernote').summernote({
            placeholder: 'Write Here .....',
            tabsize: 2,
            height: 195
        });
    });
</script>
@endpush

