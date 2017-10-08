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

Route::get('/about', 'AboutController@index');

Route::get('/blog', 'PostsController@index');

Route::get('/articles', 'ArticlesController@index');
Route::get('/list', 'ArticlesController@list');
Route::get('/chunk', 'ArticlesController@chunkPosts');
Route::get('article/{id}', 'ArticlesController@getById')->name('article.detail');


// Route::get('about', ['uses' => 'AboutController@index', 'as' => 'about']);

// Route::get('/', function()
// {
//     return 'Hello World';
// });

// Route::get('/hell', function() {
// 	return view('greeting');
// });

Route::get('/mess', 'MessagesController@index');

Route::get('/add', 'MessagesController@add');
Route::post('/ins', 'MessagesController@insert');


// Route::get('/hello', function() {
// 	return view('hello.greeting', ['name' => 'Janus']);
// });

// Route::get('/hello', function() {
// 	return view('hello/greeting', ['name' => 'Janus']);
// });
