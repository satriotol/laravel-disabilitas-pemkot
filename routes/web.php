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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'App\Http\Controllers\AdminController@tabel1')->name('tabel.1');
    Route::get('/admin1', 'App\Http\Controllers\AdminController@tabel2')->name('tabel.2');
    Route::get('/admin2', 'App\Http\Controllers\AdminController@tabel3')->name('tabel.3');

    Route::get('/category', 'App\Http\Controllers\CategoryController@kategori')->name('kategori');
    Route::get('/category/create', 'App\Http\Controllers\CategoryController@create')->name('kategori.create');
    Route::get('/slider', 'App\Http\Controllers\SliderController@slider')->name('slider');
});

require __DIR__ . '/auth.php';
