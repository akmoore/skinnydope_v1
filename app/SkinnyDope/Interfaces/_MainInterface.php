<?php

namespace App\SkinnyDope\Interfaces;

interface _MainInterface {
	public function getRecords();
	public function addRecord($request);
	public function getRecord($id);
	public function updateRecord($request, $id);
	public function deleteRecord($id);
}