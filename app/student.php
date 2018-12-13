<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['first_name','last_name'];

    public function getFullNameAttribute()
    {
    	return $this->first_name . ' ' . $this->last_name;
    }
}
