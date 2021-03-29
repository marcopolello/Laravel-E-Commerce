<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'ProductController@index') -> name('products');

Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');


Route::view('/homepage', 'homepage');
Route::view('/land', 'land');
