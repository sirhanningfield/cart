<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PagesController extends Controller
{
    public function getHome()
    {
        //Create Products variable
        $products = Item::orderBy('id','desc')->paginate(8);
     
        //return to home view
        return view('pages.home')->withProducts($products);
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
