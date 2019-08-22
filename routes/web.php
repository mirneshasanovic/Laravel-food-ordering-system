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

Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_food', 'FoodController@index')->name('add_food')->middleware('auth');
Route::post('/store_food', 'FoodController@store')->name('store_food')->middleware('auth');
Route::get('/todays_offer', 'FoodController@todays_offer')->name('todays_offer');
Route::post('/customer_order', 'CustomerController@store')->name('customer_order');
Route::get('/orders', 'CustomerController@index')->name('orders')->middleware('auth');

