<?php

namespace App\Http\Controllers\Profesor;

use Auth;
use App\Hijo;
use Mail;
use Users;

use App\Mail\CorreoNuevaActividad;


use App\Actividad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExcursionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuario = Auth::user();

      return view('profesor.excursion', compact('usuario'));

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
          'ciudad'=>'required',
          'lugar' => 'required',
          'fecha' => 'required'
      ]);

        $excursion = new Actividad;
        $excursion -> ciudad =  $request->ciudad;
        $excursion -> lugar =  $request->lugar;
        $excursion -> fecha =  $request->fecha;
        $excursion -> descripcion =  $request->descripcion;
        $excursion -> clase_id =  Auth::user()->clase_id;
        $excursion -> tipo_id =  1;
        $excursion -> save();

        $hijos_de_la_clase = Hijo::where('clase_id',$excursion -> clase_id)->get();

        foreach ($hijos_de_la_clase as $hijo) {
          if($hijo->user->enviar_correo==1){
            Mail::send(new CorreoNuevaActividad($hijo->user->email,$request->fecha));
          }

        }


        // Mail::send(new CorreoNuevaActividad())


        return redirect('/login');
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
