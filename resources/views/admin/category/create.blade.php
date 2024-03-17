@extends('layouts.backend.app')
@push('css')
    <!--Dropify for image upload-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: initial;
        }

    </style>
    <!--Dropify for image upload-->
@endpush
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0 text-gray-800">Category</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Category</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
                    <a href="{{ route('category.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <form method="POST"
                    action="{{ isset($category) ? route('category.update', $category->id) : route('category.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 float-left">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $category->name ?? old('name') }}" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">
                                         <i class="fa fa-save"></i>
                                       
                                         @if (@$category)
                                          Update
                                         @else
                                          Submit
                                         @endif
                                         
                                    </button>
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
    <script>
        $(document).ready(function() {
            //Dropify Image Upload
            $('.dropify').dropify();
            //Select2
            $('.select2').select2();

       

        });
    </script>
@endpush
