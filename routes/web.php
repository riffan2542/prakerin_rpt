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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// guest
// Route::get('/', function () {
//     return view('guest.index');
// });

// admin
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function () {
            return view('admin.index');
        });
        Route::resource('kategori', 'Kategori_Controller');
        Route::resource('tag', 'Tag_Controller');
        Route::resource('artikel', 'Artikel_Controller');

        Route::resource('kategorirev', 'Kategorirev_Controller');
        Route::resource('tagrev', 'Tagrev_Controller');
        Route::resource('review', 'Review_Controller');
    }
);

//guest data
Route::group(['prefix' => '/'], function () {
    Route::get('/', 'Frontend_Controller@index')->name('index');
    Route::get('/profil', function () {
        return view('frontend.profil');
    });

    Route::get('/kontak', function () {
        return view('frontend.kontak');
    });
    Route::get('/index', 'Frontend_Controller@allblog')->name('all.blog');
    Route::get('/index/{artikel}', 'Frontend_Controller@detailblog')->name('detail.blog');
    Route::get('/index/kategori/{cat}', 'Frontend_Controller@blogcat')->name('cat.blog');
    Route::get('/index/tag/{tag}', 'Frontend_Controller@blogtag')->name('tag.blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
