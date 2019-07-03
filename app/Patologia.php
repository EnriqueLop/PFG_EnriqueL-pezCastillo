<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{

  public function comedor(){
      return $this->hasMany('App\Comedor');
  }
}
