<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function slider()
    {
    	return $this->hasMany('App\Admin\Slider');
    }
}
