@extends('layouts.admin.app')

@section('main')
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Category Listing</h3>
            </div>
            <div class="col-sm-6">
                <a href="{{route("category.add")}}" class="btn btn-success mb-2 float-sm-end">Add Category</a>
            </div>
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content Header--> <!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Category Listing
                            </li>
                        </ol>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 20px">#</th>
                                    <th style="width: 20px">Name</th>
                                    <th style="width: 20px">Slug</th>
                                    <th style="width: 20px">Status</th>
                                    <th style="width: 20px">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @empty(!$categories)
                                   @foreach ($categories as $key=>$category)
                                    <tr class="align-middle">
                                        <td>{{$key+1}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{$category->category_slug}}</td>
                                        <td>
                                            @if ($category->category_status==0)
                                                <span class="badge text-bg-danger">Pending</span>
                                            @else
                                            <span class="badge text-bg-success">Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route("category.add")}}" class="btn btn-warning mb-0">Add Category</a>
                                            <a href="{{route("category.add")}}" class="btn btn-success mb-0">Add Category</a>
                                            <a href="{{route("category.add")}}" class="btn btn-danger mb-0">Add Category</a>
                                        </td>
                                    </tr>
                                   @endforeach
                                @endempty
                            </tbody>
                        </table>
                    </div> <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                        </ul>
                    </div>
                </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content-->
@endsection
