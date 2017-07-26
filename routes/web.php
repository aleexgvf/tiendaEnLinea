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

//Route::group(['middleware' => ['web']], function () {
Route::bind('product', function($slug){
 return App\Product::where('slug', $slug)->first();
});
Route::get('cart/show', [
 'as' => 'cart-show',
 'uses' => 'CartController@show'
 ]);
Route::get('cart/add/{product}', [
 'as' => 'cart-add',
 'uses' => 'CartController@add'
 ]);
//});﻿

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
	]);
Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses'=> 'CartController@trash'
	]);
Route::get('cart/update/{product}/{quantity]',[
	'as'=> 'cart-update',
	'uses' => 'CartController@update'
	]);


//-----------------------------------------------



Route::get('/', function () {
    return view('welcome');
});


//pagina Principal
Route::get('/home', 'StoreController@index');

//Detalle del producto
Route::get('product/{slug}', [
	'as' => 'product-detail',
	'uses'=> 'StoreController@show'
	]);


		


Auth::routes();

Route::get('/home', 'StoreController@index')->name('home');
Route::get('/logout', 'LoginController@getLogout')->name('logout');
