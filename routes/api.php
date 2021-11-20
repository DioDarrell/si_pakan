<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('products', 'DataBarangApiController@index');
Route::post('/products', 'DataBarangApiController@store');
Route::get('/products/{id}', 'DataBarangApiController@show');
Route::put('/products/{id}', 'DataBarangApiController@update');
Route::delete('/products/{id}', 'DataBarangApiController@hapus');

Route::get('reqlist', 'DataRequestApiController@index');
Route::post('/products', 'DataBarangApiController@store');
Route::get('/products/{id}', 'DataBarangApiController@show');
Route::put('/products/{id}', 'DataBarangApiController@update');
Route::delete('/products/{id}', 'DataBarangApiController@hapus');