<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
  public function user(){
      return $this->hasMany('App\User');
  }

  public function clase(){
      return $this->hasMany('App\Clase');
  }

}
