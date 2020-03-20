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

Route::get('/about', function () {
    return view('sites.pages.about');
});

Route::get('/contacts', function () {
    return view('sites.pages.contact');
});
Route::get('/photo', function () {
    return view('sites.pages.foto');
});
Route::get('/price', function () {
    return view('sites.pages.price');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
