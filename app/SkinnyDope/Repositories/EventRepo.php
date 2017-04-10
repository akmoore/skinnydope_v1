<?php

namespace App\SkinnyDope\Repositories;

use App\Event;
use App\SkinnyDope\Helpers\ImageHelper;
use App\SkinnyDope\Interfaces\EventInterface;

class EventRepo implements EventInterface{

	use ImageHelper;
	
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
			if($request->hasFile('image')){
				$this->deleteImage($event);
				$this->saveImage($request, $event);
				return $event;
			}
			return $event;
		}else{
			return false;
		}
	}

	public function deleteRecord($id){
		$event = $this->event->find($id);
        if($event){
        	$this->deleteImage($event);
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
			'description' => $request->description,
			// 'viewable' => $request->isMethod('put') || $request->isMethod('patch') ? $request->viewable : 1,
		];
	}

}