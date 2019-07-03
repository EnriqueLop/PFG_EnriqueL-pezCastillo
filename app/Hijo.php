<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hijo extends Model
{
  public function user(){
      return $this->belongsTo('App\User');
  }

  public function comedor(){
      return $this->hasMany('App\Comedor');
  }

}
