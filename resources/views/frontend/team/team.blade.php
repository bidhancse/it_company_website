@extends('frontend.index')
@section('content')



<style>
  .social-link a{
    font-size: 18px;
    display: inline-block;
    background: #eff2f8;
    color: #f03c02;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }

  .social-link a:hover {
    background: #47b2e4;
    color: #fff;
    text-decoration: none;

  }

  .team :hover {
    transform: translateY(-10px);
  }

  .team h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 18px;
    color: #37517e;
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
      <h1 data-aos="fade-down">OUR <span class="text-warning">TEAM</span></h1>
    </center>
  </div>
</div>

<!-- ======= Team Section ======= -->
<section id="teams" class="teams">
  <div class="container">

    <div class="row">


      @if(isset($Team))
      @foreach( $Team as $TeamShow )

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
        <div class="team-item mt-4">
          <div class="row">
            <div class="col-lg-4 col-6">
              <img src="{{ Url($TeamShow->image) }}" class="team-img img-fluid" alt="">
            </div>

            <div class="col-lg-8 col-6">
              <h4 class="text-uppercase" style="font-weight: 700; margin-bottom: 5px; font-size: 18px; color: #37517e;">{{ $TeamShow->name }}</h4>
              <strong style="font-size: 14px;
              padding-bottom: 10px;
              position: relative;
              font-weight: 500; color: #000;">{{ $TeamShow->position }}</strong>
              <p style="border-bottom: 1px dashed #ddd;"></p>
              <strong  style="font-size: 14px;
              padding-bottom: 10px;
              position: relative;
              font-weight: 500; color: #000;">{{ $TeamShow->experiences }}</strong>
              <br>

              <div class="social-link mt-4">
                <a href="{{ $TeamShow->twitter }}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                <a href="{{ $TeamShow->facebook }}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $TeamShow->linkedin }}" class="google-plus" target="_blank"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @endforeach
      @endif

    </div>

  </div>
</section><!-- End Team Section -->

</main>







@endsection