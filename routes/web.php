<?php

Route::get('/', 'PageController@index');
Route::get('/contact', 'PageController@contact');
Route::get('/price', 'PageController@price');
Route::get('/about', 'PageController@about');

Route::resource('application', 'ApplicationController');
Route::resource('service', 'ServiceController');
Route::resource('post', 'PostController');
