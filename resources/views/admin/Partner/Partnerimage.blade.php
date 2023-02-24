


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Aboutus Multi Image</h1>

                <!-- end row -->
                <form action="{{route('admin.store_partnerimage')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <input class="form-control" type="hidden" value="{{$aboutus->id}}"  name="id"> --}}









                    <div class="row mb-3">
                        <label for="multiimage" class="col-sm-2 col-form-label">Image :</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="multiimage"
                            name="multiimage[]"
                            multiple>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="show_image" src="{{asset('admin/no_image.jpg')}}" alt="Show Slider Imgae" >
                        </div>
                    </div>
                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Add Multiimage ">
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
        $('#multiimage').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#show_image").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()
{{-- src="{{(!empty($aboutus->aboutus_image)) ? url($homeslider->aboutus_image) : asset('admin/no_image.jpg')}}"  --}}
