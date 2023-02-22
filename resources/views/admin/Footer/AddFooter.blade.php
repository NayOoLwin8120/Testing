


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Add Footer</h1>

                <!-- end row -->
                <form action="{{route('admin.footer_store')}}" method="post" enctype="multipart/form-data">
            @csrf


                   <div class="row mb-3">
                        <label for="phonenumber" class="col-sm-2 col-form-label">Phone_number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="+" id="phonenumber" name="phonenumber">
                            @error('phonenumber')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="country" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="country" name="country" >
                            @error('country')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>





                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Footer_Short_Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm1" name="short_description" ></textarea>
                            @error('short_description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="elm2" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea id="elm2" name="address" ></textarea>
                            @error('address')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="emailname" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="emailname" name="emailname" value="">
                            @error('emailname')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="facebook" class="col-sm-2 col-form-label">Facebook_Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="facebook" name="facebook" >
                            @error('facebook')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="twitter" class="col-sm-2 col-form-label">Twitter_Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="twitter" name="twitter" >
                            @error('twitter')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="linkedin" name="linkedin" >
                            @error('linkedin')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="instrgram" class="col-sm-2 col-form-label">Instrgram Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="instrgram" name="instrgram" >
                            @error('instrgram')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="copyright" class="col-sm-2 col-form-label">Copy Right</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="copyright" name="copyright" >
                            @error('copyright')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>




                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Add Footer">
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

