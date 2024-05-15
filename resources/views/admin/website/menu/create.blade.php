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
        <h3 class="mb-0 text-gray-800">Menu</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Menu</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Menu</h6>
                    <a href="{{ route('admin.website.banner.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.website.menu.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Select Page</label>
                            <select name="" id="" class="form-control">
                                <option value="">Page</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="url">URL for menu</label>
                            <input  id="menu_url" type="text" class="form-control" name="url" required>
                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <label for="target">Open In</label>
                            <select class="custom-select form-control-sm" name="target" id="target">
                                <option value="_self" @isset($menuItem) {{$menuItem->target === '_self'? "selected":""}} @endisset>Same Tab/Window</option>
                                <option value="_blank" @isset($menuItem) {{$menuItem->target === '_blank'? "selected":""}} @endisset>New Tab</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary" style="margin-top: 10px">
                                @isset($menuItem)
                                    <i class="fas fa-arrow-circle-up"></i>
                                    Update
                                @else
                                    <i class="fa fa-plus-circle"></i>
                                    Create
                                @endisset
                            </button>
                        </div>
                    </form>
                </div>

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
