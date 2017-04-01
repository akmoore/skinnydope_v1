<?php

namespace App\Http\Composers;

use Gloudemans\Shoppingcart\Cart;
use App\SkinnyDope\Interfaces\ProductInterface;
use Illuminate\Contracts\View\View;

class FrontComposer {

	protected $product;
	protected $cart;

	public function __construct(ProductInterface $product, Cart $cart){
		$this->product = $product;
		$this->cart = $cart;
	}
	
	public function compose(View $view){
		$products = $this->product->getRecords();
		$cart = $this->cart;
		return $view->with(['products' => $products, 'cart' => $cart]);
	}
}