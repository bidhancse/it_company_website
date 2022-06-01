@extends('backend.index')
@section('content')


<!--main contents start-->
<main class="main-content">
  <div class="page-title"></div>

  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="card card-shadow mb-4">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-8 col-8">
                <div class="card-title mt-2">
                  Update Services Information
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a href="{{url('Manage-Services')}}"  class="btn btn-success text-white btn-sm float-right " style=" border-radius: 0px;">Manage Services</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ url('servicesupdate/'.$Data->id) }}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label> 
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" style="border-radius: 0px;" name="title" value="{{ $Data->title }}">
                  </div>
                </div>

                <div class="col-lg-6">
                <div class="form-group">
                  <label>Status</label> 
                  <select class="form-control" name="status" style="border-radius: 0px;">
                    <option value="{{ $Data->status }}">@if($Data->status == 1) Active @else Inactive @endif</option>
                    @if( $Data->status == 1 )
                    <option value="2">InActive</option>
                    @else
                    <option value="1">Active</option>
                    @endif
                  </select>
                </div>
              </div>
              </div>  

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Short Title</label> 
                    <textarea id="summernote" class="form-control" name="short_title">{{ $Data->short_title }}</textarea>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea id="summernoteabout" class="form-control" name="description">{{ $Data->description }}</textarea>
                  </div>
                </div>  
              </div>


              <div class="form-group row">
                <div class="col-sm-9 mt-2">
                  <button type="submit" class="btn btn-info btn-sm" style=" border-radius: 0px;">Update</button>
                  <button type="reset" class="btn btn-danger btn-sm" style=" border-radius: 0px;">Refresh</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</main>
<!--main contents end-->



@endsection