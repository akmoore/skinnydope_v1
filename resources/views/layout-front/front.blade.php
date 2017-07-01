<!DOCTYPE html>
<html>
<head>
	<title>Skinny Dope</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            // 'braintree_url' => route('braintree.token'),
        ]) !!};
    </script>
    <script src="https://use.fontawesome.com/5b34b27fc5.js"></script>
</head>
<body>
	<div class="main-container">
		<nav id="navBar">
			<div class="menu">
				<span class="label">MENU</span>
			</div>
			<span class="logo" data-href="/">SkinnyDope</span>
			<a href="#" class="contact">Contact</a>
			<!-- <aside class="cartcount">{{-- $cart->count() --}}<span class="label">CART</span></aside> -->
		</nav>
		@include('layout-front.partials.products')
		<!-- @include('layout-front.partials.cart') -->
		<div class="overlay"></div>
	</div>
	<div class="contact-container">
		<ul>
			<li>Jonathan Brown</li>
			<li>
				<a href="tel:5046152374">(504) 615-2374</a></li>
			<li>
				<a href="mailto:skinnydope1@yahoo.com">
					skinnydope1@yahoo.com
				</a>
				
			</li>
			<li>
				<a href="https://www.instagram.com/skinnydopeart/">
					<i class="fa fa-instagram" aria-hidden="true"></i>
					@skinnydopeart
				</a>
			</li>
		</ul>
		
		
		

	</div>
	<div class="content-container">
		@yield('content')
	</div>
	<script type="text/javascript" src="/../assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/slidr.min.js"></script>
	<script type="text/javascript" src="/js/tilt.jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.adaptive-backgrounds.js"></script>
	<script type="text/javascript" src="/js/grade.js"></script>
	<script type="text/javascript" src="/js/intense.min.js"></script>
	@yield('scripts')
	<script type="text/javascript" src="/js/skinnydope.js"></script>
</body>
</html>