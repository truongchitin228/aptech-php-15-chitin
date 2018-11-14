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
//trang chủ của locahot
Route::get('/', function () {
    return view('welcome');
});
//xem tất cả người dùng 
Route::get('/index','UserController@index')->name('user.index');
// thêm 1 người dùng trong bảng
Route::get('/index/create', 'UserController@create')->name('user.create');
//xem 1 người dùng trong bảng
Route::get('/index/{id}', 'UserController@show')->name('user.show');
//xóa 1 người dùng trong bảng
Route::delete('/index/{id}', 'UserController@destroy')->name('user.destroy');
/// sửa 1 người dùng trong bảng
Route::get('/index/{id}/edit', 'UserController@edit')->name('user.edit');
// cập nhật thông tin trong bảng
Route::put('/index/{id}/edit', 'UserController@update')->name('user.update');
