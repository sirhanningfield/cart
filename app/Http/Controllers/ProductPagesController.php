<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductPagesController extends Controller
{
    //
    public function getMen()
    {
    	# code...
    	return view('productpages.men');
    }


    public function getLadies()
    {
    	# code...
    	return view('productpages.ladies');
    }
}
