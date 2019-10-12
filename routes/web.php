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


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
