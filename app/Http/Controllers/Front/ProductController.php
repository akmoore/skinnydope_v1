<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\SkinnyDope\Interfaces\ProductInterface;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	protected $product;

	public function __construct(ProductInterface $product){
		$this->product = $product;
	}

    public function show($id){
    	// show the product
    	$art = $this->product->getRecord($id);
    	// the image is on the left of the page
    	// the information is on the right of the page
    	// there is an add to cart button (consider using vue.js for this function)
    	// if($product->type === 'illustration') return view('front.')
        if($art) return view('front.products.product', compact('art'));
    	return abort(404);
    	return 'hello';
    }

    public function productPane(){
    	// show all products in reverse chronological order
    	// allow for filtering
    	// this is available on all pages
    }
}
