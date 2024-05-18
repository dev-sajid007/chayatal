@extends('layouts.backend.app')

@push('css')
    <link href="{{asset('backend/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="mb-0 text-gray-800">Executive</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Executive</li>
        <li class="breadcrumb-item active" aria-current="page">Index</li>
    </ol>
</div>

<div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Executive List</h6>
                <a href="{{route('admin.executive.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead >
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($executives as $executive)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$executive->name}}</td>
                                <td>{{$executive->designation}}</td>
                          
                                <td>
                                    <a href="{{route('admin.executive.edit',$executive->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                    <a id="delete" href="{{route('admin.executive.delete',$executive->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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