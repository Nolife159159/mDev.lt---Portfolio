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

// baseic pages
Route::view('/', 'pages.welcome');
Route::view('/about-us', 'pages.about');
Route::view('/our-work', 'pages.work');
Route::view('/contact-us', 'pages.contact');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');