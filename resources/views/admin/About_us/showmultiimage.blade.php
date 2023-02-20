@extends('admin.dashboard')
@section('maincontent')
        <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">All Multi Images</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Aboutus Page</a></li>
                                                <li class="breadcrumb-item active">MultiImage</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                         <!-- end page title -->

                       <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Multi Image </h4>
                    <p class="card-title-desc">
                      All Multi Image
                    </p>



                    <table
                      id="datatable"
                      class="table table-bordered dt-responsive nowrap"
                      style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                      "
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Imgae_File</th>
                          <th>Photo</th>
                          <th>Created_at</th>
                          <th>Action</th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach($allmultiimage as $image)
                        <tr>
                          <td>{{$image->id}}</td>
                          <td>{{$image->multiimage}}</td>
                          <td><img src="{{asset($image->multiimage)}}" alt="noimage" style="width: 60px;height:60px"></td>
                          <td>{{$image->created_at}}</td>
                          <td>
                             <a class="btn btn-outline-secondary btn-sm edit" title="Edit" href="{{route('admin.editmultiimage',$image->id)}}">
                                                                <i class="fas fa-pencil-alt"></i>
                            </a>


                             <a class="btn btn-danger btn-outline-secondary btn-sm edit" title="Edit"
                             href="{{route('admin.deletemultimage',$image->id)}}" id="delete">
                                                               <i class="fas fa-trash"></i>
                            </a>
                          </td>

                        </tr>
                        @endforeach


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
                    </div>

        </div>



@endsection()
  {{--  --}}
