<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category() {
    	return $this->belongsTo('App\Category', 'categories_id');
    }
}
