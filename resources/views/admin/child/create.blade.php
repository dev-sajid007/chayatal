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
        <h3 class="mb-0 text-gray-800">Child</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Child</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Child</h6>
                    <a href="{{ route('admin.child.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <form method="POST"
                    action="{{ isset($child) ? route('admin.child.update', $child->id) : route('admin.child.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 float-left">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $child->name ?? old('name') }}" required>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Gender</label>
                                        <select class="form-control" name="gender" id="" required>
                                            <option value="male">Male</option>
                                            <option value="male">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Date Of Birth</label>
                                        <input type="date" name="dob" class="form-control" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Dream</label>
                                        <input type="text" name="dream" class="form-control" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Country</label>
                                        <input type="text" name="country" class="form-control" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Amount</label>
                                        <input type="number" name="amount" class="form-control" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Image</label>
                                        <input type="file" name="image" class="form-control dropify" id="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <textarea name="description" class="from-control" id="summernote" cols="30" rows="10"></textarea>
                                    </div>



                                    <button type="submit" class="btn btn-primary mt-3">
                                         <i class="fa fa-save"></i>
                                       
                                         @if (@$child)
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
