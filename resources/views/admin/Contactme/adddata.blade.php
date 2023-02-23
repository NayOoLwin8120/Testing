


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Add Contact Me Data</h1>

                <!-- end row -->
                <form action="{{route('admin.contactme_store')}}" method="post" enctype="multipart/form-data">
            @csrf



                    <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="footerid">Your Email</label>
                                    <div class="col-sm-10">
                                        <select name="footer_id" class="form-select" id="footerid" >
                                            <option selected="" value="">Choose Your Email</option>
                                            @foreach($footer as $category)
                                            <option value="{{$category->id}}">{{$category->email}}</option>
                                            @endforeach
                                        </select>
                                         @error('footer_id')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>

                                </div>






                    <div class="row mb-3">
                        <label for="elm2" class="col-sm-2 col-form-label">Blog_Description</label>
                        <div class="col-sm-10">
                            <textarea id="elm2" class="form-control" name="location" rows="3"></textarea>
                            @error('location')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>




                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="ADD My Data ">
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

