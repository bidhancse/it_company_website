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
                 Insert Slider Information
               </div>
             </div>
             <div class="col-lg-4 col-4">
              <a href="{{url('Manage-Slider')}}"  class="btn btn-success text-white btn-sm float-right " style=" border-radius: 0px;">Manage Slider</a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <form method="POST" class="btn-submit" enctype="multipart/form-data" action="{{ url('sliderinsert') }}">
            @csrf
            

            <div class="form-group">
              <label>Title</label> 
              <input type="text" class="form-control" placeholder="Enter Title" style="border-radius: 0px;" name="title" required>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Status</label> 
                  <select class="form-control" name="status">
                    <option value="1">Active</option>
                    <option value="2">InActive</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group"><label>Picture</label> 
                  <input type="file" class="form-control" style="border-radius: 0px;" name="image">
                </div>
              </div>
            </div> 



            <div class="form-group row">
              <div class="col-sm-9 mt-2">
                <button type="submit" class="btn btn-info btn-sm" style=" border-radius: 0px;">Submit</button>
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