<?php


Route::get('/', function () {
    return view('accueil');
});

Route::get('/diagnostic', function() {
	return view('diagnostic');
});

Route::get('/manifestations', function() {
	return view('manifestations');
});