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
Route::get('/about', 'PageController@about');


Route::get('/login', 'UsersController@getLogin');
Route::post('/login', 'UsersController@postLogin');

Route::resource('application', 'ApplicationController');
Route::resource('service', 'ServiceController');
Route::resource('post', 'PostController');
Route::resource('portfolio', 'PortfolioController');
Route::resource('comments', 'CommentsController');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'PageController@admin');
});

//Route::get('/application', 'ApplicationController@index');
//Route::get('/application/{application}', 'ApplicationController@show');
//
//
////Заявки
//Route::post('/application', 'ApplicationController@store');
//Route::delete('/application/{application}', 'ApplicationController@delete');
//
////Комментарии
//Route::post('/comment', 'CommentsController@store');
//Route::delete('/comment/{comment}', 'CommentsController@delete');
//Страница профиля
//Route::get('/profile', 'PageController@profile');
