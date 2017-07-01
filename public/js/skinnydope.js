(function($){
	// console.log('Hello');
	var menuBtn = $('.menu');
	var cartBtn = $('.cartcount');
	var contactBtn = $('nav#navBar a.contact');
	var productsPane = $('.products-pane');
	var cartPane = $('.cart-pane');
	var contactPane = $('.contact-container');
	var menuIsOpen = false;
	var cartIsOpen = false;
	var contactIsOpen = false;
	// var clickInterval = 0;
	var pPageImage = $('.ppage-image');
	var intenseImages = document.querySelectorAll('.intense');
	var overlay = $('.overlay');
	var logo = $('.logo');
	

	console.log(menuBtn);

	// slidr.create('slidr-div', {
	// 	controls: 'none',
	// 	transition: 'fade'
	// }).auto(1000);
	// slidr.auto();

	

	function toggleMenu(){
		if(menuIsOpen){
			productsPane.css({"transform": "translate3d(-100%, 0px, 0px)"});
			overlay.css('opacity', 0);
			overlay.css('visibility', 'hidden');
			menuIsOpen = false;
		}else{
			if(cartIsOpen){toggleCart();};
			if(contactIsOpen){toggleContact();};
			productsPane.css({"transform": "translate3d(0%, 0px, 0px)"});
			overlay.css('opacity', 1);
			overlay.css('visibility', 'visible');
			menuIsOpen = true;
		}
	}

	function toggleContact(){
		if(contactIsOpen){
			contactPane.css({"transform": "translate3d(0px, -100%, 0px)"});
			contactIsOpen = false;
			console.log('contact is now close');
		}else{
			if(menuIsOpen){toggleMenu();};
			contactPane.css({"transform": "translate3d(0px, 0%, 0px)"});
			contactIsOpen = true;
			console.log('contact is now open.');
		}
	}

	function toggleCart(){
		if(!cartIsOpen){
			console.log('cart is now open');
			if(menuIsOpen){ toggleMenu(); };
			cartPane.css({"transform": "translate3d(0%, 0px, 0px)"});
			$('.no-items').css({"top": "0px", "opacity": 1});
			overlay.css('opacity', 1);
			overlay.css('visibility', 'visible');
			cartIsOpen = true;
		}else{
			console.log('cart is now closed');
			cartPane.css({"transform": "translate3d(100%, 0px, 0px)"});
			$('.no-items').css({"top": "20px", "opacity": 0});
			overlay.css('opacity', 0);
			overlay.css('visibility', 'hidden');
			cartIsOpen = false;
		}
	}

	overlay.on('click', function(){
		if(menuIsOpen){
			toggleMenu();
		}else if(cartIsOpen){
			toggleCart();
		}
	});

	menuBtn.on('click', toggleMenu);
	cartBtn.on('click', toggleCart);
	contactBtn.on('click', toggleContact);

	$('.js-tilt').tilt({
	    glare: true
	});

	logo.on('click', function(){
		// console.log($(this).data('href'));
		window.location = $(this).data('href');
	});

	Grade(document.querySelectorAll('.ppage-image'));
	Intense(intenseImages);



	


}(jQuery));