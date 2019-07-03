<?php

namespace App\Http\Controllers\Director;

use App\Clase;
use App\Educacion;
Use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
      public function index(){
        $clases = Clase::where('colegio_id', Auth::user()->colegio_id)->get()->sortBy('educacion_id');
        $clases = $clases->sortBy('curso');
        $clases = $clases->sortBy('letra');
        $educaciones = Educacion::all();

        $usuario = Auth::user();

        //COMPROBACIÓN
        if($usuario->colegio->name == null){
          return view('director.informacion');
        }



        return view('director.dashboard',compact('clases','educaciones','usuario'));
      }
}
