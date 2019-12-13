<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{   protected $fillable = ['name','age','gender','size','race_id'];
    public function race()
   {
       return $this->belongsTo('App\Race');
   }
}
