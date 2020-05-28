<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('produk', 'Frontend\ProductController');
Route::resource('contact-us', 'Frontend\ContactController');
Route::resource('proyek', 'Frontend\ProyekController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/product', 'Backend\ProductController');
});
