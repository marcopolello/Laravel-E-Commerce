<?php

use Illuminate\Support\Facades\Route;

// test x vedere se db è corretto
// Route::get('/test/env', function () {
//     dd(env('DB_DATABASE')); // dump db variable value one by one
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::view('/', 'main');
Route::get('/', 'MainController@index') -> name('main');
Route::view('/shop', 'shop');
Route::view('/product', 'product');
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
