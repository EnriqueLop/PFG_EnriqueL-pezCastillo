<?php

namespace App\Http\Controllers\Profesor;

use Auth;
use App\Hijo;
use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
      //Se guarda el usuario en una variable
      $usuario = Auth::user();

      //Comprobación de que la información de la clase está completa:
      if($usuario->clase->curso==null){
        $usuario->clase->educacion=1;
        $usuario->save();
        return redirect('/derechos/rectificar');
      }



      //Si la clase no tiene código creado, se crea y se gurda en la clase correspondiente.
      if($usuario->clase->codigo==null){
        $codigo = '';
        $longitud = 15;
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $codigo .= $pattern{mt_rand(0,$max)};
        $usuario->clase->codigo=$codigo;
        $usuario->clase->save();
      }

      //Se obtienen los alumnos que pertenecen a la clase.
      $alumnos = Hijo::where('clase_id',$usuario->clase_id)->get();

      //Se cuenta el número de actividades creadas para la clase.
      $numActividades = Actividad::where('clase_id',$usuario->clase_id)->count();

        return view('profesor.dashboard', compact('usuario','alumnos','numActividades'));
    }
}
