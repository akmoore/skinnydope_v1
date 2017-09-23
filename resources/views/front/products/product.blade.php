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
			@if($art->year)
				<h6>Year</h6>
				<p>{{$art->year}}</p>
			@endif
			<h6>Dimensions</h6>
			<p>{{$art->width}}" width | {{$art->height}}" height | {{$art->depth}}" depth</p>
			<h6>Description</h6>
			<p>
				{{$art->description}}
			</p>
			<h6>Price</h6>
			<p>${{$art->price}}</p>

			@if($art->spotenvy)
				<a href="{{$art->spotenvy}}" class="add-to-cart" target="_blank">Purchase @ StoreEnvy</a>
			@endif

			<!-- <a href="{{-- route('cart.add', ['id' => $art->id]) --}}" class="add-to-cart">Add to Cart</a> -->
		</div>
	</div>
@endsection