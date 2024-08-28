@extends('layouts.admin.app')

@section('main')
<div class="app-content-header"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Add Category</h3>
            </div>
            <div class="col-sm-6">
                <a href="{{route("category.list")}}" class="btn btn-success mb-2 float-sm-end">Category Listing</a>
            </div>
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content Header--> <!--begin::App Content-->
<div class="app-content"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row">
            <div class="col-md-12">
                    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                        <div class="card-header">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Add Category 
                                </li>
                            </ol>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form> <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3"> <label for="exampleInputEmail1" class="form-label">Email address</label> <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">
                                        We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3"> <label for="exampleInputPassword1" class="form-label">Password</label> <input type="password" class="form-control" id="exampleInputPassword1"> </div>
                                <div class="input-group mb-3"> <input type="file" class="form-control" id="inputGroupFile02"> <label class="input-group-text" for="inputGroupFile02">Upload</label> </div>
                                <div class="mb-3 form-check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Check me out</label> </div>
                            </div> <!--end::Body--> <!--begin::Footer-->
                            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                        </form> <!--end::Form-->
                    </div>
            </div> <!-- /.col -->
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content-->
@endsection
