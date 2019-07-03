<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
  public function colegio(){
      return $this->belongsTo('App\Colegio');
  }

  public function user(){
      return $this->hasMany('App\User');
  }

  public function hijo(){
      return $this->hasMany('App\Hijo');
  }

  public function educacion(){
      return $this->belongsTo('App\Educacion');
  }

  public function excusion(){
      return $this->hasMany('App\Excusion');
  }

}
