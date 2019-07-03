<?php

namespace App\Http\Controllers;

use Auth;
use App\Colegio;
use App\Clase;
use App\Hijo;
use Illuminate\Http\Request;

class DerechosController extends Controller
{
  public function index(){
    $usuario = Auth::user();

    if($usuario == null){
      return redirect('/login');
    }

    return view('derechos.derechos',compact('usuario'));
  }

  public function rectificar(){
    $usuario = Auth::user();

    if($usuario->role_id == 2){

      $colegio = Colegio::find($usuario->colegio_id);

      return view('director.rectificar',compact('usuario','colegio'));
    }elseif($usuario->role_id == 3){

      $clase = Clase::find($usuario->clase_id);

      $clase = $usuario -> clase;
      if($clase->educacion_id == null){
        $clase->educacion_id = 1;
        $clase->save();

      }



      return view('profesor.rectificar',compact('usuario','clase'));

    }elseif($usuario->role_id == 4){

      $hijos = Hijo::where('user_id',$usuario->id)->get();

      return view('tutor.rectificar',compact('usuario','hijos'));

    }else{

      return redirect('/login');
    }


  }
}
