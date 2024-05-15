@extends('layouts.backend.app')
@push('css')
    <link href="{{asset('backend/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css">
 
    <style>
    .menu-builder .dd {
        position: relative;
        display: block;
        margin:0;
        padding: 0;
        max-width: inherit;
        list-style: none;
        font-size: 13px;
        line-height: 20px;
    }
    .menu-builder .dd .item_actions{
        z-index: 9;
        position: relative;
        top: 6px;
        right: 10px;
    }
    .menu-builder .dd .item_actions .edit{
        margin-right: 5px;
    }
    .menu-builder .dd-handle{
        display: block;
        height: 50px;
        margin: 5px 0;
        padding: 14px 25px;
        color: #333;
        text-decoration: none;
        font-weight: 700;
    }
    </style>
    
@endpush
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="mb-0 text-gray-800">Menu</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Menu</li>
        <li class="breadcrumb-item active" aria-current="page">Index</li>
    </ol>
</div>
<!-- Row -->
<div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Menu List</h6>
                <a href="{{route('admin.website.menu.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
            <div class="table-responsive p-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-builder">
                            <div class="dd">

                                <ol class="dd-list">

                                    @forelse ($menus as $menu)
                                        <li class="dd-item" data-id="{{$menu->id}}">
                                            <div class="item_actions float-right">
                                                <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <a id="delete" href="{{route('admin.website.menu.delete',$menu->id)}}" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                            </div>
                                            <div class="dd-handle">{{$menu->title}}</div>
                                            @if(!$menu->childs->isEmpty())
                                                <ol class="dd-list">
                                                    @foreach($menu->childs as $childItem)
                                                        <li class="dd-item" data-id="{{$childItem->id}}">
                                                            <div class="item_actions float-right">
                                                                <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                                <a id="delete" href="{{route('admin.website.menu.delete',$childItem->id)}}" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                                            </div>
                                                            <div class="dd-handle">{{$childItem->title}}</div>
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            @endif
                                        </li>
                                    @empty
                                        <div class="text-center">
                                            <strong class="badge badge-danger" >No Item Found :)</strong>
                                        </div>
                                    @endforelse
                                  
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('.dd').nestable({maxDepth:2 });

            $('.dd').on('change',function (e){
                
                $.post('{{route('admin.website.menu.order')}}',{
                    order: JSON.stringify($('.dd').nestable('serialize')),
                    _token : '{{csrf_token()}}'
                },function (data){
                    console.log(data);
                    toastr.success('Menus Order Updated :)');
                });
             });

        });
    </script>
@endpush