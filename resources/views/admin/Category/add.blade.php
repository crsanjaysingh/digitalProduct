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
                        <form id="categoryForm" action="{{route("category.store")}}" method="POST">
                            <!--begin::Body-->
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="categoryName" class="form-label">Category Name</label>
                                    <input type="text" name="categoryName" id="categoryName" class="form-control" placeholder="Enter Category Name">
                                    @error('categoryName')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <span class="generate-slug badge text-bg-success">Generate Slug</span>
                                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug">
                                    @error('slug')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="10" placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!--end::Footer-->
                        </form>
                        
                    </div>
            </div> <!-- /.col -->
        </div> <!--end::Row-->
    </div> <!--end::Container-->
</div> <!--end::App Content-->
@endsection
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script>
$(document).ready(function () {
    $('#categoryForm').validate({ // initialize the plugin
        rules: {
            categoryName: {
                required: true,
            },
            slug: {
                required: true,
            },
            description: {
                required: true,
                minlength: 5
            }
        }
    });
});

// $("#categoryName").on("keyup change", function(e) {
//     var categoryName = $("#categoryName").val();
//     if(categoryName.length>3){
        
//     }
// })
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms =
            document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script> <!--end::JavaScript-->
@endpush
