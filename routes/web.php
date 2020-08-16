<?php

use App\Dealer;
use App\Greeting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::apiResource ( 'mysample', 'MySampleResourceController' );

Route::get('form4update-avatar', function (){
    return view('form4update-avatar');
});
Route::post('test/{user}/updateavatar', 'UpdateuseravatarController');
Route::get('invoke', 'InvokeController');

//Неявная привязка модели Dealer маршрута...... 73
Route::get('dealers/{dealer}', function (Dealer $dealer) {
    return view('dealeredit')->with('dealer', $dealer); });
Route::get('events/{event}', function (Dealer $event) {
    return view('dealeredit')->with('dealer', $event); });

Route::get('form', function () { return view('form'); });

Route::post('form', function (Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), $this->validationRules);
if ($validator->fails()) {
    return back()
        ->withErrors($validator)
        ->withInput();
    }
});
Route::post('form', function () {
    return redirect('form')
        ->withInput()
        ->with(['error' => true, 'message' => 'Whoops! ']);
});
