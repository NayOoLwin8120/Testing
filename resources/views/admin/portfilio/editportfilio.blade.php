


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Edit Portfilio</h1>

                <!-- end row -->
                <form action="{{route('admin.updateportfilio'),$portfilio->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" value="{{$portfilio->id}}"  name="id">
                   <div class="row mb-3">
                        <label for="title_name" class="col-sm-2 col-form-label">Prtfilio_Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$portfilio->portfilio_name}}" id="portfilio_name" name="portfilio_name">
                            @error('portfilio_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="portfilio_title" class="col-sm-2 col-form-label">Portfilio_title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$portfilio->portfilio_title}}" id="portfilio_title" name="portfilio_title">
                            @error('portfilio_title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="portfilio_button" class="col-sm-2 col-form-label">Portfilio_Button</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=" {{$portfilio->portfilio_button}}" id="portfilio_button" name="portfilio_button">
                            @error('portfilio_button')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Portfilio_Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="portfilio_description" >{{$portfilio->portfilio_description}}</textarea>
                            @error('portfilio_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="portfilio_image" class="col-sm-2 col-form-label">Portfilio_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="portfilio_image"
                            name="portfilio_image">
                            @error('portfilio_image')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="show_image" src="{{(!empty($portfilio->portfilio_image)) ? url($portfilio->portfilio_image) : asset('admin/no_image.jpg')}}" alt="Show Slider Imgae">
                        </div>
                    </div>
                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Update Portfilio ">
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
        $('#portfilio_image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#show_image").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()
