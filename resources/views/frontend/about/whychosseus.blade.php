@extends('frontend.index')
@section('content')



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
      <h1 data-aos="fade-down">WHY CHOSSE <span class="text-warning">US</span></h1>
    </center>
  </div>
</div>

<!-- ======= Why Chosse Us Section ======= -->
<section id="about-us" class="about-us">
  <div class="container">

    <div class="row no-gutters">

      <div class=" col-lg-12 col-xl-12 ">
        <div class="content d-flex flex-column justify-content-center">
          <div data-aos="fade-up" style="text-align: justify;">
            {!! $WhyChosseUs->description !!}
          </div>
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section><!-- End Why Chosse Us Section -->
</main>







@endsection