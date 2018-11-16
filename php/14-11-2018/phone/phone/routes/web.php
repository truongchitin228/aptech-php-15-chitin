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
Route::get('/phones', 'PhoneController@index')->name('phone.index');
Route::get('/phones/create', 'PhoneController@create')->name('phone.create');
Route::post('/phones', 'PhoneController@store')->name('phone.store');
Route::get('/phones/{id}', 'PhoneController@show')->name('phone.show');
Route::delete('/phones/{id}', 'PhoneController@destroy')->name('phone.destroy');
Route::get('/phones/{id}/edit', 'PhoneController@edit')->name('phone.edit');
Route::put('phones/{id}', 'PhoneController@update')->name('phone.update');
