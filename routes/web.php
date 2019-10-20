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


Route::get('/blog-search', 'DisplayController@search')->name('search');


Route::get('/message', 'ContentsController@message')->name('message');


Route::get('/blog-post/{article}', 'DisplayController@post')->name('post');


Route::get('admin/nav','ContentsController@nav')->name('nav')->middleware(['admin','auth']);


Route::get('newsletter','ContentsController@newsletter')->name('newsletter');


Route::patch('published/{article}','ContentsController@published')->name('published')->middleware('auth');


Route::patch('admin/nav/{content}','ContentsController@navUpdate')->middleware(['admin','auth']);


Route::patch('admin/media/nav/{media}','MediasController@navUpdate')->middleware(['admin','auth']);


Route::get('admin/carousel','ContentsController@carousel')->name('carousel')->middleware(['admin','auth']);


Route::get('admin/carousel/images','MediasController@carousel')->name('images')->middleware(['admin','auth']);


Route::patch('admin/carousel/{content}','ContentsController@carouselUpdate')->middleware(['admin','auth']);


Route::patch('admin/media/carousel/{media}','MediasController@carouselUpdate')->middleware(['admin','auth']);


Route::delete('admin/media/carousel/{media}/delete','MediasController@carouselDelete')->middleware(['admin','auth']);


Route::get('admin/media/carousel/create','MediasController@carouselCreate')->middleware(['admin','auth']);


Route::get('admin/about','ContentsController@about')->name('about')->middleware(['admin','auth']);


Route::patch('admin/about/{content}','ContentsController@aboutUpdate')->middleware(['admin','auth']);


Route::patch('admin/media/video/{media}','MediasController@video')->middleware(['admin','auth']);


Route::patch('admin/media/lien/{media}','MediasController@lien')->middleware(['admin','auth']);


Route::get('admin/testimonial','ContentsController@testimonial')->name('testimonials')->middleware(['admin','auth']);


Route::patch('admin/testimonial/{content}','ContentsController@testimonialUpdate')->middleware(['admin','auth']);


Route::get('admin/team','ContentsController@team')->name('team')->middleware(['admin','auth']);


Route::patch('admin/team/{content}','ContentsController@teamUpdate')->middleware(['admin','auth']);


Route::get('admin/stand','ContentsController@stand')->name('stand')->middleware(['admin','auth']);


Route::patch('admin/stand/{content}','ContentsController@standUpdate')->middleware(['admin','auth']);


Route::get('admin/contact','ContentsController@contact')->name('contact')->middleware(['admin','auth']);


Route::patch('admin/contact/{content}','ContentsController@contactUpdate')->middleware(['admin','auth']);


Route::get('admin/service','ContentsController@service')->name('service')->middleware(['admin','auth']);


Route::patch('admin/service/{content}','ContentsController@serviceUpdate')->middleware(['admin','auth']);


Route::get('admin/news','ContentsController@news')->name('news')->middleware(['admin','auth']);


Route::patch('admin/news/{content}','ContentsController@newsUpdate')->middleware(['admin','auth']);


Route::resource('admin/services','ServicesController')->middleware(['admin','auth']);


Route::resource('admin/projets','ProjetsController')->middleware(['admin','auth']);


Route::resource('admin/testimonials','TestimonialsController')->middleware(['admin','auth']);



Route::resource('admin/teams','TeamsController')->middleware(['admin','auth']);



Route::get('editeur/articles','ArticlesController@editeur')->middleware(['editeur','auth']);



Route::resource('admin/articles','ArticlesController')->middleware(['auth']);



Route::resource('admin/tags','TagsController')->middleware(['admin','auth']);



Route::get('editeur/profile','UsersController@profile')->middleware(['editeur','auth']);



Route::get('editeur/user/edit','UsersController@editProfile')->middleware(['editeur','auth']);



Route::patch('editeur/user/update','UsersController@updateProfile')->middleware(['editeur','auth']);



Route::resource('admin/users','UsersController')->middleware(['admin','auth']);



Route::post('/comment/{id}','ContentsController@comment');







Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
