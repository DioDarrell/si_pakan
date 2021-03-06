<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('halo', function () {
//     return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
// });

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('/', 'DataBarangController@index');
Route::get('/products/tambah', 'DataBarangController@tambah');
Route::post('/products/store', 'DataBarangController@store');
Route::get('/products/edit/{id}', 'DataBarangController@edit');
Route::put('/products/{id}', 'DataBarangController@update');
Route::delete('/products/{id}', 'DataBarangController@hapus');

Route::get('request', 'DataRequestController@reqList');
Route::get('request/cetak_pdf', 'DataRequestController@cetak_pdf');

Route::get('/products/cetak_pdf', 'DataBarangController@cetak_pdf');
