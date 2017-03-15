<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// Laravel will assume "Categorys" which is wrong
	// We need to tell Laravel what the table name is
    protected $table = 'categories';
}
