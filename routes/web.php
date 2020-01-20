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


Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/addvertise', function () {
    return view('addvertise');
});

Route::get('/beauty_services', function () {
    return view('beauty_services');
});

Route::get('/beautyclass', function () {
    return view('beautyclass');
});

Route::get('/beautysalons', function () {
    return view('beautysalons');
});

Route::get('/beautyclass', function () {
    return view('beautyclass');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cosmetic', function () {
    return view('cosmetic');
});

Route::get('/submitAdd', function () {
    return view('submitAdd');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
