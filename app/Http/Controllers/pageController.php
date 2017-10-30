<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
	// to load the view from the controller than from the route
    public function getIndex()
    {
    	return view('index');
    }

    // public function getAbout()
    // {
    // 	return view('about');
    // }

    // public function getContact()
    // {
    // 	return view('contact');
    // }
}
