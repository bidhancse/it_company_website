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
                 Insert Clients Information
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a href="{{url('Manage-Clients')}}"  class="btn btn-success text-white btn-sm float-right " style=" border-radius: 0px;">Manage Clients</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form method="POST" action="{{url('Clientsinsert')}}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Company Name</label> 
                    <input type="text" class="form-control" placeholder="Enter Company Name" style="border-radius: 0px;" name="company_name">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Website Url</label> 
                    <input type="text" class="form-control" placeholder="Enter Website Url" style="border-radius: 0px;" name="website_url">
                  </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Website Category</label> 
                  <select class="form-control" name="status" style="border-radius: 0px;">
                    <option value="1">E-COMMERCE WEBSITE</option>
                    <option value="2">SCHOOL/COLLEGE WEBSITE</option>
                    <option value="3">NEWS WEBSITE</option>
                    <option value="4">INVENTORY WEBSITE</option>
                    <option value="5">RESTURANT WEBSITE</option>
                  </select>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Picture</label> 
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