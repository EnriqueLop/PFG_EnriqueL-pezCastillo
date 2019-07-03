<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
  public function recibir(Request $request){
    $usuario = Auth::user();

    if($usuario->enviar_correo==1){
      $usuario->enviar_correo=0;
    }else{
      $usuario->enviar_correo=1;
    }
    $usuario->save();

    return redirect('/derechos');
    
  }


}
