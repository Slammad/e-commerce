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

Route::get('/', 'PageController@index')->name('home');
Route::get('/shop','ShopController@index')->name('shop');
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('empty',function(){

    Cart::destroy();
});
Route::get('product/{product}','PageController@show')->name('product.show');
