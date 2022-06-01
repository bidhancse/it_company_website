@extends('frontend.index')
@section('content')


<main id="main">
  
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">
          
          <div class=" col-lg-7 col-xl-7 ">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up">{{ $CourseDetails->course_name }}</h3><br>
              <div data-aos="fade-up" style="text-align: justify;">
                {!! $CourseDetails->description !!}
              </div>
            </div><!-- End .content-->
          </div>

          <div class="col-lg-5 col-xl-5">
            <center>
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_ZmsQVB.json"  background="transparent"  speed="2"  style=" max-height: 600px;"  loop  autoplay></lottie-player>
          </center>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

</main>



@endsection