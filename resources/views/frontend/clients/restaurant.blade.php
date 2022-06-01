
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


@php
$Restaurant = DB::table('clientsinformation')->where('status',5)->get();
@endphp


@if(isset($Restaurant))
@foreach( $Restaurant as $RestaurantShow )


<div class="col-lg-3 col-md-3 col-sm-4 col-6  portfolio-item filter-restaurant" >
	<div class="border p-4 hvr-float" style="height: 190px;">
		<center>
			<a href="{{ $RestaurantShow->website_url }}" target="_blank">
				<img src="{{url($RestaurantShow->image)}}" class="img-fluid"  style="max-height: 108px; padding-top: 20px; padding-bottom: 20px; margin-top: -15px;">
			</a>
		</center>

		<div class="mt-2">
			<center>
				<a href="{{ $RestaurantShow->website_url }}" class="text-dark" style="font-size: 12px;" target="_blank"><strong>{{ $RestaurantShow->company_name }}</strong></a>
			</center>
		</div>
	</div>
</div>



@endforeach
@endif