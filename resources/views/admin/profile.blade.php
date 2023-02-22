@extends('admin.dashboard')
@section('maincontent')
<div class="main-content">

    <div class="page-content">
       <div class="card mb-4">
                <img class="card-img-top w-25" src="{{!empty($admindata->image)?url('admin/profileimage/'.$admindata->image):url('admin/no_image.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Name:{{$admindata->name}}</h4>
                    <h4 class="card-title">Email:{{$admindata->email}}</h4>
                    <h4 class="card-title">Username:{{$admindata->username}}</h4>

                    <p class="card-text">
                        <small class="text-muted">Created at : {{$admindata->created_at}}</small>
                    </p>
                    <a href="{{route('admin.editprofile')}}" class="btn btn-primary btn-rounded waves-effect waves-light">Edit</a>
                </div>

            </div>
    </div>
</div>


@endsection()
