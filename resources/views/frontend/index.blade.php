@php
$setting = DB::table('settinginformation')->first();
$contact = DB::table('contactinformation')->first();
@endphp



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $setting->title}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url($setting->favicon) }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/frontend')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('public/frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('public/frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('public/frontend')}}/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/frontend')}}/assets/css/toast.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="overflow-x: hidden;">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="">{{ $setting->email }}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+880 {{ $setting->phone }}</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="{{ $setting->twitter }}" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="{{ $setting->facebook }}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="{{ $setting->instagram }}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="{{ $setting->youtube }}" class="youtube" target="_blank"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        {{-- <h1 class="text-light"><a href="index.html">Flattern</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ url('/') }}"><img src="{{ url($setting->logo) }}" alt="" class="img-fluid" data-aos="fade-right"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ url('/') }}">Home</a></li>

          <li class="dropdown"><a href="{{ url('/') }}"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('About-Us') }}">About Us</a></li>
              <li><a href="{{ url('Why_Chosse_Us') }}">Why Chosse Us</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="{{ url('/') }}"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              @php
              $Services=DB::table('servicesinformation')->orderBy('id','ASC')->where('status',1)->get();
              @endphp


              @if(isset($Services))
              @foreach( $Services as $ServicesShow )

              <li><a href="{{ url('Services/'.$ServicesShow->id) }}">{{ $ServicesShow->title }}</a></li>

              @endforeach
              @endif
            </ul>
          </li>

          <li class="dropdown"><a href="{{ url('/') }}"><span>Software</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              @php
              $Software=DB::table('softwareinformation')->orderBy('id','ASC')->where('status',1)->get();
              @endphp


              @if(isset($Software))
              @foreach( $Software as $SoftwareShow )

              <li><a href="{{ url('Software/'.$SoftwareShow->id) }}">{{ $SoftwareShow->title }}</a></li>

              @endforeach
              @endif
            </ul>
          </li>

          <li><a href="{{ url('Courses') }}">OUR COURSE</a></li>
          <li><a href="{{ url('Team-Member') }}">OUR TEAM</a></li>
          <li><a href="{{ url('Contact-Us') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




  @yield('content')





  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <p>
              {!! $contact->description_one !!}
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <p>
              {!! $contact->description_two !!}
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>IMPORTANT <span class="text-warning">LINK</span></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('About-Us') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('Team-Member') }}">Our Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('Why_Chosse_Us') }}">Why Choose us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('Contact-Us') }}">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-newsletter">
            <h4>SOCIAL <span class="text-warning">MEDIA</span></h4>
            <div class="social-links ">
              <a href="{{ $setting->twitter}}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
              <a href="{{ $setting->facebook}}" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $setting->instagram}}" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              <a href="{{ $setting->youtube}}" class="google-plus" target="_blank"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid py-4" style="border-top: 1px dashed #fff; background: #000;">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <center>
            <span>
             <?php echo date("Y"); ?> © Copyright Develop By <a href="https://www.facebook.com/Bidhan716/">Bidhan Nath</a>
           </span>
         </center>
       </div>

     </div>
   </div>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="{{ asset('public/frontend')}}/assets/vendor/aos/aos.js"></script>
 <script src="{{ asset('public/frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('public/frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="{{ asset('public/frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="{{ asset('public/frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="{{ asset('public/frontend')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
 <script src="{{ asset('public/frontend')}}/assets/vendor/php-email-form/validate.js"></script>
 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
 <!-- Template Main JS File -->
 <script src="{{ asset('public/frontend')}}/assets/js/main.js"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script>
  @if (Session::has('messege'))

  var type="{{ Session::get('alert-type', 'info') }}"

  switch(type){

    case 'info':
    toastr.options.positionClass = 'toast-top-right';
    toastr.info("{{ Session::get('messege') }}");

    break;

    case 'success':
    toastr.options.positionClass = 'toast-top-right';
    toastr.success("{{ Session::get('messege') }}");

    break;

    case 'warning':
    toastr.options.positionClass = 'toast-top-right';
    toastr.warning("{{ Session::get('messege') }}");

    break;

    case 'error':
    toastr.options.positionClass = 'toast-top-right';
    toastr.error("{{ Session::get('messege') }}");

    break;

  }

  @endif

</script>

</body>

</html>