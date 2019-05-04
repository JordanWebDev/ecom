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
Route::get('/about', 'HomeController@about');

Route::get('/shop', 'HomeController@products');

Route::get('/product', 'HomeController@product');

Route::get('/cart', 'HomeController@cart');


Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/checkout', 'HomeController@checkout');

Route::get('/thankyou', 'HomeController@thankyou');
