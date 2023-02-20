


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Add Portfilio</h1>

                <!-- end row -->
                <form action="{{route('admin.blog_store')}}" method="post" enctype="multipart/form-data">
            @csrf

                   <div class="row mb-3">
                        <label for="blog_title" class="col-sm-2 col-form-label">Blog Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="blog_title" name="blog_title">
                            @error('blog_title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="blog_button" class="col-sm-2 col-form-label">Blog_Button</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="blog" name="blog_button">
                            @error('blog_button')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>




                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Blog_Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="blog_description" ></textarea>
                            @error('blog_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="blog_image" class="col-sm-2 col-form-label">Blog_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="blog_image"
                            name="blog_image">
                            @error('blog_image')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="show_image" src="{{(!empty($aboutus->aboutus_image)) ? url($homeslider->aboutus_image) : asset('admin/no_image.jpg')}}" alt="Show Slider Imgae">
                        </div>
                    </div>
                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Home Slider ">
                </form>



            </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--tinymce js-->
<script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>

<script type="text/javascript">

    $(document).ready(function(){
        $('#blog_image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#show_image").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()

