<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $fillable = ['title', 'body'];
    protected $guarded = []; //  artinya field yang terjaga.. disini arraynya kosong,
}                            //  artinya ngga ada field yang terjaga
