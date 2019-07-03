<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
  public function Clase(){
      return $this->hasMany('App\Clase');
  }
}
