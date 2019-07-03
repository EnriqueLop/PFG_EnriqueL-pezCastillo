<?php

namespace App\Http\Controllers\Director;

Use App\Clase;
Use Auth;
use \PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClaseController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
        'curso'=>'required',
        'letra' => 'required',
        'educacion' => 'required'
    ]);

    $codigo = '';
    $longitud = 7;
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $codigo .= $pattern{mt_rand(0,$max)};

    $claseRepetida = Clase::where('curso',$request -> curso)
                            ->where('letra',$request -> letra)
                            ->where('educacion_id',$request -> educacion)
                            ->where('colegio_id',Auth::user()->colegio_id)->get();

    if($claseRepetida->count() == 0){
      $clase = new Clase;
      $clase -> curso = $request -> curso;
      $clase -> letra = strtoupper($request -> letra);
      $clase -> codigo = $codigo;
      $clase -> educacion_id = $request -> educacion;
      $clase -> colegio_id = Auth::user()->colegio_id;
      $clase -> save();
    }else{
      return view('director.clase');
    }


    return redirect('/director/dashboard');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {
      Clase::find($request->id)->delete();

      return redirect('/director/dashboard');

  }




     //SE USARÁ PARA EL PDF
    public function index(Request $request)
    {
      $numCodigos = $request->numCodigos;

      $codigos = collect([]);

      for ($l=0; $l < $numCodigos; $l++) {
        $codigo = '';
        $longitud = 7;
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $codigo .= $pattern{mt_rand(0,$max)};

        $codigos = $codigos ->merge($codigo);

        $clase = new Clase();
        $clase -> codigo = $codigo;
        $clase -> colegio_id = Auth::user()->colegio_id;
        $clase->save();

      }






      return PDF::loadView('pdf.listaCodigosDirector',compact('codigos'))->download('Lista de códigos');

      redirect('/login');
    }




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


}
