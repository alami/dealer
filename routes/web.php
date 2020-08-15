<?php

use App\Greeting;
use Illuminate\Support\Facades\Route;

Route::get('/', "DealerController@index");
Route::get('/edit/{id}', "DealerController@edit");
Route::get('/show/{id}', "DealerController@show");
Route::get('/create', "DealerController@create");
Route::post('/store', "DealerController@store");
Route::post('/update/{id}', "DealerController@update");

Route::get('/test',function (){
    return response('test is ok !');
});

Route::get('create-greeting', function () {
    $greeting = new Greeting;
    $greeting->body = 'Hello, World!';
    $greeting->save();
    return response('record was saved in DB !');
});
Route::get('first-greeting', function () { return Greeting::first()->body; });
