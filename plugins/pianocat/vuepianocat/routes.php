<?php

use Pianocat\Vuepianocat\Models\Cover;
use Pianocat\Vuepianocat\Models\Home;
use Pianocat\Vuepianocat\Models\Patrons;

Route::get('covers', function() {
	$covers = Cover::all();
	return $covers;
});
Route::get('patrons', function() {
	//$patreon = file_get_contents('https://www.patreon.com/api/campaigns/945106');
	//$patreon = json_decode($patreon);	
	//return response()->json($patreon);

	
	//return $patrons;
});
Route::get('covers/{slug}', function() {
	$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$slug = basename($url);
	$patrons = Patrons::all();
	$cover = Cover::with(['sheetpreview', 'sheetpdf'])->where('slug', $slug)->get();
	$cover[0]["patrons"] = $patrons;
	return $cover;
});
Route::get('home', function() {
	$home = Home::all();
	return $home;
});