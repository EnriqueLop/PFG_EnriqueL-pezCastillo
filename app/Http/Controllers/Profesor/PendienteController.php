<?php

namespace App\Http\Controllers\Profesor;

use Auth;
use \PDF;



use App\Hijo;
use App\Actividad;
use App\Consentimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuario = Auth::user();

      //ACTIVIDADES QUE HA CREADO EL PROFESOR
      $actividades = Actividad::where('clase_id',$usuario->clase_id)->get()->sortByDesc('fecha');



      return view('profesor.pendiente', compact('usuario','actividades'));
    }


    //crear el informe de asistencia
    public function create(Request $request)
    {
      $actividad = Actividad::find($request->actividad);

      $consentimientos = Consentimiento::where('actividad_id',$actividad->id)->get();

      $alumnos = collect([]);

      foreach ($consentimientos as $consentimiento) {
        $alumnos = $alumnos ->merge(Hijo::where('id',$consentimiento->hijo_id)->get());
      }


      $alumnos = $alumnos->all();




      return PDF::loadView('pdf.listaAlumnosActividad', compact('actividad','alumnos'))->download('Listado de asistencia');

    }

    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $actividad = Actividad::find($request->id);

        $alumnos = Hijo::where('clase_id',$actividad->clase_id)->get();

        $consentimientos = Consentimiento::where('actividad_id',$actividad->id);

        return view('profesor.individual', compact('actividad','alumnos','consentimientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Actividad::find($request->id)->delete();
        return redirect('/login');
    }
}
