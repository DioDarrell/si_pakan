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

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('barang', 'DataBarangController@index');
Route::get('/barang/tambah', 'DataBarangController@tambah');
Route::post('/barang/store', 'DataBarangController@store');
Route::get('/barang/edit/{id}', 'DataBarangController@edit');
Route::post('/barang/update', 'DataBarangController@update');
Route::get('/barang/hapus/{id}', 'DataBarangController@hapus');