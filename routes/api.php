<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('store_itemaapi', 'App\Http\Controllers\HomeApiController@store_itemAPI');
Route::get('fetchdataApi', 'App\Http\Controllers\HomeApiController@getproductJSON');
