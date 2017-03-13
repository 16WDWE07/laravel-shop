<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {

    	// Get all popular products from DB

    	// Show the page
    	return view('about');

    }
}
