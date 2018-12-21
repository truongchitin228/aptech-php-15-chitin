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
Route::get('/phone','UserController@index')->name('user.index');
// thêm 1 người dùng trong bảng
Route::get('/phone/create', 'UserController@create')->name('user.create');
//xem 1 người dùng trong bảng
Route::get('/phone/{id}', 'UserController@show')->name('user.show');
//xóa 1 người dùng trong bảng
Route::delete('/phone/{id}', 'UserController@destroy')->name('user.destroy');
/// sửa 1 người dùng trong bảng
Route::get('/phone/{id}/edit', 'UserController@edit')->name('user.edit');
// cập nhật thông tin trong bảng
Route::put('/phone/{id}/edit', 'UserController@update')->name('user.update');
