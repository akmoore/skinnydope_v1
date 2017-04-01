<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\SkinnyDope\Interfaces\ProductInterface;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	protected $product;

	public function __construct(ProductInterface $product){
		$this->product = $product;
	}

    public function homePage(){
    	// show a random project
    	$products = $this->product->randomRecords();
    	// show blurb
    	// show three events
    	// show signup form for email
    	// show copyright information.
    	return view('front.home.home', compact('products'));
    }
}
