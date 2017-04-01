<?php

namespace App\SkinnyDope\Repositories;

use App\Image;
use App\SkinnyDope\Interfaces\ImageInterface;

class ImageRepo implements ImageInterface{
	
	protected $image;

	public function __construct(Image $image){
		$this->image = $image;
	}

	public function getRecords(){
		$images = $this->image->all();
		return $images;
	}

	public function addRecord($request){
		$image = $this->image->create($this->modelFields($request));
		return $image;
	}

	public function getRecord($id){
		$image = $this->image->find($id);
		if($image){
			return $image;
		}else{
			return false;
		}
	}

	public function updateRecord($request, $id){
		$image = $this->image->find($id);
		if($image){
			$image->update($this->modelFields($request));
			return $image;
		}else{
			return false;
		}
	}

	public function deleteRecord($id){
		$image = $this->image->find($id);
        if($image){
            $image->delete();
            return $image;
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
			'description' => $request->description
		];
	}
}