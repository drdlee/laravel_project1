<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function scopeIncomplete($query){  // cara panggilnya, Task::incomplete()->get();
    return $query->where('completed', 0);   // cara panggil pakai kondisi, Task::incomplete()->where('id', '>=', 2)->get();
  }
}
