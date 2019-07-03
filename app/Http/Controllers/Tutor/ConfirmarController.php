<?php

namespace App\Http\Controllers\Tutor;

use Auth;
use Carbon;
use App\Hijo;
use App\Actividad;
use App\Consentimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfirmarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $actividad = Actividad::find($request->actividad);
      $hijo = Hijo::find($request->hijo);
      if($actividad->tipo_id == 1){ //EXCURSION
        return view('tutor.confirmarExcursion',compact('actividad','hijo'));
      }elseif($actividad->tipo_id == 2){ //FOTO
        return view('tutor.confirmarFoto',compact('actividad','hijo'));
      } else{
        return redirect('/login');
      }


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
          'consentimiento_datos'=>'required',
      ]);

      $consentimiento = new Consentimiento;
      $consentimiento -> guardar_datos = Carbon\Carbon::now();
      if($request->asistencia == null){
          $consentimiento -> asistencia =  0;
      }else{
          $consentimiento -> asistencia =  1;
      }
      $consentimiento -> hijo_id =  $request->hijo;
      $consentimiento -> actividad_id =  $request->actividad;

      $consentimiento->save();

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
        $consentimiento = Consentimiento::where('hijo_id',$request->hijo)->where('actividad_id',$request->actividad)->first();

        if($consentimiento->asistencia==0){
          $consentimiento->asistencia=1;
        }else{
          $consentimiento->asistencia=0;
        }

        $consentimiento->save();

        return redirect('/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Consentimiento::where('hijo_id',$request->hijo)->where('actividad_id',$request->actividad)->delete();
        return redirect('/login');
    }
}
