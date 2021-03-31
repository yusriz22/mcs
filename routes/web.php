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
// Route untuk papar borang edit
Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');
// Route untuk dapatkan data edit produk
Route::patch('products/{id}/edit','ProductController@update')->name('products.update');
// Route untuk delete data produk
Route::delete('products/{id}', 'ProductController@destroy')->name('products.delete');

// Route Resource
Route::resource('users', 'UserController');



Route::get('languange/{locale}', function ($locale) {
    \App::setLocale($locale);
    return redirect()->route('page.home');
})->name('tukar.bahasa');

Auth::routes();