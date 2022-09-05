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
    Route::get('/user', 'App\Http\Controllers\AdminController@user')->name('user');

    // Category
    Route::get('/category', 'App\Http\Controllers\CategoryController@index')->name('kategori');
    Route::get('/category/create', 'App\Http\Controllers\CategoryController@create')->name('kategori.create');
    Route::post('/category/store', 'App\Http\Controllers\CategoryController@store')->name('kategori.store');
    Route::get('/category/edit/{kategori}', 'App\Http\Controllers\CategoryController@edit')->name('kategori.edit');
    Route::post('/category/update/{kategori}', 'App\Http\Controllers\CategoryController@update')->name('kategori.update');
    Route::get('/category/delete/{kategori}', 'App\Http\Controllers\CategoryController@delete')->name('kategori.delete');

    // Slider
    Route::get('/slider', 'App\Http\Controllers\SliderController@index')->name('slider');
    Route::get('/slider/create', 'App\Http\Controllers\SliderController@create')->name('slider.create');
    Route::post('/slider/store', 'App\Http\Controllers\SliderController@store')->name('slider.store');
    Route::get('/slider/edit/{slider}', 'App\Http\Controllers\SliderController@edit')->name('slider.edit');
    Route::post('/slider/update/{slider}', 'App\Http\Controllers\SliderController@update')->name('slider.update');
    Route::get('/slider/delete/{slider}', 'App\Http\Controllers\SliderController@delete')->name('slider.delete');

    // Social Media
    Route::get('/socialmedia', 'App\Http\Controllers\SocialMediaController@index')->name('socialmedia');
    Route::get('/socialmedia/create', 'App\Http\Controllers\SocialMediaController@create')->name('socialmedia.create');
    Route::post('/socialmedia/store', 'App\Http\Controllers\SocialMediaController@store')->name('socialmedia.store');
    Route::get('/socialmedia/edit/{socialmedia}', 'App\Http\Controllers\SocialMediaController@edit')->name('socialmedia.edit');
    Route::post('/socialmedia/update/{socialmedia}', 'App\Http\Controllers\SocialMediaController@update')->name('socialmedia.update');
    Route::get('/socialmedia/delete/{socialmedia}', 'App\Http\Controllers\SocialMediaController@delete')->name('socialmedia.delete');

    //FAQ
    Route::get('/faq', 'App\Http\Controllers\FaqController@index')->name('faq');
    Route::get('/faq/create', 'App\Http\Controllers\FaqController@create')->name('faq.create');
    Route::post('/faq/store', 'App\Http\Controllers\FaqController@store')->name('faq.store');
    Route::get('/faq/edit/{faq}', 'App\Http\Controllers\FaqController@edit')->name('faq.edit');
    Route::post('/faq/update/{id}', 'App\Http\Controllers\FaqController@update')->name('faq.update');
    Route::get('/faq/delete/{faq}', 'App\Http\Controllers\FaqController@delete')->name('faq.delete');

    //About
    Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');
    Route::get('/about/create', 'App\Http\Controllers\AboutController@create')->name('about.create');
    Route::post('/about/store', 'App\Http\Controllers\AboutController@store')->name('about.store');
    Route::get('/about/edit/{about}', 'App\Http\Controllers\AboutController@edit')->name('about.edit');
    Route::post('/about/update/{id}', 'App\Http\Controllers\AboutController@update')->name('about.update');
    Route::get('/about/delete/{about}', 'App\Http\Controllers\AboutController@delete')->name('about.delete');

    //Product
    Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('product');
    Route::get('/product/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
    Route::post('/product/store', 'App\Http\Controllers\ProductController@store')->name('product.store');
    Route::get('/product/edit/{product}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
    Route::post('/product/update/{product}', 'App\Http\Controllers\ProductController@update')->name('product.update');
    Route::get('/product/detail/{product}', 'App\Http\Controllers\ProductController@detail')->name('product.detail');


    Route::get('/product/delete/{product}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');

    //users
    Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
    Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
    Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
    Route::get('/user/edit/{user}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
    Route::post('/user/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::get('/user/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');

});

require __DIR__ . '/auth.php';
