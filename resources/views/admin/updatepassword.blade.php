
@extends('admin.dashboard')
@section('maincontent')

<div class="main-content">

    <div class="page-content">
        <div class="card-body">

                <h1 class="card-title text-center mb-3">Change Password Page</h1>
                @if (count($errors))
                 @foreach ($errors -> all() as $error)
                  <div class="alert alert-danger" role="alert">
                    <p>{{$error}}</p>
                    </div>

                 @endforeach

                @endif
                <!-- end row -->
                <form action="{{route('admin.updatepassword')}}" method="POST" >
                    @csrf
                   <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">old Password:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" id="old_password" name="old_password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">New  Password:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password"  id="new_password" name="new_password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Confirm Password:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password"  id="confirm_password" name="confirm_password">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" value="Change Password">
                </form>



            </div>
    </div>
</div>


@endsection()
