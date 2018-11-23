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
Route::get('/onetomany','PostController@index')->name('user.index');
// thêm 1 người dùng trong bảng
Route::get('/onetomany/create', 'PostController@create')->name('user.create');
//xem 1 người dùng trong bảng
Route::get('/onetomany/{id}', 'PostController@show')->name('user.show');
//xóa 1 người dùng trong bảng
Route::delete('/onetomany/{id}', 'PostController@destroy')->name('user.destroy');
/// sửa 1 người dùng trong bảng
Route::get('/onetomany/{id}/edit', 'PostController@edit')->name('user.edit');
// cập nhật thông tin trong bảng
Route::put('/onetomany/{id}/edit', 'PostController@update')->name('user.update');

