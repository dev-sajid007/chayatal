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
        <h3 class="mb-0 text-gray-800">Website Info</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Website Info</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Website Info</h6>
                </div>
                <form action="{{route('admin.website.web-info.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8 float-left">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $webInfo->title ?? old('title') }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Upload Logo <code>(Size: 228 * 78)</code></label>
                            <input type="file" name="logo" class="dropify @error('logo') is-invalid @enderror">
                            @error('logo')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if(isset($webInfo->logo))
                            <div class="form-group">
                                <label for="">Old Photo</label><br>
                                <img src="{{asset($webInfo->logo)}}" width="120" alt="">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Upload Favicon <code>(Size: 40 * 40)</code></label>
                        <input type="file" name="favicon" class="dropify @error('favicon') is-invalid @enderror">
                        @error('favicon')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    @if(isset($webInfo->favicon))
                        <div class="form-group">
                            <label for="">Old Photo</label><br>
                            <img src="{{asset($webInfo->favicon)}}" width="120" alt="">
                    @endif
                    <div class="form-group">
                        <button  type="submit" class="btn btn-primary" style="margin-top: 36px">
                                <i class="fa fa-save"></i>
                                Submit
                        </button>
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
                height: 250
            });

       

        });
    </script>
@endpush
