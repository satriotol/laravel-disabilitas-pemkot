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

Route::get('/', 'App\Http\Controllers\InterfaceController@index')->name('home');
Route::get('/home/cart', 'App\Http\Controllers\PesanController@cart')->name('cart');
Route::get('/home/cart/delete/{id}', 'App\Http\Controllers\PesanController@delete')->name('hapus-cart');
Route::get('/home/jual', 'App\Http\Controllers\InterfaceController@jual')->name('jual');
Route::get('/home/login', 'App\Http\Controllers\InterfaceController@daftar')->name('login');
Route::get('/product/gallery', 'App\Http\Controllers\InterfaceController@productgallery')->name('product-gallery');
Route::get('/product/gallery/{category}', 'App\Http\Controllers\InterfaceController@productgallerycategory')->name('product-gallery.category');
Route::get('/product/list', 'App\Http\Controllers\InterfaceController@productlist')->name('product-list');
Route::get('/product/list/{category}', 'App\Http\Controllers\InterfaceController@productlistcategory')->name('product-list.category');
Route::get('/product/show/{product}', 'App\Http\Controllers\InterfaceController@detail')->name('product-detail');
Route::get('/pesan/{id}', 'App\Http\Controllers\PesanController@index');
Route::POST('/pesan/{id}', 'App\Http\Controllers\PesanController@pesan')->name('pesan');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard');
    Route::get('/user', 'App\Http\Controllers\AdminController@user')->name('user');

    //tagline
    Route::get('/tagline', 'App\Http\Controllers\TaglineController@index')->name('tagline');
    Route::get('/tagline/create', 'App\Http\Controllers\TaglineController@create')->name('tagline.create');
    Route::post('/tagline/store', 'App\Http\Controllers\TaglineController@store')->name('tagline.store');
    Route::get('/tagline/edit/{tagline}', 'App\Http\Controllers\TaglineController@edit')->name('tagline.edit');
    Route::post('/tagline/update/{tagline}', 'App\Http\Controllers\TaglineController@update')->name('tagline.update');
    Route::get('/tagline/delete/{tagline}', 'App\Http\Controllers\TaglineController@delete')->name('tagline.delete');

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
    Route::get('/product/detail/create/{product}', 'App\Http\Controllers\ProductController@create_detail')->name('product.create_detail');
    Route::post('/product/detail/store/{product}', 'App\Http\Controllers\ProductController@store_detail')->name('product.store_detail');
    Route::get('/product/detail/delete/{product_image}', 'App\Http\Controllers\ProductController@delete_detail')->name('product.delete_detail');
    Route::get('/product/delete/{product}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');

    //users
    Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
    Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name('user.create');
    Route::post('/user/store', 'App\Http\Controllers\UserController@store')->name('user.store');
    Route::get('/user/edit/{user}', 'App\Http\Controllers\UserController@edit')->name('user.edit');
    Route::post('/user/update/{user}', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::get('/user/delete/{user}', 'App\Http\Controllers\UserController@delete')->name('user.delete');


    // Social Media
    Route::get('/kontakkami', 'App\Http\Controllers\KontakKamiController@index')->name('kontakkami');
    Route::get('/kontakkami/create', 'App\Http\Controllers\KontakKamiController@create')->name('kontakkami.create');
    Route::post('/kontakkami/store', 'App\Http\Controllers\KontakKamiController@store')->name('kontakkami.store');
    Route::get('/kontakkami/edit/{kontakkami}', 'App\Http\Controllers\KontakKamiController@edit')->name('kontakkami.edit');
    Route::post('/kontakkami/update/{kontakkami}', 'App\Http\Controllers\KontakKamiController@update')->name('kontakkami.update');
    Route::get('/kontakkami/delete/{kontakkami}', 'App\Http\Controllers\KontakKamiController@delete')->name('kontakkami.delete');


});

require __DIR__ . '/auth.php';

// Auth::routes();

