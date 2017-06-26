<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
	use Sluggable;

    // protected $primaryKey = ['slug'];
	
    protected $fillable = [
    	'name', 'slug', 'width', 'height', 'depth',
    	'original', 'price', 'quantity', 'type',
    	'description', 'active', 'year', 'spotenvy'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    // Relationships
    public function images(){
    	return $this->morphMany(\App\Image::class, 'images');
    }
}
