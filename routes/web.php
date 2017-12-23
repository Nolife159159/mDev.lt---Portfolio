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

// basic pages
Route::view('/', 'pages.welcome');
Route::view('/about-us', 'pages.about');
Route::view('/contact-us', 'pages.contact');

// work
Route::get('/our-work', 'WorkController@index');

// remove - edit work
Route::get('admin/work-delete/{id}', 'AdminController@deleteWork')->name('admin')->middleware('auth');

// work show and edit [post]
Route::get('admin/work-edit/{id}', 'AdminController@show')->name('admin')->middleware('auth');
Route::post('admin/work-edit/{id}', 'AdminController@store')->name('admin')->middleware('auth');

Route::get('admin/work-image-delete/{work_id}/{img_id}', 'AdminController@deleteWorkImage')->name('admin')->middleware('auth');

// routed auth
Auth::routes();

//work upload
Route::get('/admin', 'AdminController@index')->middleware('auth');

// all about works
Route::post('/admin/upload-work', 'UploadController@store')->middleware('auth');
Route::redirect('/home', '/admin');
