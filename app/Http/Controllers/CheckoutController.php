<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use Session;

class CheckoutController extends Controller
{
    //
    public function getAddressForm()
    {
    	# code...
    	return view('checkout.address');
    }

    public function postAddress(Request $request)
    {
    	# code...
    	$this->validate($request,array(

    		'firstname'=>'required',
    		'lastname'=>'required',
    		
    		'street'=>'required',
    		'city'=>'required',
    		'zip'=>'required',
    		'state'=>'required',
    		'country'=>'required',
    		'phone'=>'required',
    		'email'=>'required'

    		));

    	$address = new Shipping;
    	$address->firstname = $request->firstname;
    	$address->lastname = $request->lastname;
    	$address->company = $request->company;
    	$address->street = $request->street;
    	$address->city = $request->city;
    	$address->zip = $request->zip;
    	$address->state = $request->state;
    	$address->country = $request->country;
    	$address->phone = $request->phone;
    	$address->email = $request->email;

    	$address->save();

    	Session::flash('Success','Address successfully added');

    	return redirect()->route('checkout.payment');

    }

   public function getCheckoutPayment()
   {
   		# code...
   		return view('checkout.paymentdetails');
   }



}
