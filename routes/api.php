<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//menampilkan sukses tidaknya data yang masuk melalui API
Route::resource('kategori', 'API\KategoriController');
Route::resource('tag', 'API\TagController');
Route::resource('artikel', 'API\ArtikelController');

//menampilkan data ke bagian frontend
Route::group(['prefix' => 'json'], function () {
    Route::get('/latest', 'API\FrontendController@latest');
    Route::get('/all', 'API\FrontendController@all');
});
