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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::resource('users','UserController');
Route::get('index', 'UserController@index');
Route::get('show/{id}', 'UserController@show');
Route::get('store', 'UserController@store');
Route::get('destroy/{id}', 'UserController@destroy');
Route::get('update/{id}', 'UserController@update');
