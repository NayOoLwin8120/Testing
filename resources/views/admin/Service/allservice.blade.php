@extends('admin.dashboard')
@section('maincontent')
        <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">All Service Data</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Service Data</a></li>
                                                <li class="breadcrumb-item active">All Service Data</li>
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
                    <h4 class="card-title">All Service Data</h4>
                    <p class="card-title-desc">
                      All Servcie Data
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
                          <th>Service Title</th>
                          <th>Service Image</th>
                          <th>Service Description</th>
                          <th>Service Button</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Action</th>



                        </tr>
                      </thead>

                      <tbody>
                       @php($i=1)
                        @foreach($alldata as $item)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$item->title}}</td>
                          <td><img src="{{asset($item->service_image)}}" alt="noimage" style="width: 60px;height:60px"></td>
                          <td>{{$item->descritpion}}</td>
                          <td>{{$item->button}}</td>




                          <td>{{$item->created_at}}</td>
                          <td>{{$item->updated_at}}</td>
                          <td>
                             <a class="btn btn-outline-secondary btn-sm edit" title="Edit" href="{{route('admin.editservice',$item->id)}}">
                                                                <i class="fas fa-pencil-alt"></i>
                            </a>


                             <a class="btn btn-danger btn-outline-secondary btn-sm edit" title="Edit"
                             href="{{route('admin.deleteservice',$item->id)}}" id="delete">
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
