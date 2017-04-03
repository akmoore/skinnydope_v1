@extends('layout-front.front')

@section('content')
	<div class="ppage-main">
		<div class="ppage-image">
			<div class="image-container">
				<img src="{{ asset('/storage/images/'.$art->images()->first()->image_medium) }}"
					 class="intense js-tilt" 
					 data-image="{{ asset('/storage/images/'.$art->images()->first()->image_large) }}" 
					 >
			</div>
		</div>
		<div class="ppage-details">
			<div class="border-top"></div>
			<p class="image-title">{{$art->name}}</p>
			<h6>Demensions</h6>
			<p>{{$art->width}}" width | {{$art->height}}" height | {{$art->depth}}" depth</p>
			<h6>Description</h6>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
			<h6>Price</h6>
			<p>${{$art->price}}</p>

			<!-- <a href="{{-- route('cart.add', ['id' => $art->id]) --}}" class="add-to-cart">Add to Cart</a> -->
		</div>
	</div>
@endsection