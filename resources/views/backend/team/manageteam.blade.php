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
                  Manage Team
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a  href="{{url('Team')}}"  class="btn btn-primary text-white btn-sm float-right " style=" border-radius: 0px;">Team Add</a>
              </div>
            </div>
          </div>

          <div class="card-body" style="overflow-x:auto;">
            <table id="example" class="table table-bordered table-striped text-center dataTable no-footer" cellspacing="0" style="width: 100%;">
              <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Experiences</th>
                  <th>Facebook Url</th>
                  {{-- <th>Twitter Url</th>
                  <th>Instagram Url</th>
                  <th>Linkedin Url</th> --}}
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @php
                $i = 1;
                @endphp

                @if(isset($Team))
                @foreach($Team as $TeamShow)
                <tr> 
                  <td>{{ $i++ }}</td>

                  <td>{{ $TeamShow->name }}</td>
                  <td>{!! $TeamShow->position !!}</td>
                  <td>{{ $TeamShow->experiences }}</td>
                  <td>{!! $TeamShow->facebook !!}</td>
                  {{-- <td>{{ $TeamShow->twitter }}</td>
                  <td>{!! $TeamShow->instagram !!}</td>
                  <td>{!! $TeamShow->linkedin !!}</td> --}}

                  <td>
                    @if(isset($TeamShow->image))
                    <img src="{{url($TeamShow->image)}}" style="max-height:50px;" class="zoom">
                    @else
                    <img src="{{url('public/image/teamimage')}}/1.jpg" class="zoom" style="max-height:50px;">
                    @endif
                  </td>

                  <td>
                    <span>
                      <a href="{{url('deleteTeam/'.$TeamShow->id)}}" onclick="return confirm('Are You sure ?')" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-trash"></i></a>

                      <a href="{{url('editTeam/'.$TeamShow->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-pencil-alt
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