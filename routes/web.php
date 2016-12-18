<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/products','ProductsController@index');
Route::post('/products/show','ProductsController@show');
Route::get('/history','CartController@index');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/update', 'ProfileController@update');
Route::post('/profile/store', 'ProfileController@store');
Route::get('/cart', 'CartController@index');
Route::get('/cart/show', 'CartController@show');
Route::post('/cart/add', 'CartController@add');
Route::post('/cart/remove', 'CartController@remove');
Route::post('/cart/push_cart', 'CartController@push_cart');
Route::post('/cart/cancel', 'CartController@cancel');
Route::get('/admin/users','AdminController@show_users');
Route::get('/admin/products','AdminController@show_products');
Route::post('/admin/show','AdminController@show');
Route::post('/admin/make_admin','AdminController@make_admin');
Route::post('/admin/delete','AdminController@delete');
Route::post('/admin/show_product','AdminController@show_product');
Route::get('/admin/create_product','AdminController@create_product');
Route::post('/admin/store_product','AdminController@store_product');
Route::post('/admin/delete_product','AdminController@delete_product');
Route::post('/admin/edit_product','AdminController@edit_product');
Route::post('/admin/update_product','AdminController@update_product');
Route::post('/admin/view_order_history','AdminController@view_order_history');
Route::get('/admin/shop','AdminController@shop');
Route::get('/admin/cart','AdminController@cart');
Route::post('/admin/shop_show_product','AdminController@shop_show_product');
Route::post('/admin/cart_add','AdminController@cart_add');
Route::post('/admin/cart_remove','AdminController@cart_remove');
Route::post('/admin/cart_cancel','AdminController@cart_cancel');
Route::post('/admin/push_cart','AdminController@cart_push');
