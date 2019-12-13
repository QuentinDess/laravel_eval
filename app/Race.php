<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{ 
  protected $fillable = ['name','classification','life'];
  public function animal()
   {
    return $this->hasmany('App\Animal');
}
}
