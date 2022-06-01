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
                 Insert Team Information
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a href="{{url('Manage-Team')}}"  class="btn btn-success text-white btn-sm float-right " style=" border-radius: 0px;">Manage Team</a>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form method="POST" action="{{url('teaminsert')}}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label> 
                    <input type="text" class="form-control" required placeholder="Enter Name" style="border-radius: 0px;" name="name" >
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Position
                    </label> 
                    <input type="text" class="form-control" required placeholder="Enter Position" style="border-radius: 0px;" name="position">
                  </div>
                </div>
              </div> 

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Experiences</label> 
                    <input type="text" class="form-control" required placeholder="Enter Experiences" style="border-radius: 0px;" name="experiences">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Url
                    </label> 
                    <input type="text" class="form-control" required placeholder="Enter Facebook Url" style="border-radius: 0px;" name="facebook">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter Url</label> 
                    <input type="text" class="form-control" required placeholder="Enter Twitter Url" style="border-radius: 0px;" name="twitter">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instagram Url
                    </label> 
                    <input type="text" class="form-control" required placeholder="Enter Instagram Url" style="border-radius: 0px;" name="instagram">
                  </div>
                </div>
              </div>  


              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Linkedin Url</label> 
                    <input type="text" class="form-control" required placeholder="Enter Linkedin Url" style="border-radius: 0px;" name="linkedin">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">Picture
                    </label> 
                    <input type="file" class="form-control" style="border-radius: 0px;" name="image">
                  </div>
                </div>
              </div> 


              <div class="form-group row">
                <div class="col-sm-9 mt-2">
                  <button type="submit" class="btn btn-info btn-sm" style=" border-radius: 0px;">Submit</button>
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