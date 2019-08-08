<?php

namespace GiftListNow\Http\Controllers;

use GiftListNow\products_users;
use Illuminate\Http\Request;
use DB;
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
        $products = DB::table('products_users')
            ->join('products', 'products_users.id_product', '=', 'products.id')
            ->where("products_users.id_user", "=", auth()->user()->id)
            ->select('products.*')
            ->get();
            return view("userTable", ["products"=>$products]);
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
        DB::table('products_users')->where('id_user', '=', auth()->user()->id)->delete();
        foreach ($request->input() as $key => $value) {
            
            if(strpos($key, 'product') === 0){
                $productID = explode("-", $key)[1];
                $usrProd = new products_users();
                $usrProd->id_user = auth()->user()->id;
                $usrProd->id_product = $productID;
                $usrProd->save();
            }
        }
        //dd($request);
        
        return redirect('/user-products');

    }

    /**
     * Display the specified resource.
     *
     * @param  \GiftListNow\products_users  $products_users
     * @return \Illuminate\Http\Response
     */
    public function show(products_users $products_users, $id)
    {
        //
        $user = DB::table("users")->select("*")->where("event_code", "=", $id)->first();
        if (empty($user)) {
            return redirect("/main-table");
        }
        $products = DB::table('products_users')
            ->join('products', 'products_users.id_product', '=', 'products.id')
            ->where("products_users.id_user", "=", $user->id)
            ->select('products.*')
            ->get();
            return view("userTable", ["products"=>$products]);
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
    public function findByCode(Request $request)
    {
        //
        $code = $request->codeSearch;
        $user = DB::table("users")->select("*")->where("event_code", "=", $code)->first();
        if (empty($user)) {
            return redirect("/home")->withErrors(['search'=> 'Code not found']);
        }
        $products = DB::table('products_users')
            ->join('products', 'products_users.id_product', '=', 'products.id')
            ->where("products_users.id_user", "=", $user->id)
            ->select('products.*')
            ->get();
            return view("userTable", ["products"=>$products]);

    }

}
