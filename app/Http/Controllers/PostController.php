<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
      return view('posts.index');
    }
    public function create(){
      return view('posts.create');
    }
    public function store(){
      // $post = new Post;
      // $post->title = request('title');
      // $post->body = request('body');
      // $post->save();

      Post::create([
        'title' => request('title'),
        'body' => request('body')
      ]);   //   ini namanya mass assignment dimana laravel akan butuh sentingan di Model Post, kalau mau pakai cara ini

      return redirect('/posts');
    }
}
