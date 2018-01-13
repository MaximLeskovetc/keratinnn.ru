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

Route::get('/', 'PageController@index');
Route::get('/contact', 'PageController@contact');
Route::get('/price', 'PageController@price');
Route::get('/profile', 'PageController@profile');


Route::resource('application', 'ApplicationController');
Route::resource('service', 'ServiceController');
Route::resource('post', 'PostController');
Route::resource('portfolio', 'PortfolioController');
Route::resource('comments', 'CommentsController');

Auth::routes();

Route::get('/admin', 'HomeController@admin');
Route::get('/logout', 'HomeController@logout');
