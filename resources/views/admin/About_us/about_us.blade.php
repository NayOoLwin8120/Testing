


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Home Slider</h1>

                <!-- end row -->
                <form action="{{route('admin.store_about_us',$aboutus->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" value="{{$aboutus->id}}"  name="id">
                   <div class="row mb-3">
                        <label for="title_name" class="col-sm-2 col-form-label">Title_name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$aboutus->title}}" id="title_name" name="title_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="short_title_name" class="col-sm-2 col-form-label">Short_title_name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=' {{$aboutus->short_title}}'id="short_title_name" name="short_title_name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="short_description" class="col-sm-2 col-form-label">Short_Description</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=' {{$aboutus->short_description}}'id="short_title_name" name="short_description">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Long Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="long_description" >{{$aboutus->long_description}}</textarea>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="aboutus_image" class="col-sm-2 col-form-label">Aboutus_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="aboutus_image"
                            name="aboutus_image">
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
        $('#aboutus_image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#show_image").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()
