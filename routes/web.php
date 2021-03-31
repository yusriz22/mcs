<?php

Route::get('/', 'PageController@welcome')->name('page.home');

Route::get('contact', 'PageController@contact')->name('page.contact');
Route::post('contact', 'PageController@simpanContact')->name('contact.save');

Route::get('about', 'PageController@about')->name('page.about');
Route::get('/home', 'HomeController@index')->name('home');

// Route untuk paparkan template senarai produk
Route::get('products', 'ProductController@index')->name('products.list');
// Route untuk paparkan borang tambah produk
Route::get('products/add', 'ProductController@add')->name('products.add');
// Route untuk hantar maklumat produk yang ditambah pada borang
Route::post('products/add', 'ProductController@save')->name('products.save');

Auth::routes();