<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    
    // The normal shop page with no filters etc
    public function index() {

    	// Get all popular products from DB
    	$allProducts = Product::all();

    	// Show the page
    	return view('shop', compact('allProducts'));

    }


}
