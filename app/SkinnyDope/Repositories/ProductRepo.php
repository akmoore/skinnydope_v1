<?php

namespace App\SkinnyDope\Repositories;

use App\Product;
use App\SkinnyDope\Helpers\ImageHelper;
use App\SkinnyDope\Interfaces\ProductInterface;

class ProductRepo implements ProductInterface{

	use ImageHelper;
	
	protected $product;

	public function __construct(Product $product){
		$this->product = $product;
	}

	public function randomRecords(){
		if($this->product->get()->count()){
			return $this->product->with('images')->where('active', 1)->get()->random(1);
		}
		return collect([]);
		// if($this->product->count() >= 5){
		// 	return $this->product->with('images')->get()->random(5);
		// }else{
		// 	return $this->product->with('images')->get()->random(1);
		// }
		
	}

	public function getRecords(){
		$products = $this->product->with('images')->where('active', 1)->orderBy('created_at', 'desc')->paginate(10);
		return $products;
	}

	public function addRecord($request){
		$product = $this->product->create($this->modelFields($request));
		$this->saveImage($request, $product);
		return $product;
	}

	public function getRecord($id){
		$product = $this->product->with('images')->find($id);
		if($product){
			return $product;
		}else{
			return false;
		}
	}

	public function updateRecord($request, $id){
		$product = $this->product->with('images')->find($id);
		if($product){
			$product->update($this->modelFields($request));
			if($request->hasFile('image')){
				$this->deleteImage($product);
				$this->saveImage($request, $product);
				return $product;
			}
			return $product;
		}else{
			return false;
		}
	}

	public function deleteRecord($id){
		$product = $this->product->find($id);
        if($product){
        	$this->deleteImage($product);
            $product->delete();
            return $product;
        }else{
            return false;
        }
	}

	private function modelFields($request){
		return [
			'name' => $request->name,
			'width' => $request->width,
			'height' => $request->height,
			'depth' => $request->depth,
			'original' => $request->quantity > 1 ? 0 : 1,
			'price' => $request->price,
			'quantity' => $request->quantity,
			'type' => $request->type,
			'active' => $request->isMethod('put') || $request->isMethod('patch') ? $request->active : 1,
			'description' => $request->description,
			'year' => $request->year
		];
	}

	
}