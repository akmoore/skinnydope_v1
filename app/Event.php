<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
	use Sluggable;

    protected $fillable = [
    	'title', 'slug', 'date_time', 
    	'building_title', 'street', 'city',
    	'state', 'postal', 'description'
    ];

    protected $appends = ['address'];

    protected $dates = ['date_time'];

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getAddressAttribute(){
        $city = $this->city ? $this->city . ', ' : '';
        $state = $this->state ? $this->state : '';
        $postal = $this->postal ? ', ' . $this->postal :'';
        return $city . $state;
    }

    // Relationships
    public function images(){
    	return $this->morphMany(\App\Image::class, 'images');
    }
}
