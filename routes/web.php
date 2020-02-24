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
Route::get('/user', 'UserController@index');
Route::get('edit/','EditController@edit');
// Route untuk menampilkan form upload
Route::post('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
