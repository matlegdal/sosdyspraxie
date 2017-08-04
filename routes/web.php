<?php


Route::get('/', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

// Route::get('/articles/{article}', 'ArticlesController@show');

