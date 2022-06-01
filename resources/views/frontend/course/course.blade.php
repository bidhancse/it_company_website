@extends('frontend.index')
@section('content')

<style>

/* Float */
.hvr-float {

  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-float:hover, .hvr-float:focus, .hvr-float:active {
  -webkit-transform: translateY(-8px);
  transform: translateY(-8px);
  animation-name: example;
  animation-duration: 0.9s;
  box-shadow: rgba(0, 0, 0, 0.05) 1px 2px 5px 2px;
}

</style>

<main id="main">


  <div class="col-md-12 col-12 serviesback" style="background:linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
  url(public/image/cover.jpg);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  padding-top: 80px;
  padding-bottom: 80px;">
  <div class="container-fluid">
    <center>
      <h1 data-aos="fade-down">OUR <span class="text-warning">COURSE</span></h1>
    </center>
  </div>
</div>

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      @if(isset($Course))
      @foreach( $Course as $CourseShow )

      <div class="col-lg-4 col-md-6  mt-5">

        <div class="course-item hvr-float" >
          <center>
            <img src="{{ Url($CourseShow->image) }}" class="img-fluid" alt="..." style="max-height: 180px; padding-top: 20px; padding-bottom: 20px;">
          </center>
          <div class="course-content">
            <div class="text-warning">
             <i class="bx bx-star"></i>
             <i class="bx bx-star"></i>
             <i class="bx bx-star"></i>
             <i class="bx bx-star"></i>
             <i class="bx bx-star"></i>
           </div>
           <h3 style="height: 50px;"><a href="{{ url('Course-details/'.$CourseShow->id,$CourseShow->course_name) }}">{{ $CourseShow->course_name }}</a></h3>
           <div class="mt-3 mb-3">
             <i class="bx bx-user"></i>&nbsp;10
             &nbsp;&nbsp;
             <i class="bx bx-timer"></i>&nbsp;{{ $CourseShow->title }}
           </div>

           <div class="trainer d-flex justify-content-between align-items-center">
            <div class="trainer-profile d-flex align-items-center">
              <strong>&#2547; {{ $CourseShow->price }}.00</strong>
            </div>
            <div class="trainer-rank d-flex align-items-center">
             <a href="{{ url('Course-details/'.$CourseShow->id,$CourseShow->course_name) }}" class="text-success" style="font-family: monospace;">See More</a>
           </div>
         </div>
       </div>
     </div>

   </div> <!-- End Course Item-->

   @endforeach
   @endif

 </div>
</div>
</section><!-- End Courses Section -->


</main>







@endsection