<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('addview', 'App\Http\Controllers\homecontroller@addview')->name('add');
Route::post('store_item', 'App\Http\Controllers\homecontroller@store_item');
Route::get('fetchproducts', 'App\Http\Controllers\homecontroller@getitems')->name('view');

Route::delete('deleteitem/{id}', 'App\Http\Controllers\homecontroller@deleteitem');

Route::get('/edit/{product_id}', 'App\Http\Controllers\homecontroller@edit')->name('edit');
Route::put('update_item/{id}', 'App\Http\Controllers\homecontroller@updateitem');
//Route::post('update_item', 'App\Http\Controllers\homecontroller@update_item');