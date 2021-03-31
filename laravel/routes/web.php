<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Controller@index') -> name('welcome');

Route::get('/products', 'ProductController@index')
-> name('products');
Route::get('/product/{id}', 'ProductController@show')
-> name('product-show');

Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');


Route::view('/homepage', 'homepage');
Route::view('/land', 'land');
