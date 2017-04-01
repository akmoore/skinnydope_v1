<?php

namespace App\SkinnyDope\Interfaces;

// use App\SkinnyDope\Interfaces\_MainInterface as MI;

interface CartInterface {
	public function addItem($id);
	public function deleteItem($id);
	public function getCart();
}