<section class="products-pane">
	<div class="ppane-container">
		<div class="ppane-list">
			@foreach($products as $product)
				@if($product->type === 'illustration')
					<a href="{{route('front.illustration', $product)}}" class="ppane-product" data-tilt>
					   <div class="image"
					   		style="background-image: url('{{ asset('/images/'.$product->images()->first()->image_medium) }}');">
					   </div>
					   <div class="detail">
					   		{{$product->name}}
					   </div>
					</a>
				@else
					<a href="{{route('front.painting', $product)}}" class="ppane-product">
					   <div class="image"
					   		style="background-image: url('{{ asset('/images/'.$product->images()->first()->image_medium) }}');">
					   </div>
					   <div class="detail">
					   		{{$product->name}}
					   </div>
					</a>
				@endif
			@endforeach
		</div>
		
	</div>
</section>