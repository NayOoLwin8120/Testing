


@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Add Blog Category</h1>

                <!-- end row -->
                <form action="{{route('admin.blogcategory_store')}}" id="myForm" method="post" enctype="multipart/form-data">
            @csrf

                   <div class="row mb-3">
                        <label for="category_name" class="col-sm-2 col-form-label">Blog_Category_Name </label>
                        <div class="col-sm-10">
                            <input class="form-control form-group" type="text" value="" id="category_name" name="category_name">
                            @error('category_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>










                   <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Add Blog Category">
                </form>



            </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<!--tinymce js-->
<script src="{{asset('backend/assets/libs/tinymce/tinymce.min.js')}}"></script>

<!-- init js -->
<script src="{{asset('backend/assets/js/pages/form-editor.init.js')}}"></script>
<script src="{{asset('backend/assets/js/validate.min.js')}}"></script>
<script type="text/javascript">
 $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                },
            },
            messages :{
                category_name: {
                    required : 'Please Enter Blog Category',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>



@endsection()

