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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', function()
// {
//     return 'Hello World';
// });

Route::get('/hell', function() {
	return view('greeting');
});


Route::get('/hello', function() {
	return view('hello.greeting', ['name' => 'Janus']);
});


// Route::get('/hello', function() {
// 	return view('hello/greeting', ['name' => 'Janus']);
// });

Route::get('/about', 'AboutController@index');

// Route::get('about', ['uses' => 'AboutController@index', 'as' => 'about']);
