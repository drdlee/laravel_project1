<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post){
      $this->validate(request(), ['body'=>'required|min:2']);
      $post->addComment(request('body'));
      // kenapa langsung udah $post, karena di atas argument sudah ada shortcutnya (Post $post)
      // (Post $post) artinya $post = Post::find($post),
      // jadi $post ini artinya adalah postingan yang sekarang dipilih.
      return back();
    }
}
