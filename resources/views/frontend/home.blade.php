@extends('frontend.index')
@section('content')



<!-- ======= Slider Section ======= -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">

		@if(isset($SliderActive))
		@foreach($SliderActive as $SliderActiveShow)
		
		<div class="carousel-item @if($loop->first) active @endif">
			<img src="{{url($SliderActiveShow->image)}}" class="d-block w-100" alt="...">
		</div>

		@endforeach
		@endif

	</div>

	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" >
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
<!-- ======= Slider Section ======= -->

<main id="main">

	<!-- ======= Cta Section ======= -->
	<section id="cta" class="cta bg-white">
		<div class="container">

			<div class="row">
				<div class="col-lg-7 text-justify text-lg-left">
					<h2><strong class="text-warning">About</strong>  <strong >Us</strong></h2>
					<p> {!! $About->description !!}</p>
				</div>
				<div class="col-lg-5 cta-btn-container text-center">
					<center>
						<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_z2vighsa.json"  background="transparent"  speed="1"  style=" max-height: 500px;"  loop  autoplay></lottie-player>
					</center>
				</div>
			</div>

		</div>
	</section><!-- End Cta Section -->

	<!-- ======= Services Section ======= -->
	<section id="services" class="services" style="margin-top: -80px">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>OUR CORE <strong class="text-warning">SERVICES</strong></h2>
				<p>SBIT help develop product; we collect and analyze data.<br>
					We craft technologies and specialize in implementing technologies.<br>
				We expertly develop your customized technological solution, with 0% room for errors.</p>
			</div>

			<div class="row">

				@if(isset($Services))
				@foreach( $Services as $ServicesShow )

				<div class="col-lg-4 col-md-6">
					<div class="icon-box" data-aos="zoom-out" data-aos-delay="100" style="height: 160px;">
						<div class="icon"><i class="bi bi-card-checklist"></i></div>
						<h4 class="title"><a href="">{{ $ServicesShow->title }}</a></h4>
						<p class="description">{!! $ServicesShow->short_title !!}</p>
					</div>
				</div>

				@endforeach
				@endif

			</div>

		</div>
	</section><!-- End Services Section -->

	<!-- ======= Ready Software Section ======= -->
	<section id="services" class="services">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>OUR READY <strong class="text-warning">SOFTWARE/WEBSITE</strong></h2>
				<p>SBIT help develop product; we collect and analyze data.<br>
					We craft technologies and specialize in implementing technologies.<br>
				We expertly develop your customized technological solution, with 0% room for errors.</p>
			</div>

			<div class="row">

				@if(isset($Software))
				@foreach( $Software as $SoftwareShow )

				<div class="col-lg-4 col-md-6">
					<div class="icon-box" data-aos="flip-left" data-aos-delay="100" style="height: 160px;">
						<div class="icon"><i class="bi bi-card-checklist"></i></div>
						<h4 class="title"><a href="">{{ $SoftwareShow->title }}</a></h4>
						<p class="description">{!! $SoftwareShow->short_title !!}</p>
					</div>
				</div>

				@endforeach
				@endif

			</div>

		</div>
	</section><!-- End Ready Software Section -->

	<!-- ======= Portfolio Section ======= -->
	<section id="portfolio" class="portfolio">
		<div class="container">

			<div class="section-title" data-aos="fade-up">
				<h2>
					<strong>OUR</strong> 
					<strong class="text-warning">VALUABLE </strong>
					<strong>CLIENTS</strong>
				</h2>
				<p>Our Valuable Clients</p>
			</div>

			<div class="row mt-3" data-aos="fade-up">
				<div class="col-lg-12 d-flex justify-content-center">
					<ul id="portfolio-flters">
						<li data-filter="*" class="filter-active">Our Website/Softwere</li>
						<li data-filter=".filter-ecommerce">E-commerce Website</li>
						<li data-filter=".filter-education">School/College Website</li>
						<li data-filter=".filter-news">News Website</li>
						<li data-filter=".filter-inventory">Inventory Website</li>
						<li data-filter=".filter-restaurant">Restaurant Website</li>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up">
				
				@include('frontend.clients.ecommerce')
				
				@include('frontend.clients.education')

				@include('frontend.clients.news')

				@include('frontend.clients.inventory')

				@include('frontend.clients.restaurant')
				

			</div>
		</div>
	</section><!-- End Portfolio Section -->

	<!-- ======= Our Clients Section ======= -->
	<section id="clients" class="clients" style="margin-top: -100px;">
		<div class="container">





				

				<div class="col-lg-12 col-md-6 col-xs-6">
					
						<center>
							<img src="{{ asset('public/image')}}/1.png" class="img-fluid" alt="" data-aos="fade-up">
						</center>
					
				</div>

				



		</div>
	</section><!-- End Our Clients Section -->

</main><!-- End #main -->







@endsection