<?php

namespace GiftListNow\Http\Controllers;

use GiftListNow\products_users;
use Illuminate\Http\Request;

class ProductsUsersController extends Controller
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
        foreach ($request->input() as $key => $value) {
            
            if(strpos($key, 'product') === 0){
                $productID = explode("-", $key)[1];
                $usrProd = new products_users();
                $usrProd->id_usuario = auth()->user()->id;
                $usrProd->id_producto = $productID;
                $usrProd->save();
            }
        }
        //dd($request);
        
        return redirect('/main-tabla');

    }

    /**
     * Display the specified resource.
     *
     * @param  \GiftListNow\products_users  $products_users
     * @return \Illuminate\Http\Response
     */
    public function show(products_users $products_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \GiftListNow\products_users  $products_users
     * @return \Illuminate\Http\Response
     */
    public function edit(products_users $products_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \GiftListNow\products_users  $products_users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products_users $products_users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \GiftListNow\products_users  $products_users
     * @return \Illuminate\Http\Response
     */
    public function destroy(products_users $products_users)
    {
        //
    }
}
