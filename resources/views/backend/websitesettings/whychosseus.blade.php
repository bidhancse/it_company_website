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
                  Update Why Chosse Us Information
                </div>
              </div>
            </div>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ url('whychosseusupdate/'.$Data->id) }}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label> 
                    <textarea id="summernote" class="form-control" name="description">{{ $Data->description }}</textarea>
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