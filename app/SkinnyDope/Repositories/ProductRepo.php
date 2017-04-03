<?php

namespace App\SkinnyDope\Repositories;

use App\Product;
use Image;
use \Storage;
use App\SkinnyDope\Interfaces\ProductInterface;

class ProductRepo implements ProductInterface{
	
	protected $product;

	public function __construct(Product $product){
		$this->product = $product;
	}

	public function randomRecords(){
		return $this->product->with('images')->get()->random(1);
		// if($this->product->count() >= 5){
		// 	return $this->product->with('images')->get()->random(5);
		// }else{
		// 	return $this->product->with('images')->get()->random(1);
		// }
		
	}

	public function getRecords(){
		$products = $this->product->with('images')->orderBy('created_at', 'desc')->paginate(10);
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
		$product = $this->product->find($id);
		if($product){
			$product->update($this->modelFields($request));
			return $product;
		}else{
			return false;
		}
	}

	public function deleteRecord($id){
		$product = $this->product->find($id);
        if($product){
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

	private function saveImage($request, $product){
		
		$file = $request->file('image');
        $name = str_random(20);
        $image_sizes = [
        	'image_front_page'=>1200, 
        	'image_large'=>2000, 
        	'image_medium'=>850, 
        	'image_small'=>500, 
        	'image_thumb'=>200
        ];
        $arry = [];
        $image = Image::make($file);
        $portrait = $image->height() > $image->width();

        foreach($image_sizes as $type => $size){

            if($type === 'image_thumb'){
                 $image->fit($size, $size, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }else{
                $image->resize($size, null, function($constraint){
                    $constraint->aspectRatio();
                });
            }
            
            $file_name = $name . '_' . $type . '.jpg';

            $storage = Storage::disk('public')->put('images/' . $file_name, (string) $image->encode());

            $arry[] = $file_name;
        }

        // return $arry;

       	$imageTable = $product->images()->create([
       		'image_large' => $arry[1],
       		'image_front_page' => $arry[0],
       		'image_medium' => $arry[2],
       		'image_small' => $arry[3],
       		'image_thumb' => $arry[4],
       		'portrait' => $portrait
       	]);

       	return $imageTable;
	}
}