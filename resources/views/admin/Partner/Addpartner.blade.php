


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Add Partner</h1>

                <!-- end row -->
                <form action="{{route('admin.partner_store')}}" method="post" enctype="multipart/form-data">
            @csrf


                   <div class="row mb-3">
                        <label for="partner_title " class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="partner_title" name="title">
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>







                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Blog_Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="short_description" ></textarea>
                            @error('short_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>





                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Update Blog ">
                </form>



            </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--tinymce js-->
<script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>



@endsection()

