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

Route::get('/', 'IndexController@welcome')->name('home');
Route::get('/shops', 'ShopController@shops')->name('shops');
Route::get('/shop/{id}', 'ShopController@show');
Route::get('referral-program', 'PageController@referral')->name('referral');
Route::get('/user', 'UserController@cabinet');
