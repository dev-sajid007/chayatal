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
        <h3 class="mb-0 text-gray-800">Sponsor</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Sponsor</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Sponsor</h6>
                    <a href="{{ route('admin.website.sponsor.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <form action="{{isset($sponsor)? route('admin.website.sponsor.update',$sponsor->id): route('admin.website.sponsor.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-8 float-left">
                        <div class="form-group">
                            <label for="">Upload Photo <code>(Size: 370 * 250)</code></label>
                            <input type="file" name="photo" class="dropify @error('photo') is-invalid @enderror">
                            @error('photo')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @if(isset($sponsor->photo))
                            <div class="form-group">
                                <label for="">Old Photo</label><br>
                                <img src="{{asset($sponsor->photo)}}" width="120" alt="">
                        @endif
                        <div class="form-group">
                            <label for="">Status</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="status" name="status" @isset($sponsor) {{$sponsor->status == 1? 'checked' : '' }} @endisset>
                                <label class="custom-control-label" for="status">Active</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary" style="margin-top: 10px">
                                @isset($sponsor)
                                    <i class="fa fa-arrow-circle-up"></i>
                                    Update
                                @else
                                    <i class="fa fa-save"></i>
                                    Submit
                                @endisset
                            </button>
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
                height: 250
            });

       

        });
    </script>
@endpush
