<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
    	return view('pages.home');
    }

    public function getAbout()
    {
    	# code...
    	return view('pages.about');
    }

    public function getcontact()
    {
    	# code...
    	return view('pages.contact');
    }
}
