<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(){
      $posts = Post::latest();
      if(request(['month', 'year'])){
        $posts->filter(request(['month', 'year']));
      }
      $posts = $posts->get();




      return view('posts.index', compact('posts','archives'));
    }
    public function show(Post $post){
      return view('posts.show', compact('post'));
    }
    public function create(){
      return view('posts.create');
    }
    public function store(){
      // $post = new Post;
      // $post->title = request('title');
      // $post->body = request('body');
      // $post->save();
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      Post::create([
        'title' => request('title'),
        'body' => request('body'),
        'user_id'=> auth()->id()
      ]);   //   ini namanya mass assignment dimana laravel akan butuh sentingan di Model Post, kalau mau pakai cara ini

      return redirect('/posts');
    }
}
