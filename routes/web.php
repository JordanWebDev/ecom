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

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/product', 'ShopController@product');

Route::view('/cart', 'cart');

Route::view('/about', 'HomeController@about');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::view('/checkout', 'HomeController@checkout');

Route::view('/thankyou', 'HomeController@thankyou');
