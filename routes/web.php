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

    // Social Media
    Route::get('/socialmedia', 'App\Http\Controllers\SocialMediaController@index')->name('socialmedia');

    //FAQ
    Route::get('/faq', 'App\Http\Controllers\FaqController@index')->name('faq');
    Route::get('/faq/create', 'App\Http\Controllers\FaqController@create')->name('fac.create');
    Route::post('/faq/store', 'App\Http\Controllers\FaqController@store')->name('faq.store');
    Route::get('/faq/edit/{id}', 'App\Http\Controllers\FaqController@edit')->name('faq.edit');
    Route::post('/faq/update/{id}', 'App\Http\Controllers\FaqController@update')->name('faq.update');
    Route::get('/faq/delete/{faq}', 'App\Http\Controllers\FaqController@delete')->name('faq.delete');

    //About
    Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');
    Route::get('/about/create', 'App\Http\Controllers\AboutController@create')->name('about.create');
    Route::post('/about/store', 'App\Http\Controllers\AboutController@store')->name('about.store');
    Route::get('/about/edit/{id}', 'App\Http\Controllers\AboutController@edit')->name('about.edit');
    Route::post('/about/update/{id}', 'App\Http\Controllers\AboutController@update')->name('about.update');
    Route::get('/about/delete/{faq}', 'App\Http\Controllers\AboutController@delete')->name('about.delete');
});

require __DIR__ . '/auth.php';
