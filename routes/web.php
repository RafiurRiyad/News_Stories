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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add/stories', 'HomeController@addPostForm');
Route::post('/add/stories', 'HomeController@savePost');

Route::get('/edit/stories/{id}', 'HomeController@editPostForm');
Route::post('/edit/stories', 'HomeController@editPost');

Route::get('/delete/stories/{id}', 'HomeController@deletePost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
