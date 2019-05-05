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

Route::view('/about', 'HomeController@about');

Auth::routes();

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/product', 'ShopController@product');

Route::get('/shop/beer', 'ShopController@beer')->name('shop.beer');
Route::get('/shop/wine', 'ShopController@beer')->name('shop.wine');
Route::get('/shop/liquor', 'ShopController@beer')->name('shop.liquor');
Route::get('/shop/extras', 'ShopController@beer')->name('shop.extras');

Route::view('/cart', 'cart');

Route::get('/home', 'HomeController@home')->name('home');

Route::view('/checkout', 'HomeController@checkout');

Route::view('/thankyou', 'HomeController@thankyou');
