@extends('admin.dashboard')
@section('maincontent')


        <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">All Contact Data</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contact Me Location </a></li>
                                                <li class="breadcrumb-item active">All Coantact me</li>
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
                    <h4 class="card-title">All Contacat Me</h4>
                    <p class="card-title-desc">
                      All Contact Me Data
                    </p>



                    <div class="table-responsive">
                        <table
                      id="datatable"
                      class="table table-bordered dt-responsive nowrap   "
                      style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                      "
                     >
                      <thead>
                        <tr>
                         <th>No</th>

                            <th>Name</th>

                            <th>Email</th>

                            <th>Phone</th>

                            <th>Date</th>

                            <th>Action</th>

                        </tr>
                      </thead>

                      <tbody>

                           @php($i = 1)

                        	@foreach($contacts as $item)


                        <tr >
                          <td> {{ $i++}} </td>

                            <td> {{ $item->name }} </td>

                            <td> {{ $item->email }} </td>

                            <td> {{ $item->phone }} </td>

                            <td> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </td>
                             <td>
                                <a class="btn btn-danger btn-outline-secondary btn-sm edit" title="Edit"
                                 href="{{route('delete.message',$item->id)}}" id="delete">
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
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
                    </div>

        </div>



@endsection()

