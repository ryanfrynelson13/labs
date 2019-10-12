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

Route::get('/', 'DisplayController@home')->name('welcome');


Route::get('/services', 'DisplayController@services')->name('services');


Route::get('/blog', 'DisplayController@blog')->name('blog');


Route::get('/contact', 'DisplayController@contact')->name('contact');


Route::get('/blog-post/{id}', 'DisplayController@post')->name('post');


Route::get('admin/nav','ContentsController@nav')->name('nav')->middleware('auth');


Route::patch('admin/nav/{content}','ContentsController@navUpdate')->middleware('auth');


Route::patch('admin/media/nav/{media}','MediasController@navUpdate')->middleware('auth');


Route::get('admin/carousel','ContentsController@carousel')->name('carousel')->middleware('auth');


Route::get('admin/carousel/images','MediasController@carousel')->name('images')->middleware('auth');


Route::patch('admin/carousel/{content}','ContentsController@carouselUpdate')->middleware('auth');


Route::patch('admin/media/carousel/{media}','MediasController@carouselUpdate')->middleware('auth');


Route::delete('admin/media/carousel/{media}/delete','MediasController@carouselDelete')->middleware('auth');


Route::get('admin/media/carousel/create','MediasController@carouselCreate')->middleware('auth');


Route::get('admin/about','ContentsController@about')->name('about')->middleware('auth');


Route::patch('admin/about/{content}','ContentsController@aboutUpdate')->middleware('auth');


Route::patch('admin/media/video/{media}','MediasController@video')->middleware('auth');


Route::patch('admin/media/lien/{media}','MediasController@lien')->middleware('auth');



Route::resource('admin/services','ServicesController');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
