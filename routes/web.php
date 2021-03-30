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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('contact', function() {
    return view('pages.contact_form');
});

Route::get('contact/test', function() {
    return view('pages.contact_form');
});

Route::get('products', function() {
    
    $page_title = 'Senarai Produk Popular';

    $senarai_products = [
        ['id' => 1, 'name' => 'Produk A', 'harga' => 10.00],
        ['id' => 2, 'name' => 'Produk B', 'harga' => 15.00],
        ['id' => 3, 'name' => 'Produk C', 'harga' => 20.00]
    ];

    return view('pages.template_products');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
