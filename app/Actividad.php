<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
  public function clase(){
      return $this->belongsTo('App\Clase');
  }

  public function consentimiento(){
      return $this->hasMany('App\Consentimiento');
  }

  public function tipo(){
      return $this->belongsTo('App\Tipo');
  }
}
