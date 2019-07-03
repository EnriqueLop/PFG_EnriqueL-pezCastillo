<?php

namespace App\Http\Controllers\Tutor;

use Auth;
use App\Hijo;
use App\Actividad;
use App\Consentimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index(){






    //SE HA COMPROBADO QUE EL PADRE TIENE HIJOS ASOCIADOS.
    $hijos = Hijo::where('user_id',Auth::user()->id)->get();


      $actividades = collect([]);
      foreach ($hijos as $hijo) {
        $actividades = $actividades ->merge(Actividad::where('clase_id',$hijo->clase_id)->get());
      }

      $actividades = $actividades->all();


      $consentimientos = collect([]);
      foreach ($hijos as $hijo) {
        $consentimientos = $consentimientos ->merge(Consentimiento::where('hijo_id',$hijo->id)->get());
      }


      $consentimiento = $consentimientos->where('hijo_id',2)->where('actividad_id',1);


      return view('tutor.dashboard',compact('hijos','actividades','consentimientos'));
  }
}
