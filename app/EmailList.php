<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailList extends Model
{
    protected $fillable = [
    	'first_name', 'last_name', 'email'
    ];
}
