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
Route::get('/juri','JuriController@juri');
Route::get('/admin','AdminController@admin');
Route::get('/admin/hapus/{id_profile}','AdminController@hapus');
Route::get('/admin/setuju/{id_profile}','AdminController@setuju');
Route::get('/detail/{id_profile}','DetailController@detail');
Route::post('/nilai','DetailController@nilai');
Route::get('/full','FullController@full');
// Route untuk menampilkan form upload
Route::post('/upload', 'UploadController@upload');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');