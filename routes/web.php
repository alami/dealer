<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "DealerController@index");
Route::get('/edit/{id}', "DealerController@edit");
Route::get('/show/{id}', "DealerController@show");
Route::get('/create', "DealerController@create");
Route::post('/store', "DealerController@store");
Route::post('/update/{id}', "DealerController@update");
