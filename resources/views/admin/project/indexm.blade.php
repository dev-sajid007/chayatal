@extends('layouts.backend.app')
@push('css')
    <link href="{{asset('backend/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/admin/vendor/switch-button/css/bootstrap-switch-button.min.css')}}">

    <style>
        .table td {
            vertical-align: middle;
        }
    </style>
@endpush
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="mb-0 text-gray-800">Project</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Project</li>
        <li class="breadcrumb-item active" aria-current="page">Index</li>
    </ol>
</div>
<!-- Row -->
<div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Project List</h6>
                <a href="{{route('admin.project.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead >
                    <tr>
                        <th>#</th>
                        <th width="10%">Thumbnail</th>
                        <th width="10%">Photo</th>
                        <th width="15%">Title</th>
                        <th>Description</th>
                        <th width="10%">Type</th>
                        <th width="10%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr class="align-middle">
                         <td>{{$loop->iteration}}</td>
                         <td>
                             <img src="{{asset($project->thumbnail)}}" class="img-thumbnail" style="width: 120px" alt="">
                         </td>
                         <td>
                             <img src="{{asset($project->photo)}}" class="img-thumbnail" style="width: 120px" alt="">
                         </td>
                         <td>{{$project->title}}</td>
                         <td>{!!$project->description!!}</td>
                         <td>{{ucfirst($project->type)}}</td>
                         
                         <td>
                             <a href="{{route('admin.project.edit',$project->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                             <a id="delete" href="{{route('admin.project.delete',$project->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
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
    <script src="{{asset('backend/admin/vendor/switch-button/js/bootstrap-switch-button.min.js')}}"></script>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover

            $('input[name = toggle]').change(function(){
                var mode = $(this).prop('checked');
                var id = $(this).val();
                $.ajax({
                    url :'{{route('admin.website.news.status')}}',
                    type:'post',
                    data:{
                        _token: '{{csrf_token()}}',
                        mode:mode,
                        id:id
                    },
                    success:function (response) {
                        console.log(response.msg);
                        if (response.status == 'true'){
                            toastr.success(response.msg);
                        }
                        else{
                            toastr.error('The was an error');
                        }


                    }
                })
            });
        });
    </script>
@endpush