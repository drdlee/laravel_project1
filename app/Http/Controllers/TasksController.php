<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
  public function index(){
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
  }

  public function show(Task $id){  // ini cara singkat untuk cari data yang telah di kasih dari Route, dan sangat sensitive
    return view('tasks.show', compact('tasks'));  //  maksudnya sensitive, kalo di Route pakai {id}, sini juga harus pakai $id
  }                                               //  tapi sekarang tanpa konfigurasi apapun dia hanya akan mencari 'primary-key' dari Task
}
