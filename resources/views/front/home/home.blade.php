@extends('layout-front.front')

@section('content')
	@if($products != collect([]))
		<div class="front-image-full">
			<div class="image" style="background-image: url('{{ asset('storage/images/'.$products->first()->images()->first()->image_front_page) }}');"></div>
			<div class="title">
				<div class="border-top"></div>
				<div class="image-title">
					@if($products->first()->type == 'painting')
						<a href="{{route('front.painting', $products->first()->id)}}">
							{{$products->first()->name}}
							<span>View Details</span>
						</a>
					@else
						<a href="{{route('front.illustration', $products->first()->id)}}">
							{{$products->first()->name}}
							<span>View Details</span>
						</a>
					@endif
				</div>
			</div>	
		</div>
	@endif
	<!-- <div class="blurb">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
	</div> -->
	<!-- <div class="events-section">
		<div class="event-pod">
			<div class="event-pod-image-container" style="background-image: url('/images/jfw5aPYAqA15ZYNEQfWC_image_medium.jpg');">
			</div>
			<div class="event-pod-description-container">
				<div class="event-pod-description-title">The Director</div>
				<div class="event-pod-description-date-time">Mar 23, 2017, 6:50PM</div>
				<div class="event-pod-description-location">Myers Club | Baton Rouge, Lousiana</div>
			</div>
		</div>	
		<div class="event-pod">
			<div class="event-pod-image-container" style="background-image: url('/images/xQ31pg289GLbCmTPgbxV_image_medium.jpg');">
				<img src="/images/xQ31pg289GLbCmTPgbxV_image_medium.jpg">
			</div>
			<div class="event-pod-description-container">
				<div class="event-pod-description-title">The Director</div>
				<div class="event-pod-description-date-time">Mar 23, 2017, 6:50PM</div>
				<div class="event-pod-description-location">Myers Club | Baton Rouge, Lousiana</div>
			</div>
		</div>	
	</div> -->
@endsection