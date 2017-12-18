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

// routed auth
Auth::routes();

//work upload
Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::post('/admin/upload-work', 'UploadController@store')->middleware('auth');
Route::redirect('/home', '/admin');