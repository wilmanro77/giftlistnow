<?php

namespace GiftListNow\Http\Controllers;

use GiftListNow\products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();

        return view("mainTable", ["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("new-product");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nombre'=>'required',
            'precio'=>'required'
        ]);
        $producto = new products();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect("/main-table");
    }

    /**
     * Display the specified resource.
     *
     * @param  \GiftListNow\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \GiftListNow\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \GiftListNow\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \GiftListNow\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
