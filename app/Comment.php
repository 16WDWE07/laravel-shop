<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['comment', 'users_id', 'posts_id'];

    public function posts() {
    	return $this->belongsTo('App\Post');
    }

    public function users() {
    	return $this->belongsTo('App\User');
    }
}
