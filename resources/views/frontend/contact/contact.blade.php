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
      <h1 data-aos="fade-down">CONTACT <span class="text-warning">US</span></h1>
    </center>
  </div>
</div>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">


  <div class="container" data-aos="fade-up">

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <h4><strong class="text-warning">BRANCH</strong><strong> ADDRESS</strong></h4><hr><br>
            <h5 style="font-family: Courier New; font-size: 15px;">
              <strong class="text-warning">FENI -</strong><strong> BRANCH</strong>
            </h5>
            <p style="font-family: Courier New; font-size: 13px;">Hazi Fazal Master Lane, Yousuf Tower 1st Floor,<br>
              Mizan Road Feni. 3900 Feni, Bangladesh.<br>
              Mobile +88 01840241895,<br>
            Whatsapp +88 01840241895</p><br>

            <h5 style="font-family: Courier New; font-size: 15px;">
              <strong class="text-warning">DHAKA -</strong><strong> BRANCH</strong>
            </h5>
            <p style="font-family: Courier New; font-size: 13px;">House # 535, Avenue # 5, Road # 8, Mirpur DOHS,<br>
              Mirpur, Dhaka-1216.<br>
              Mobile +88 01840241895,<br>
            Whatsapp +88 01840241895</p>
          </div>



        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="{{ url('user-message') }}" method="post">
          @csrf
          <h4><strong class="text-warning">SEND</strong><strong> MESSAGE</strong></h4><hr><br>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control form"  placeholder="Your Name" required style="box-shadow: none; height: 45px; border-radius: 0px;">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control form" name="email"  placeholder="Your Email" required style="box-shadow: none; height: 45px; border-radius: 0px;">
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6 form-group">
              <input type="text" name="phone" class="form-control form"  placeholder="Your Phone" required style="box-shadow: none; height: 45px; border-radius: 0px;">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control form" name="subject"  placeholder="Subject" required style="box-shadow: none; height: 45px; border-radius: 0px;">
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control form" name="message" rows="5" placeholder="Message" required style="box-shadow: none; border-radius: 0px;"></textarea>
          </div>
          <div class="text-center mt-3"><button type="submit" class="btn btn-dark">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>


</section><!-- End Contact Section -->

<div data-aos="fade-up" style="margin-top: 20px;">

    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.484084282817!2d90.36892971481701!3d23.83693818454675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1a6ee7a7339%3A0x7a8f026abc0c0c4f!2sSkill%20Based%20Information%20Technology%20-%20SBIT!5e0!3m2!1sen!2sbd!4v1649953903489!5m2!1sen!2sbd"frameborder="0" allowfullscreen></iframe>
  </div>

</main>



@endsection