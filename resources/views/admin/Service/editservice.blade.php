


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Edit Service</h1>

                <!-- end row -->
                <form action="{{route('admin.updateservice'),$servicedata->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" value="{{$servicedata->id}}"  name="id">
                   <div class="row mb-3">
                        <label for="title_name" class="col-sm-2 col-form-label">Service Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$servicedata->title}}" id="title_name" name="title">

                        </div>
                    </div>





                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Service Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="description" >{{$servicedata->description}}</textarea>

                        </div>
                    </div>

                     <div class="row mb-3">
                        <label for="servicebutton" class="col-sm-2 col-form-label">Button</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value='{{$servicedata->button}} 'id="servicebutton" name="button">

                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Portfilio_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="image"
                            name="service_image">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="show_image" src="{{!empty($servicedata->service_image) ? url($servicedata->service_image):url('admin/no_image.jpeg')}}" alt="Show Slider Imgae">
                        </div>
                    </div>
                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Update Service ">
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
        $('#image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#show_image").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()
