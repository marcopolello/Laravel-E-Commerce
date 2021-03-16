<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::view('/', 'main');
Route::view('/products', 'products');
Route::view('/product', 'product');
Route::view('/cart', 'cart');
Route::view('/checkout', 'checkout');
Route::view('/thankyou', 'thankyou');
