
@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Edit Profile</h1>

                <!-- end row -->
                <form action="{{route('admin.storeprofile')}}" method="post" enctype="multipart/form-data">
            @csrf
                   <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$admindata->name}}" id="name" name="name">
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" value=' {{$admindata->email}}'id="email" name="email">
                        </div>
                    </div>
                     <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="username" value='{{$admindata->username}}' id="username">
                        </div>
                    </div>
                    </div>
                     <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Your Profile</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file"  id="image"
                            name="image">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                         <img class="w-25 " id="uploadimg" src="{{!empty($admindata->image)? url('admin/profileimage/'.$admindata->image): url('admin/no_image.jpg')}}" alt="Upload Imgae">
                        </div>
                    </div>
                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Update Your Profile">
                </form>



            </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader=new FileReader();
            reader.onload=function (e){
               $("#uploadimg").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>

@endsection()
