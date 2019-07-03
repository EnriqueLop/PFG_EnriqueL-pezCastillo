<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comedor extends Model
{
  public function hijo(){
      return $this->belongsTo('App\Hijo');
  }

  public function patologia(){
      return $this->belongsTo('App\Patologia');
  }
}
