<?php

namespace App\SkinnyDope\Repositories;

use App\Product;
use Gloudemans\Shoppingcart\Cart;
use App\SkinnyDope\Interfaces\CartInterface;

class CartRepo implements CartInterface{
	protected $cart;
	protected $product;

	public function __construct(Cart $cart, Product $product){
		$this->cart = $cart;
		$this->product = $product;
	}

	public function addItem($id){
		$product = $this->product->find($id);
		$cart = $this->cart->add($product->id, $product->name, 1, $product->price, ['image' => $product->images()->first()->image_thumb]);
		return $cart;
	}

	public function getCart(){
		return $this->cart;
	}

	public function deleteItem($id){
		$cart = $this->cart->remove($id);
		return $cart;
	}
}