<?php

namespace App\Http\Controllers\Tutor;

use Auth;
use App\Hijo;
use App\Patologia;
use App\Comedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;


class ComedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuario = Auth::user();

      $hijos = Hijo::where('user_id',$usuario->id)->get();

        $patologias = Patologia::all();

        return view('tutor.comedor', compact('patologias','hijos'));
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

      $nuevaPatologia = new Comedor();

      $nuevaPatologia->hijo_id = $request->hijo;

      $nuevaPatologia->patologia_id = Crypt::encryptString($request->patologia);

      $nuevaPatologia->save();





        return redirect() -> route('tutor.comedor.index');
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
    public function destroy(Request $request)
    {
      Comedor::find($request->id)->delete();

      return redirect() -> route('tutor.comedor.index');
    }
}
