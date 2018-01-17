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

Route::get('/tasks', function () {
    // $tasks = DB::table('tasks')->latest()->get();
    $tasks = Task::all();  //  ambil data pakai Eloquent Model
    return view('tasks/index', compact('tasks'));
});

Route::get('tasks/{id}', function($id){
  // $tasks = DB::table('tasks')->find($id);
  $tasks = Task::find($id);  //  ambil data pakai Eloquent Model
  return view('tasks.show', compact('tasks'));   // task.show juga bisa di tulis task/show
});

Route::get('/about', function(){
  return view('about');
});
