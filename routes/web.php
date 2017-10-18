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
Route::get('/articles', 'ArticlesController@index');
Route::get('article/{id}', 'ArticlesController@getById')->name('article.detail');

Route::resource('/admin/posts', 'Admin\PostsController');
Route::resource('/admin/users','Admin\UserController');
Route::resource('/admin/categories','Admin\CategoriesController');
Route::resource('/admin/tags','Admin\TagsController');

Route::get('/blog', 'PostsController@index')->name('blog.index');
Route::get('blog/{id}', 'PostsController@show')->name('blog.show');

Route::get('/list','CategoriesController@index')->name('list.index');
Route::get('/list/single/{id}','CategoriesController@single')->name('list.single');
