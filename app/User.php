<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Sluggable;

    protected $fillable = [
        'first_name', 'email', 'password',
        'last_name', 'slug', 'cell_phone'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }

    public function getFullNameAttribute(){
        return $this->first_name . ' ' . $this->last_name;
    }

    protected $appends = ['full_name'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
