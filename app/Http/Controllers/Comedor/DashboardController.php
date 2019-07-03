<?php

namespace App\Http\Controllers\Comedor;

use Auth;
use App\Hijo;
use App\Clase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
      $usuario = Auth::user();

      $clases = Clase::where('colegio_id',$usuario->colegio_id)->get();


      $hijos = collect([]);

      foreach ($clases as $clase) {
        $hijos = $hijos ->merge(Hijo::where('clase_id',$clase->id)->get());
      }


      $hijos = $hijos->all();




      $hijos = Hijo::where('comedor',true)->get();


      return view('comedor.dashboard', compact('hijos'));

    }
}
