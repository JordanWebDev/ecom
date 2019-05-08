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

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('empty', function(){
    Cart::destroy();
});

Route::get('/about', 'PagesController@index')->name('about.index');

Route::get('/blog', 'PagesController@blog')->name('blog.index');

Route::get('/terms', 'PagesController@terms')->name('terms.index');

Route::get('/testimonials', 'PagesController@testimonials')->name('testimonials.index');

Route::get('/faq', 'PagesController@faq')->name('faq.index');

Route::get('/privacy', 'PagesController@privacy')->name('privacy.index');

Route::get('/marketing', 'PagesController@marketing')->name('martketing.index');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');



Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');

Route::get('/thankyou', 'CheckoutController@payment')->name('payment.index');
