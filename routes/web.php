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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("/main-table", "ProductsController");
Route::resource("/user-products", "ProductsUsersController")
	 ; //login required
Route::post("/find-by-code", "ProductsUsersController@findByCode")
	 ->name('find-code');//login required
Route::post("/process", "ProductsUsersController@process")
	 ->name('process'); //login required
