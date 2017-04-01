<?php

namespace App\SkinnyDope\Repositories;

use App\Blurb;
use App\SkinnyDope\Interfaces\BlurbInterface;

class BlurbRepo implements BlurbInterface{
	
	protected $blurb;

	public function __construct(Blurb $blurb){
		$this->blurb = $blurb;
	}

	public function getRecords(){
		$blurbs = $this->blurb->latest()->get();
		return $blurbs;
	}

	public function addRecord($request){
		$blurb = $this->blurb->create($this->modelFields($request));
		return $blurb;
	}

	public function getRecord($id){
		$blurb = $this->blurb->find($id);
		if($blurb){
			return $blurb;
		}else{
			return false;
		}
	}

	public function updateRecord($request, $id){
		$blurb = $this->blurb->find($id);
		if($blurb){
			$blurb->update($this->modelFields($request));
			return $blurb;
		}else{
			return false;
		}
	}

	public function deleteRecord($id){
		$blurb = $this->blurb->find($id);
        if($blurb){
            $blurb->delete();
            return $blurb;
        }else{
            return false;
        }
	}

	private function modelFields($request){
		return [
			'blurb' => $request->blurb
		];
	}
}