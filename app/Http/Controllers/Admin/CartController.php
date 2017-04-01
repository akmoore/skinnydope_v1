<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\SkinnyDope\Interfaces\CartInterface;
use App\SkinnyDope\Helpers\States;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    protected $cart;

    public function __construct(CartInterface $cart){
    	$this->cart = $cart;
    }

    public function addToCart($id){
    	$cart = $this->cart->addItem($id);
    	return back();
    }

    public function show(){
    	$cart = $this->cart->getCart();
    	$states = States::states();
    	return view('front.cart.cart', compact('cart', 'states'));
    }

    public function deleteFromCart($id){
    	$cart = $this->cart->deleteItem($id);
    	return back();
    }
}
