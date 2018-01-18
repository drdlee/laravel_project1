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
use App\Task;   // mengapa pakai ini? karena Task ada di dalam namespace App

Route::get('/tasks', 'TasksController@index');

Route::get('tasks/{id}', 'TasksController@show');

Route::get('/about', function(){
  return view('about');
});

Route::get('/posts', 'PostController@index')->name('home');   // ->name('home') ini kasih nama buat route ini
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
