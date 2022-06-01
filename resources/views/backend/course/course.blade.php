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
                 Insert Course Information
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a href="{{url('Manage-Course')}}"  class="btn btn-success text-white btn-sm float-right " style=" border-radius: 0px;">Manage Course</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form method="POST" action="{{url('courseinsert')}}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Course Name</label> 
                    <input type="text" class="form-control" placeholder="Enter Course Name" style="border-radius: 0px;" name="course_name">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Title
                    </label> 
                    <input type="text" class="form-control" placeholder="Enter Title" style="border-radius: 0px;" name="title">
                  </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea id="summernoteabout" class="form-control" name="description"></textarea>
                  </div>
                </div>  
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Course Price</label> 
                    <input type="text" class="form-control" placeholder="Enter Course Price" style="border-radius: 0px;" name="price">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                  <label>Status</label> 
                  <select class="form-control" name="status" style="border-radius: 0px;">
                    <option value="1">Active</option>
                    <option value="2">InActive</option>
                  </select>
                </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group"><label>Picture</label> 
                    <input type="file" class="form-control" style="border-radius: 0px;" name="image">
                  </div>
                </div>
              </div>


              <div class="form-group row">
                <div class="col-sm-9 mt-2">
                  <button type="submit" class="btn btn-info btn-sm" style=" border-radius: 0px;">Create</button>
                  <button type="reset" class="btn btn-warning btn-sm" style=" border-radius: 0px;">Refresh</button>
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