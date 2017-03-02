<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Static pages routes
Route::get('contact','PagesController@getContact');
Route::get('about','PagesController@getAbout');
Route::get('/',['as'=> 'home','uses'=>'PagesController@getHome']);


//Product pages routes
Route::get('men',[
	'as'=>'men',
	'uses'=>'ProductPagesController@getMen'
	]);

Route::get('ladies',[
	'as'=>'ladies',
	'uses'=>'ProductPagesController@getLadies'
	]);



//ProductController routes
Route::resource('products','ProductController');




//CartController Routes:
Route::get('cart/{id}',[
	'as'=>'cart.add', 
	'uses'=>'CartController@getAddToCart'
	]);

Route::get('cart',[
	'as'=>'cart.index',
	'uses'=>'CartController@getCartIndex']);

Route::match(['post','put'],'updateitem/{rowId}',[
	'as'=>'item.update',
	'uses'=> 'CartController@UpdateItem'
	]);

Route::post('deleteitem/{rowId}',[
	'as'=>'item.delete',
	'uses'=>'CartController@DeleteItem']);




//Checkout routes:
Route::get('checkout/address',[
	'as'=>'checkout.address',
	'uses'=>'CheckoutController@getAddressForm'
	]);

Route::post('checkout/address',[
	'as'=>'checkout.store',
	'uses'=>'CheckoutController@postAddress'
	]);

Route::get('checkout/payment-details',[
	'as'=>'checkout.payment',
	'uses'=>'CheckoutController@getCheckoutPayment'
	]);

Route::post('checkout/make-payment',[
	'as'=>'checkout.makepayment',
	'uses'=>'CheckoutController@postStorePayment'
	]);