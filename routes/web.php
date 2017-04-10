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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as' => 'front.home', 'uses' => 'Front\HomeController@homePage']);
Route::get('/illustrations/{illustration}', ['as' => 'front.illustration', 'uses' => 'Front\ProductController@show']);
Route::get('/paintings/{painting}', ['as' => 'front.painting', 'uses' => 'Front\ProductController@show']);
// Route::get('cart/{item}', ['as' => 'cart.add', 'uses' => 'Admin\CartController@addToCart']);
// Route::get('/checkout', ['as' => 'checkout.index', 'uses' => 'Admin\CartController@show']);
// Route::get('cart/{item}/delete', ['as' => 'cart.delete', 'uses' => 'Admin\CartController@deleteFromCart']);
// Route::get('/braintree/token','BraintreeTokenController@token')->name('braintree.token');
// Route::post('/checkout', ['as' => 'checkout.store', 'uses' => 'CheckoutController@checkout']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([ 'middleware' => 'auth', 'prefix' => 'dashboard'], function(){
	Route::get('/', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);
	Route::resource('products', 'Admin\ProductController');
	Route::resource('blurbs', 'Admin\BlurbController');
	Route::resource('events', 'Admin\EventController');
	Route::get('/profile', ['as' => 'profile', 'uses' => 'Admin\ProfileController@show']);
	Route::put('/profile/{user}', ['as' => 'profile.update', 'uses' => 'Admin\ProfileController@update']);
	Route::patch('/profile/{user}', ['as' => 'profile.update', 'uses' => 'Admin\ProfileController@update']);
	Route::get('/profile/logout', ['as' => 'profile.logout', 'uses' => 'Admin\ProfileController@logout']);
});

