<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'images_id', 'images_type', 'image_large',
    	'image_front_page', 'image_medium',
    	'image_small', 'image_thumb', 'portrait'
    ];

    // Relationships
    public function images(){
    	return $this->morphTo();
    }
}
