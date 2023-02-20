


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Edit Blog_Category</h1>

                <!-- end row -->
                <form action="{{route('admin.update_blog_category',$category->id)}}" method="post" enctype="multipart/form-data">
            @csrf

                 <input type="hidden" name="id" value="{{$category->id}}">

                   <div class="row mb-3">
                        <label for="blog_category_name" class="col-sm-2 col-form-label">Blog_Category_Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$category->blog_category_name}}" id="blog_category_name" name="blog_category_name">
                            @error('blog_category_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Update Blog_Category">
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

