<?php

namespace GiftListNow\Http\Controllers;

use GiftListNow\User_products_list;
use Illuminate\Http\Request;
use DB;
class UserProductsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = DB::table('user_products_list')
            ->join('products', 'user_products_list.product_id', '=', 'products.id')
            ->where("user_products_list.user_id", "=", auth()->user()->id)
            ->select('products.*')
            ->get();
            return view("giftlist", ["products"=>$products]);
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
        DB::table('user_products_list')->where('user_id', '=', auth()->user()->id)->delete();
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
        
        return redirect('/giftlist');

    }

    /**
     * Display the specified resource.
     *
     * @param  \GiftListNow\products_users  $products_users
     * @return \Illuminate\Http\Response
     */
    public function show(User_products_list $products_users, $id)
    {
        //
        $user = DB::table("users")->select("*")->where("event_code", "=", $id)->first();
        if (empty($user)) {
            return redirect("/products");
        }
        $products = DB::table('user_products_list')
            ->join('products', 'user_products_list.product_id', '=', 'products.id')
            ->where("user_products_list.user_id", "=", $user->id)
            ->select('products.*')
            ->get();
            return view("giftlist", ["products"=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \GiftListNow\User_products_list  $products_users
     * @return \Illuminate\Http\Response
     */
    public function edit(User_products_list $products_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \GiftListNow\User_products_list  $user_products_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_products_list $user_products_list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \GiftListNow\User_products_list  $user_products_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_products_list $user_products_list)
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
        $products = DB::table('user_products_list')
            ->join('products', 'user_products_list.product_id', '=', 'products.id')
            ->where("user_products_list.user_id", "=", $user->id)
            ->select('products.*')
            ->get();
            return view("giftlist", ["products"=>$products]);

    }

    public function process(Request $request)
    {
        //
        return json_encode($request->product);

    }

    

}
