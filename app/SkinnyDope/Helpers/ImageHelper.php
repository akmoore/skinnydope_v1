<?php

namespace App\SkinnyDope\Helpers;

use Image;
use \Storage;

trait ImageHelper {

	private function saveImage($request, $item){
		
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

       	$imageTable = $item->images()->create([
       		'image_large' => $arry[1],
       		'image_front_page' => $arry[0],
       		'image_medium' => $arry[2],
       		'image_small' => $arry[3],
       		'image_thumb' => $arry[4],
       		'portrait' => $portrait
       	]);

       	return $imageTable;
	}

	private function deleteImage($item){
		//grab all the images strings from the image table associated with the item
		$pimages = $item->images()->first();
		//throw images of $pimages into an $imageArray
		$imageArray = [
			$pimages->image_large,
			$pimages->image_front_page,
			$pimages->image_medium,
			$pimages->image_small,
			$pimages->image_thumb
		];
		// map over the $imageArray and delete each image within the array
		collect($imageArray)->map(function($image){ 
			Storage::disk('public')->delete('images/' . $image);
		});
		//delete the image record
		$pimages->delete();

		return 'deleted';

	}
}