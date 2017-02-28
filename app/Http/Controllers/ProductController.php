<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;
use Session;
use Image;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the request:
        $this->validate($request,array(
            'productno'=>'required|max:255|unique:items,productno',
            'title'=>'required|max:255',
            'description'=>'required|min:10',
            'price'=>'required',
            'category'=>'required',
            'subcategory'=>'required',
            'quantity'=>'required',
            'image'=>'sometimes|image'
            ));

        //Make a new product:
        $product = new Item;
        $product->productno = $request->productno;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->subcategory = $request->subcategory;
        $product->quantity = $request->quantity;

        if ($request->hasFile('image')) {
            # code...
            $image = $request->file('image');
            $filename = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/product/'.$filename);
            image::make($image)->resize(450,600)->save($location);

            $product->image = $filename;
        }


        //Save the product:
        $product->save();

        //Add a session message for success
        Session::flash('Success','The product was successfully saved');

        // redirect
        return redirect()->route('home')->withProduct($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get the product with the id
        $product = Item::find($id);

        //Redirect to product page
        return view('product.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
