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
    // return view('welcome', [ 'name' => 'World' ]);   // cara pertama u/ passing value ke views
    // return view('welcome')->with('name', 'Woody');      // cara ke dua passing data ke views
    $tasks = [
      'Go to the store',
      'Makan ikan',
      'Baja jalan xiao hei'
    ];
    return view('welcome', compact('tasks'));
});

Route::get('/about', function(){
  return view('about');
});
