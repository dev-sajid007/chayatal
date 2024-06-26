@extends('layouts.backend.app')
@push('css')
    <link href="{{asset('backend/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="mb-0 text-gray-800">Child</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Child</li>
        <li class="breadcrumb-item active" aria-current="page">Index</li>
    </ol>
</div>
<!-- Row -->
<div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Child List</h6>
                <a href="{{route('admin.child.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead >
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Gender</th>
                        <th>Dob</th>
                        <th>Dream</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($childs as $child)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$child->name}}</td>
                                <td>
                                    <img src="{{asset($child->image)}}" style="width: 60px" alt="">
                                </td>
                                <td>{{$child->gender}}</td>
                                <td>{{$child->dob}}</td>
                                <td>{{$child->dream}}</td>
                                <td>{{$child->country}}</td>
                                <td>
                                    <a href="{{route('admin.child.edit',$child->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a id="delete" href="{{route('admin.child.delete',$child->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Row-->
@endsection
@push('js')
    <!-- Page level plugins -->
    <script src="{{asset('backend/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>
@endpush