@extends('backend.index')
@section('content')


<!--main contents start-->
<main class="main-content">
  <div class="page-title"></div>

  <div class="container-fluid">

    <!-- state start-->
    <div class="row">
      <div class=" col-sm-12">
        <div class="card card-shadow mb-4">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-8 col-8">
                <div class="card-title mt-2">
                  Manage Clients
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a  href="{{url('Clients')}}"  class="btn btn-primary text-white btn-sm float-right " style=" border-radius: 0px;">Clients Add</a>
              </div>
            </div>
          </div>

          <div class="card-body" style="overflow-x:auto;">
            <table id="example" class="table table-bordered table-striped text-center dataTable no-footer" cellspacing="0" style="width: 100%;">
              <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Website Name</th>
                  <th>Category</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @php
                $i = 1;
                @endphp

                @if(isset($Clients))
                @foreach($Clients as $ClientsShow)
                <tr> 
                  <td>{{ $i++ }}</td>

                  <td>{{ $ClientsShow->company_name }}</td>
                  
                  <td>
                   @if($ClientsShow->status == 1)
                   <span>E-Commerce Website</span>

                   @elseif($ClientsShow->status == 2)
                   <span>School/College Website</span>

                   @elseif($ClientsShow->status == 3)
                   <span>News Website</span>

                   @elseif($ClientsShow->status == 4)
                   <span>Inventory Website</span>

                   @elseif($ClientsShow->status == 5)
                   <span>Restaurant Website</span>                   
                   @endif
                 </td>

                 <td>
                  @if(isset($ClientsShow->image))
                  <img src="{{url($ClientsShow->image)}}" style="max-height:50px;" class="zoom">
                  @else
                  <img src="{{url('public/image/websitelogo')}}/1.jpg" class="zoom" style="max-height:50px;">
                  @endif
                </td>

                <td>
                  <span>
                    <a href="{{url('deleteClients/'.$ClientsShow->id)}}" onclick="return confirm('Are You sure ?')" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-trash"></i></a>

                    <a href="{{url('editClients/'.$ClientsShow->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-pencil-alt
                      "></i></a>
                    </span>
                  </td>

                </tr>
                @endforeach
                @endif

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- state end-->

  </div>

</main>
<!--main contents end-->



@endsection