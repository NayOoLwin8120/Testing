

@extends('admin.dashboard')
@section('maincontent')
{{-- @dd($category) --}}

        <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">All Blog Data</h4>

                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">All Blog Data</a></li>
                                                <li class="breadcrumb-item active">All Blog Data</li>
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
                    <h4 class="card-title">All Blog</h4>
                    <p class="card-title-desc">
                      All Blog
                    </p>



                    <div class="table_responsive">
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
                          <th>Blog_Image</th>
                          <th>Blog_title</th>
                          <th>Blog_Category</th>
                          <th>Blog_Tags</th>
                          <th>Blog_Button</th>
                          <th>Blog_Description</th>
                          <th>Created_at</th>
                          <th>Updated_at</th>
                          <th>Action</th>



                        </tr>
                      </thead>

                      <tbody>
                       @php($i=1)
                        @foreach($allblog as $item)
                        <tr >
                          <td>{{$i++}}</td>
                           <td><img src="{{asset($item->blog_image)}}" alt="noimage" style="width: 60px;height:60px"></td>
                          <td>{{$item->blog_title}}</td>
                          <td>{{$item->category->category_name}}</td>

                          <td>{{$item->blog_tags}}</td>
                          <td>{{$item->blog_button}}</td>
                          <td>{{$item->blog_description}}</td>
                          <td>{{$item->created_at}}</td>
                          <td>{{$item->updated_at}}</td>
                          <td>
                             <a class="btn btn-outline-secondary btn-sm edit" title="Edit" href="{{route('admin.editblog',$item->id)}}">
                                 <i class="fas fa-pencil-alt"></i>
                            </a>


                             <a class="btn btn-danger btn-outline-secondary btn-sm edit" title="Edit"
                             href="{{route('admin.deleteblog',$item->id)}}" id="delete">
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

