<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'name', 'price', 'quantity', 'customer_id',
    	'finished'
    ];

    // Relationships
    public function customer(){
    	return $this->belongsTo(\App\Customer::class);
    }
}
