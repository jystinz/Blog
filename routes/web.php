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

\Illuminate\Support\Facades\Route::get('/', 'PostsController@index');
\Illuminate\Support\Facades\Route::get('/posts/create', 'PostsController@create');
\Illuminate\Support\Facades\Route::post('/posts', 'PostsController@store');
\Illuminate\Support\Facades\Route::get('/posts/{post}', 'PostsController@show');