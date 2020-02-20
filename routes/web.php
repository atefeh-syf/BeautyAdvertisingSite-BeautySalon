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


Route::get('/adminblogadd', function () {
    return view('adminpage-blog-all');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});




Route::group(['prefix' => 'add'], function () {
    Route::get('/{addvertise}/edit', 'AdminController@addvertiseEdit');
    Route::patch('/{addvertise}', 'AdminController@addvertiseUpdate');
    Route::delete('/{addvertise}', 'AdminController@addvertiseDestroy');
    Route::post('', 'AdminController@addvertiseStore');
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/{blog}/edit', 'AdminController@blogEdit');
    Route::patch('/{blog}', 'AdminController@blogUpdate');
    Route::delete('/{blog}', 'AdminController@blogDestroy');
    Route::get('', 'articlesController@index');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/{user}/edit', 'AdminController@profileEdit');
    Route::patch('/{user}', 'AdminController@profileUpdate');   
});

Route::group(['prefix' => 'setting'], function () {
    Route::get('', 'AdminController@getSetting');
    Route::patch('/update', 'AdminController@updateSetting');
});

Route::group(['prefix' => 'a'], function () {
    Route::get('/create', 'addvertisesController@create');
    Route::get('/create/special', 'addvertisesController@createSpecial');
    Route::post('', 'addvertisesController@store');
    Route::post('/special', 'addvertisesController@storeSpecial');
    Route::get('/{addvertise}', 'addvertisesController@show')->name('addvertise.show');
});

Route::get('/admin', 'AdminController@index');
Route::get('/header', 'optionsController@index');
Route::get('/footer', 'optionsController@index');
Route::get('/add-all', 'AdminController@showAddvertise');
Route::get('/add-cat', 'AdminController@showCategory');
Route::post('/add-addCat', 'AdminController@categoryStore');
Route::get('/blog-all', 'AdminController@showArticle');
Route::post('/blog-add', 'AdminController@blogStore');

Route::patch('/confirm/{addvertise}', 'AdminController@confirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/c', 'commentsController@store');
Route::get('/cat/{catname}', 'categoriesController@show');

Route::group(['prefix' => 'contact'], function () {
    Route::get('/create', 'contactController@create');
    Route::post('', 'contactController@store');
});

Route::post('/search', 'addvertisesController@search');

Route::get('/add-form', function () {
    return view('admin/addvertise-add');
});

Route::get('/blog-from', function () {
    return view('admin/blog-add');
});

