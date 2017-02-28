<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Item;
use Session;


class CartController extends Controller
{
    //
    public function getAddToCart($id)
    {
    	# code...
    	$product = Item::find($id);

    	$item = Cart::add(['id' => $product->productno, 'name' => $product->title, 'qty' => 1, 'price' => $product->price]);

    	Session::flash('Success','The product was successfully added to cart');
    	
    	return redirect()->back();

    }

    public function getCartIndex()
    {
    	# code...
    	$items = Cart::content();

    	return view('cart.cartIndex')->withItems($items);
    }
   
}
