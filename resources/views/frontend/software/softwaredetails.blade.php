@extends('frontend.index')
@section('content')



<main id="main">
  
  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
    <div class="container">

      <div class="row no-gutters">
        
        <div class=" col-lg-12 col-xl-12 ">
          <div class="content d-flex flex-column justify-content-center">
            <h3 data-aos="fade-up">{{ $Software->title }}</h3><br>
            <div data-aos="fade-up" style="text-align: justify;">
              {!! $Software->description !!}
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
</main>



@endsection