<section class="cart-pane">
	@if($cart->count() < 1)
		<div class="no-items">It appears that you have no items in your cart. This needs rectifying.</div>
	@else
		<ul>
			@foreach($cart->content() as $item)
				<li>
					<img src="{{ asset('/images/' . $item->options->image)}}">
					<div>
						{{$item->name}} <br>
						${{$item->subtotal}} <span>{{$item->qty}}</span>
					</div>
				</li>
			@endforeach
		</ul>
	@endif
	<a href="#">
		<div class="checkout-btn">
			Check Out
		</div>
	</a>
</section>