<?php

namespace App\SkinnyDope\Repositories;

use App\User;
use App\SkinnyDope\Interfaces\UserInterface;

class UserRepo implements UserInterface {

	protected $user;

	public function __construct(User $user){
		$this->user = $user;
	}

	public function getRecords(){
		//
	}

	public function addRecord($request){
		//
	}

	public function getRecord($id){
		$user = $this->user->find($id);
		return $user;
	}

	public function updateRecord($request, $id){
		$user = $this->user->find($id);
		if($request->new_password){
			if(\Hash::check($request->current_password, \Auth::user()->password)){
				$password = $request->new_password;
				$user->update($this->modelFields($request, $password));
				return [true, $user];
			}
			return [false, 'The current password entered is invalid.'];
		}
		$user->update($this->modelFields($request));
		return [true, $user];

	}

	public function deleteRecord($id){
		//
	}

	private function modelFields($request, $password = null){
		$cell_phone = preg_replace('/[^A-Za-z0-9]/', "", $request->cell_phone); // http://bit.ly/2nYHhpo
		return [
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'cell_phone' => $cell_phone,
			'password' => $password ? bcrypt($password) : \Auth::user()->password
		];
	}
}