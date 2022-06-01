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
                  Manage Course
                </div>
              </div>
              <div class="col-lg-4 col-4">
                <a  href="{{url('Course')}}"  class="btn btn-primary text-white btn-sm float-right " style=" border-radius: 0px;">Course Add</a>
              </div>
            </div>
          </div>

          <div class="card-body" style="overflow-x:auto;">
            <table id="example" class="table table-bordered table-striped text-center dataTable no-footer" cellspacing="0" style="width: 100%;">
              <thead>
                <tr>
                  <th>Sl.</th>
                  <th>Course Name</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @php
                $i = 1;
                @endphp

                @if(isset($Course))
                @foreach($Course as $CourseShow)
                <tr> 
                  <td>{{ $i++ }}</td>
                  <td>{{ $CourseShow->course_name }}</td>
                  <td>{{ $CourseShow->title }}</td>
                  <td>{{ $CourseShow->price }}</td>
                  
                  <td>
                   @if($CourseShow->status == 1)
                   <span class="badge" style="background-color: #d7ffc0;"><i class="fa fa-circle mr-1" style="color:  #4fbb0d;" ></i><a href="{{ url('inactiveCourse/'.$CourseShow->id) }}" style="color: #4fbb0d;">Active</a></span>

                   @else
                   <span class="badge" style="background-color: #ffefee;"><i class="fa fa-circle mr-1" style="color:  #FF4C41;" ></i><a href="{{ url('activeCourse/'.$CourseShow->id) }}" style="color: #FF4C41;">InActive</a></span>
                   @endif
                 </td>

                 <td>{!! $CourseShow->description !!}</td>

                 <td>
                  @if(isset($CourseShow->image))
                  <img src="{{url($CourseShow->image)}}" style="max-height:50px;" class="zoom">
                  @else
                  <img src="{{url('public/image/courseimage')}}/1.jpg" class="zoom" style="max-height:50px;">
                  @endif
                </td>

                <td>
                  <span>
                    <a href="{{url('deleteCourse/'.$CourseShow->id)}}" onclick="return confirm('Are You sure ?')" class="btn btn-danger btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-trash"></i></a>

                    <a href="{{url('editCourse/'.$CourseShow->id)}}" class="btn btn-info btn-sm" style="padding-left: 10px; padding-right: 10px; border-radius: 0px;"><i class="ti-pencil-alt
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