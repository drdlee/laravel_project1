<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function comments(){
      return $this->hasMany(Comment::class);
    }
    public function user(){  //$post->user->name
      return $this->belongsTo(User::class);
    }
    public function  addComment($body){
      $this->comments()->create(compact('body'));
      // penjelasan ---
      // $this->comments()  ini adalah function yang di declare di atas, pas kita bikin relation ke Comments
      // jadi kita bilang tolong create data dari body, kedalam Comment kolom body
    }
}
