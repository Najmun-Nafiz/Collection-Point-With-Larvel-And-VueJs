<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
