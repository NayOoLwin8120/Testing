


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Add Service</h1>

                <!-- end row -->
                <form action="{{route('admin.service_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <input class="form-control" type="hidden" value="{{$aboutus->id}}"  name="id"> --}}
                   <div class="row mb-3">
                        <label for="title_name" class="col-sm-2 col-form-label">Service Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" id="title_name" name="title">
                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>





                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Service Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="description" ></textarea>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                     <div class="row mb-3">
                        <label for="servicebutton" class="col-sm-2 col-form-label">Button</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value=' 'id="servicebutton" name="button">
                            @error('button')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Portfilio_image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="image"
                            name="service_image">
                            @error('service_image')
                            <span class="text-danger">{{$message}}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="show_image" src="{{ asset('admin/no_image.jpg')}}" alt="Show Slider Imgae">
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
