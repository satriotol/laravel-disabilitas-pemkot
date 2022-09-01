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

    // Category
    Route::get('/category', 'App\Http\Controllers\CategoryController@kategori')->name('kategori');
    Route::get('/category/create', 'App\Http\Controllers\CategoryController@create')->name('kategori.create');
    Route::post('/category/store', 'App\Http\Controllers\CategoryController@store')->name('kategori.store');
    Route::get('/category/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('kategori.edit');
    Route::post('/category/update/{id}', 'App\Http\Controllers\CategoryController@update')->name('kategori.update');
    Route::get('/category/delete/{category}', 'App\Http\Controllers\CategoryController@delete')->name('kategori.delete');

    // Slider
    Route::get('/slider', 'App\Http\Controllers\SliderController@index')->name('slider');
    Route::get('/slider/create', 'App\Http\Controllers\SliderController@create')->name('slider.create');
    Route::post('/slider/store', 'App\Http\Controllers\SliderController@store')->name('slider.store');
    Route::get('/slider/edit/{id}', 'App\Http\Controllers\SliderController@edit')->name('Slider.edit');


});

require __DIR__ . '/auth.php';
