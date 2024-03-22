@extends('layouts.backend.app')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class="mb-0 text-gray-800">Tag</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item">Tag</li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Create Tag</h6>
                    <a href="{{ route('admin.tag.index') }}" class="btn btn-dark"><i
                            class="fa fa-arrow-left"></i> Back</a>
                </div>
                <form method="POST"
                    action="{{ isset($tag) ? route('admin.tag.update', $tag->id) : route('admin.tag.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 float-left">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $tag->name ?? old('name') }}" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">
                                         <i class="fa fa-save"></i>
                                       
                                         @if (@$tag)
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

@endpush
