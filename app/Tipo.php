<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
  public function actividad(){
      return $this->hasMany('App\Actividad');
  }
}
