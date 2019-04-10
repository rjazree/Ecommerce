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

Route::get('/', 'HomeController@Index');
Route::get('/home', 'HomeController@home');

Route::get('/cart', 'HomeController@Cart');

Route::get('/categories', 'HomeController@categories');

Route::get('/checkout', 'HomeController@checkout');

Route::get('/contact', 'HomeController@contact');

Route::get('/product', 'HomeController@product');

Route::get('/admin', 'HomeController@admin');



Route::get('/chartjs', 'HomeController@chartjs');

Route::get('/morris', 'HomeController@morris');

Route::get('/inline', 'HomeController@inline');

Route::get('/flot', 'HomeController@flot');


Route::get('/advanced', 'HomeController@advance');
Route::get('/editors', 'HomeController@editor');
Route::get('/general', 'HomeController@general');






