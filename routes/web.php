<?php


// Landing
Route::get('/', function(){
	$articles = App\Article::all();
    return view('accueil', compact('articles'));
});


// Article CRUD
Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::put('/articles/{article}', 'ArticlesController@update');

Route::delete('/articles/{article}', 'ArticlesController@delete');

// Livre

Route::get('/livre', 'CommentController@index');

Route::post('/livre', 'CommentController@store');

Route::delete('/livre/{comment}', 'CommentController@delete');