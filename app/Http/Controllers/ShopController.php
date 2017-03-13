<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    // The normal shop page with no filters etc
    public function index() {

    	// Get all popular products from DB

    	// Show the page
    	return view('shop');

    }


}
