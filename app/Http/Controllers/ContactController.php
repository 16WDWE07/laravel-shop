<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {

    	// Get all popular products from DB

    	// Show the page
    	return view('contact');

    }
}
