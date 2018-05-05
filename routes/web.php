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

\Illuminate\Support\Facades\Route::get('/', 'PostsController@index')->name('home');
\Illuminate\Support\Facades\Route::get('/posts/create', 'PostsController@create');
\Illuminate\Support\Facades\Route::post('/posts', 'PostsController@store');
\Illuminate\Support\Facades\Route::get('/posts/{post}', 'PostsController@show');

\Illuminate\Support\Facades\Route::post('/posts/{post}/comments', 'CommentsController@store');

\Illuminate\Support\Facades\Route::get('/register', 'RegistrationController@create');
\Illuminate\Support\Facades\Route::post('/register', 'RegistrationController@store');

\Illuminate\Support\Facades\Route::get('/login', 'SessionsController@create')->name('login');
\Illuminate\Support\Facades\Route::post('/login', 'SessionsController@store');
\Illuminate\Support\Facades\Route::get('/logout', 'SessionsController@destroy');