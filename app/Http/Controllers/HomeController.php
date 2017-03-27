<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function index() {

    	// Get most popular products
    	$allProducts = Product::all();

    	// Show the most popular products
    	return view('home.index', compact('allProducts'));

    }
}
