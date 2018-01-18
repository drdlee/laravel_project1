<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $guarded = [];
    public function comments(){
      return $this->hasMany(Comment::class);
    }
    public function  addComment($body){
      $this->comments()->create(compact('body'));
      // penjelasan ---
      // $this->comments()  ini adalah function yang di declare di atas, pas kita bikin relation ke Comments
      // jadi kita bilang tolong create data dari body, kedalam Comment kolom body
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, $filters){
      if($month = $filters['month']){
        $query->whereMonth('created_at', Carbon::parse($month)->month);    //  month yang kita dapat dari request kan 'may'
      }                                                                    //  kita perlu cari cara bikin 'may' jadi '5', makanya pakai Carbon
      if($year = $filters['year']){
        $query->whereYear('created_at', $year);
      }
    }
}
