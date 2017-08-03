<?php


Route::get('/', function () {
	$articles = DB::table('articles')->get();
	// return $text;
    return view('accueil', compact('articles'));
});

Route::get('/diagnostic', function() {
	return view('diagnostic');
});

Route::get('/manifestations', function() {
	return view('manifestations');
});

