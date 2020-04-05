<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class CreateProductsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.create-product-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_product' => 'required',
            'categories_radio' => 'required',
            'price_product' => 'required',
            'manufacturer_radio' => 'required',
            'description_product' => 'required',
            'image_product' => 'required'
       ]);

       $path_image = $request -> file('image_product')->store('uploads', 'public');

       $product = new Products();
       $product -> name_product = $request -> input('name_product');
       $product -> categories = $request -> get('categories_radio',0);
       $product -> price = $request -> input('price_product');
       $product -> manufacturer = $request -> get('manufacturer_radio',0);
       $product -> description = $request -> input('description_product');
       $product -> path_image = $path_image;
       $product -> save();

       return redirect('/product-page-admin')->with('success', 'News save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
