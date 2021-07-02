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
/*Route::get('/json-api/{id}', function (Request $request) {
    dd($request->all());
});*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/json-api/{id}', 'NewsStoriesController@json_api');
Route::get('/xml-api', 'NewsStoriesController@xml_api');
