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

Route::get('/', 'PageController@welcome')->name('page.home');

Route::get('contact', 'PageController@contact')->name('page.contact');
Route::post('contact', 'PageController@simpanContact')->name('contact.save');

Route::get('products', 'ProductController@index')->name('products.list');
Route::get('about', 'PageController@about')->name('page.about');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();