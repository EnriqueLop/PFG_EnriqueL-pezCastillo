<?php

namespace App\Http\Controllers\Profesor;

use Auth;
use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuario = Auth::user();

      return view('profesor.examen', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
          'empresa'=>'required',
          'lugar' => 'required',
          'fecha' => 'required',
          'descripcion' => 'required'
      ]);

        $actividad = new Actividad;
        $actividad -> ciudad =  $request->ciudad;
        $actividad -> lugar =  $request->lugar;
        $actividad -> fecha =  $request->fecha;
        $actividad -> descripcion =  $request->descripcion;
        $actividad -> clase_id =  Auth::user()->clase_id;
        $actividad -> tipo_id =  3;
        $actividad -> save();

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
