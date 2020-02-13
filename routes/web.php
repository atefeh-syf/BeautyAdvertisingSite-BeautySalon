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

Route::get('/', 'addvertisesController@index')->name('addvertise.index');
/* Route::get('/', function () {
    return view('welcome');
}); */



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

//Route::get('/admin', function () {
//  return view('adminpage');
//});
Route::get('/adminblogadd', function () {
    return view('adminpage-blog-all.blade');
  });



Route::get('/admin', 'AdminController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'articlesController@index');


Route::get('/a/create', 'addvertisesController@create');
Route::post('/a', 'addvertisesController@store');
Route::get('/a/{addvertise}', 'addvertisesController@show')->name('addvertise.show');

Route::post('/c', 'commentsController@store');

Route::get('/cat/{catname}', 'categoriesController@show');

Route::get('/contact/create', 'contactController@create');
Route::post('/contact', 'contactController@store');


Route::post('/search', 'addvertisesController@search');



