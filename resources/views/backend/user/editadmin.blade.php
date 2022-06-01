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
                  Update Admin Information
                </div>
              </div>

              <div class="col-lg-4 col-4">
                <a href="{{url('Manage-Admin')}}"  class="btn btn-danger text-white btn-sm float-right " style=" border-radius: 0px;">Manage Admin</a>
              </div>

            </div>

          </div>
          <div class="card-body">
            <form method="POST" action="{{url('updateadmin/'.$Data->id)}}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" style="border-radius: 0px;" value="{{$Data->name}}">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label> <label class="text-danger">(Must be English **)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="border-radius: 0px;" name="email" value="{{$Data->email}}">
                  </div>
                </div>
              </div>
              

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label> <label class="text-danger">(Must be English **)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone" style="border-radius: 0px;" name="phone" value="{{$Data->phone}}">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address" style="border-radius: 0px;" name="address" value="{{$Data->address}}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label> <label class="text-danger">(Must be English **)</label> 
                    <input type="password" class="form-control" placeholder="Enter Password" style="border-radius: 0px;" name="password" id="txtPassword" value="">
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select class="form-control" name="status" style="border-radius: 0px;">
                     <option  value="{{$Data->status}}">@if($Data->status == 1)Active @else Inactive @endif</option>
                     @if($Data->status == 1)
                     <option value="2">Inactive</option>
                     @else
                     <option value="1">Active</option>
                     @endif
                   </select>
                 </div>
               </div>
             </div>


             <div class="form-group">
              <label for="exampleInputEmail1">Picture</label>
              <input type="file" class="form-control" style="border-radius: 0px;" id="imgInp" name="image">
              @if(isset($Data->image))
              <img id="blah" src="{{url($Data->image)}}" style="max-height: 50px;">
              @else
              <img id="blah" src="{{url('public/userimage')}}/1.png" style="max-height:50px;">
              @endif

              <input type="hidden" value="{{ $Data->image }}" name="old_image">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-9 mt-2">
              <button type="submit" class="btn btn-info btn-sm" id="btnSubmit" style=" border-radius: 0px;" onclick="return Validate()">Update</button>
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

<script type="text/javascript">
  function Validate() {
    var password = document.getElementById("txtPassword").value;
    var confirmPassword = document.getElementById("txtConfirmPassword").value;
    if (password != confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
    return true;
  }
</script>

@endsection