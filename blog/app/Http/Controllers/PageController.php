<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome()
    {
    	return view('layouts.index');
    }
    public function getAbout()
    {
    	return view('layouts.about');
    }
    public function getContact()
    {
    	return view('layouts.contact');
    }
}
