<?php


Route::get('/', function(){
	$articles = App\Article::all();
    return view('accueil', compact('articles'));
});

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

// Route::get('/articles/{article}', 'ArticlesController@show');

