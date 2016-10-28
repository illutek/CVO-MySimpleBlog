<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'BlogController@index')->name('blog.index');
Route::get('post/{id}', 'BlogController@show')->name('blog.show');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.loginform');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('admin/posts', 'Admin\PostsController@index')->name('admin.posts.index');