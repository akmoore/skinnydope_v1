<?php

namespace App\SkinnyDope\Repositories;

use App\Event;
use Image;
use \Storage;
use App\SkinnyDope\Interfaces\EventInterface;

class EventRepo implements EventInterface{
	
	protected $event;

	public function __construct(Event $event){
		$this->event = $event;
	}

	public function getRecords(){
		$events = $this->event->latest()->get();
		return $events;
	}

	public function addRecord($request){
		$event = $this->event->create($this->modelFields($request));
		$this->saveImage($request, $event);
		return $event;
	}

	public function getRecord($id){
		$event = $this->event->find($id);
		if($event){
			return $event;
		}else{
			return false;
		}
	}

	public function updateRecord($request, $id){
		$event = $this->event->find($id);
		if($event){
			$event->update($this->modelFields($request));
			return $event;
		}else{
			return false;
		}
	}

	public function deleteRecord($id){
		$event = $this->event->find($id);
        if($event){
            $event->delete();
            return $event;
        }else{
            return false;
        }
	}

	private function modelFields($request){
		return [
			'title' => $request->title,
			'slug' => $request->slug,
			'date_time' => \Carbon\Carbon::parse($request->date_time),
			'building_title' => $request->building_title,
			'street' => $request->street,
			'city' => $request->city,
			'state' => $request->state,
			'postal' => $request->postal,
			'description' => $request->description
		];
	}

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
}