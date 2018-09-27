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

Route::get('/', 'studyController@index');

// admin
Route::get('/admin', function () {
    return view('admin.admin');
});

// shop
Route::get('/profile', 'UserController@index')->middleware('auth');
Route::get('/profile/{user}', 'UserController@show');

Route::get('/shop', function () {
	return view('shop.index');
});

// study
Route::get('/study', function () {
	return view('study.index');
});

Route::get('/enroll/{id}', 'EnrollController@create');

Route::get('/courses', 'CourseController@index');

Route::get('/courses/{course}', 'CourseController@show');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts/create', 'PostController@store');

Route::get('posts/{post}', 'PostController@show');

Route::get('/posts/{post}/edit', 'PostController@edit');

Route::post('/posts/{post}/update', 'PostController@update');

Route::get('/posts/{post}/delete', 'PostController@destroy');

// general
Route::get('contact', function () {
	return view('contact');
});

Route::get('about', function () {
	return view('about');
});
Route::get('users',['uses' => 'UserController@index']);

Route::post('/inquiry','InquiryController@store');

Route::get('/posts',function(){
	return view('study.posts.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
