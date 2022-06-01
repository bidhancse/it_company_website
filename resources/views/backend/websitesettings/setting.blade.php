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
         Update Setting Information
        </div>
       </div>
      </div>
     </div>

     <div class="card-body">
      <form method="POST" action="{{url('updatesettings/'. $Data->id) }}" enctype="multipart/form-data">
       @csrf
       <div class="row">
        <div class="col-lg-6">
         <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title" style="border-radius: 0px;" value="{{ $Data->title }}">
         </div>
        </div>
        <div class="col-lg-6">
         <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" name="email" style="border-radius: 0px;" value="{{ $Data->email }}">
         </div>
        </div>
       </div>

       <div class="row">
        <div class="col-lg-6">
         <div class="form-group">
          <label for="exampleInputEmail1">phone</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone" name="phone" style="border-radius: 0px;" value="{{ $Data->phone }}">
         </div>
        </div>
        <div class="col-lg-6">
         <div class="form-group">
          <label for="exampleInputEmail1">Facebook Url</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Facebook Url" name="facebook" style="border-radius: 0px;"value="{{ $Data->facebook }}">
         </div>
        </div>
       </div>

       <div class="row">
        <div class="col-lg-4">
         <div class="form-group">
          <label for="exampleInputEmail1">Instagram Url</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Instagram Url" name="instagram" style="border-radius: 0px;" value="{{ $Data->instagram }}">
         </div>
        </div>
        <div class="col-lg-4">
         <div class="form-group">
          <label for="exampleInputEmail1">Twitter Url</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Twitter Url" name="twitter" style="border-radius: 0px;" value="{{ $Data->twitter }}">
         </div>
        </div>
        <div class="col-lg-4">
         <div class="form-group">
          <label for="exampleInputEmail1">Youtube Url</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Youtube Url" name="youtube" style="border-radius: 0px;" value="{{ $Data->youtube }}">
         </div>
        </div>
       </div>


       <div class="row">
        <div class="col-lg-6">
         <div class="form-group">
          <label for="exampleInputEmail1">Favicon</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border-radius: 0px;" name="favicon">
          @if(isset( $Data->favicon))
          <img src="{{ url( $Data->favicon) }}" style="max-height: 50px;">
          @endif
          <input type="hidden" value="{{  $Data->favicon }}">
         </div>
        </div>
        <div class="col-lg-6">
         <div class="form-group">
          <label for="exampleInputEmail1">Logo</label>
          <input type="file" class="form-control" style="border-radius: 0px;" name="logo">
          @if(isset( $Data->logo))
          <img src="{{ url( $Data->logo) }}" style="max-height: 50px;">
          @endif
          <input type="hidden" value="{{  $Data->logo }}">
         </div>
        </div>
       </div>


       <div class="form-group row">
        <div class="col-sm-9 mt-2">
         <button type="submit" class="btn btn-info btn-sm" onclick="return confirm('Are You sure ?')" style=" border-radius: 0px;">Update</button>
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