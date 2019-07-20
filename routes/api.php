<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() {

  
  Route::get('/get_city','Api\DataController@getCity');

  Route::get('/get_all','Api\DataController@getAll');
  Route::get('/get_township','Api\DataController@getTownship');
  Route::get('/get_alledit','Api\DataController@getAllEdit');
  Route::get('/get_event_hall','Api\DataController@getEventHall');

});

