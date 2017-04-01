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
</head>
<body>
	<div class="main-container">
		<nav id="navBar">
			<div class="menu">
				<span class="label">MENU</span>
			</div>
			<span class="logo" data-href="/">SkinnyDope</span>
			<!-- <aside class="cartcount">{{-- $cart->count() --}}<span class="label">CART</span></aside> -->
		</nav>
		@include('layout-front.partials.products')
		<!-- @include('layout-front.partials.cart') -->
		<div class="overlay"></div>
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