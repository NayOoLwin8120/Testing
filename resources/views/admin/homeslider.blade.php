
@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Home Slider</h1>

                <!-- end row -->
                <form action="{{route('admin.storehomeslider',$homeslider->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" value="{{$homeslider->id}}"  name="id">
                   <div class="row mb-3">
                        <label for="title_name" class="col-sm-2 col-form-label">Title_name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$homeslider->title}}" id="title_name" name="title_name">
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label for="short_title_name" class="col-sm-2 col-form-label">Short_title_name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=' {{$homeslider->short_title}}'id="short_title_name" name="short_title_name">
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label for="slider_video" class="col-sm-2 col-form-label">Slider_video</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="slider_video" value='{{$homeslider->video_url}}' id="slider_video">
                        </div>
                    </div>
                    </div>
                     <div class="row mb-3">
                        <label for="slider_image" class="col-sm-2 col-form-label">Slider_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="slider_image"
                            name="slider_image">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="show_image" src="{{(!empty($homeslider->slide_image)) ? url($homeslider->slide_image) : asset('admin/no_image.jpg')}}" alt="Show Slider Imgae">
                        </div>
                    </div>
                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Home Slider ">
                </form>



            </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#slider_image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#show_image").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()
