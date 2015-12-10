<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);


Route::get('blog', ['as' => 'post.blog', 'uses' => 'PostController@index']);
Route::get('contact', ['as' => 'page.contact', 'uses' => 'CustomPageController@contact']);
Route::get('about-us', ['as' => 'page.about-us', 'uses' => 'CustomPageController@aboutus']);
Route::get('category', ['as' => 'index', 'uses' => 'CategoryBlogController@index']);
Route::get('category/{slug}', ['as' => 'category.slug', 'uses' => 'CategoryBlogController@slug'])->where('slug', '[A-Za-z_0-9_-]+');
Route::get('post/{id}', ['as' => 'post.id', 'uses' => 'PostController@show'])->where('id', '[0-9]+');
Route::get('post/{slug}', ['as' => 'post.slug', 'uses' => 'PostController@slug'])->where('slug', '[A-Za-z_0-9_-]+');