<?php setlocale(LC_MONETARY, 'en_US.UTF-8'); ?>
@extends('layout-front.front')

@section('content')
	<div class="checkout-pane">
		<div class="cart-items-info-section">
			<div class="cart-section-title">Your Order</div>
			<div class="cart-section-table">
				<div class="cart-section-table-header">
					<div>Product</div>
					<div>Quantity <small>({{$cart->count()}})</small></div>
					<div>Price</div>
				</div>
				<div class="cart-section-table-content">
					@foreach($cart->content() as $item)
						<div class="individual-item">
							<div class="item-details">
								<div class="item-details-image">
									<img src="{{ asset('/images/' . $item->options->image)}}">
								</div>
								<div class="item-details-name">{{ $item->name}}</div>
							</div>
							<div class="item-qty">
								{{ $item->qty }}
								<a href="{{ route('cart.delete', $item->rowId) }}">remove</a>
							</div>
							<div class="item-price">{{ money_format('%.2n', $item->price) }}</div>
						</div>
					@endforeach
				</div>
				<div class="cart-section-spacer"></div>
				<div class="cart-section-table-total">
					<div class="cstt-item">
						<div>Subtotal</div>
						<div>${{$cart->subtotal}}</div>
					</div>
					<div class="cstt-item">
						<div>Tax</div>
						<div>${{$cart->tax}}</div>
					</div>
					<div class="cstt-item">
						<div>Grand Total</div>
						<div>${{$cart->total}}</div>
					</div>
				</div>
			</div>
		</div>

		{!! Form::open(['route' => 'checkout.store']) !!}
			<div class="billing-info-section">
				<div class="bis-title">Billing Information</div>
				<div class="bis-row">
					<div class="bis-sec-50">
						{!! Form::label('first-name', 'First Name') !!}
						{!! Form::text('first-name') !!}
					</div>
					<div class="bis-sec-50">
						{!! Form::label('last-name', 'Last Name') !!}
						{!! Form::text('last-name') !!}
					</div>
				</div>
				<div class="bis-row">
					<div class="bis-sec-100">
						{!! Form::label('street', 'Street') !!}
						{!! Form::text('street') !!}
					</div>
				</div>
				<div class="bis-row">
					<div class="bis-sec-33">
						{!! Form::label('city', 'City') !!}
						{!! Form::text('city') !!}
					</div>
					<div class="bis-sec-33">
						{!! Form::label('state', 'State') !!}
						{!! Form::select('state', $states) !!}
					</div>
					<div class="bis-sec-33">
						{!! Form::label('postal', 'Postal') !!}
						{!! Form::text('postal') !!}
					</div>
				</div>
				<div class="bis-row">
					<div class="bis-sec-50">
						{!! Form::label('email', 'Email') !!}
						{!! Form::email('email') !!}
					</div>
					<div class="bis-sec-50">
						{!! Form::label('phone', 'Phone') !!}
						{!! Form::text('phone') !!}
					</div>
				</div>
			</div>

			<div class="payment-info-section">
				Payment Info
				<div id="dropin-container"></div>
			</div>

			<div class="submit-btn-section">
				{!! Form::submit('Pay Now', ['class' => 'btn btn-fill btn-info hidden', 'id' => 'payment-button']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	<!-- 'first_name', 'last_name', 'email', 'street', -->
    	<!-- 'city', 'state', 'postal', 'phone' -->
	
@endsection

@section('scripts')
	<script type="text/javascript" src="https://js.braintreegateway.com/js/braintree-2.31.0.min.js"></script>

	<script type="text/javascript">
		$.ajax({url: window.Laravel.braintree_url}).done(function(response){
			braintree.setup(response.data.token, 'dropin', {
				container: 'dropin-container',
				onReady: function(){
					$('#payment-button').removeClass('hidden');
				}
			});
		});
	</script>
@endsection