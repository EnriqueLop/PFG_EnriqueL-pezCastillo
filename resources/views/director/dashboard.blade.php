@extends('layouts.backend.app')


@section('content')
<div class="app-main__inner">

  <!-- BARRA DONDE SE PONE EL NOMBRE Y QUIÉN ES -->
  <div class="app-page-title">
      <div class="page-title-heading">
          <div>{{$usuario->name}}
              <div class="page-title-subheading">
                Director de {{$usuario->colegio->name}}
              </div>
          </div>
      </div>
  </div>





  <div class="tab-content">
  <div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
              Situación actual de las clases.
            </div>
            <div class="table">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center text-muted">Curso</th>
                        <th class="text-center text-muted">Estado</th>
                        <th class="text-center text-muted">ELIMINAR</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($clases as $clase)
                      <tr>

                        @if($clase->curso != null)
                          <td class="text-center text-muted "> <strong>{{$clase->curso}} {{$clase->letra}}</strong> <br> {{$clase->educacion->name}}</td>
                        @else
                          <td class="text-center text-muted ">Falta por definir</td>
                        @endif
                          <?php
                            $profesor = App\User::where('role_id',3)->where('clase_id',$clase->id)->get();
                          ?>
                          @if($profesor->count()==1)
                          <td class="text-center text-muted">Profesor: {{$profesor->first()->name}}</td>
                          @else
                          <td class="text-center text-muted">
                              {{$clase->codigo}}
                        </td>
                          @endif

                          <td class="text-center text-muted">
                            <form action="{{ route('director.clase.destroy', '4')}}" method="post">
                              @method('DELETE')
                              @csrf
                              <input type="hidden" name="id" value="{{$clase->id}}">
                              <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            <div class="d-block text-right card-footer">
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">

                  <form class="" action="{{ route('director.clase.index')}}" method="">
                    @csrf
                    <div class="row">
                      <div class="col-md-8">
                        <input type="number" required name="numCodigos" max="15" min="1" class="form-control" >
                      </div>
                      <div class="col-md-4">
                        <button type="submit" class="btn-lg btn btn-success "><big>Generar PDF con códigos</big></button>
                      </div>
                    </div>


                  </form>
                </div>
              </div>


            </div>
        </div>
    </div>
</div>
</div>


  <div class="tab-content">
    <div class="row">
      <div class="col-md-12">
        <div class="main-card card">
          <div class="card-header">
             NUEVA CLASE
          </div>
            <form class="" action="{{ route('director.clase.store') }}" method="post">
            @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="position-relative form-group">
                      <label class="">Curso</label>
                      <input name="curso" required placeholder="NÚMERO del curso" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative form-group">
                      <label class="">Letra</label>
                      <input name="letra" required placeholder="LETRA del curso" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="position-relative form-group">
                      <label class="">Educación</label>
                      <select name="educacion" required class="form-control">
                        @foreach($educaciones as $educacion)
                             <option value="{{$educacion->id}}">{{$educacion -> name}}</option>
                        @endforeach
                      </select>

                    </div>
                  </div>
                </div>
              </div>
            <div class="d-block text-right card-footer">
              <button type="submit" class="btn-lg btn btn-success "><big>Crear</big></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>


</div>
@endsection
