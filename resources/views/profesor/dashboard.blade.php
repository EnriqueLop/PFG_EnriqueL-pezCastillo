@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">


  <!-- BARRA DONDE SE PONE EL NOMBRE Y QUIÉN ES -->
  <div class="app-page-title">
      <div class="page-title-subheading">
        Código de la clase: {{$usuario->clase->codigo}}
      </div>
  </div>

  <div class="row">
    <div class=" col-xl-6">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading "><big>Actividades creadas</big> </div>
                    </div>
                    <div class="widget-content-right">
                      <a href="">
                        <div class="btn btn-success widget-numbers">{{$numActividades}}</div>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <div class="tab-content">
    <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">
                Alumnos de la clase. (Número de alumnos: {{$alumnos->count()}})
              </div>
              <div class="table">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="text-center text-muted">Alumno</th>
                          <th class="text-center text-muted">Tutor</th>
                          <th class="text-center text-muted">ELIMINAR</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach($alumnos as $alumno)
                        <tr>
                            <td class="text-center text-muted ">Apellidos, {{$alumno->name}}</td>
                            <td class="text-center text-muted">{{$alumno->user->name}} Apellidos</td>

                            <td class="text-center text-muted">
                              <form action="{{ route('profesor.alumno.destroy', 'delete')}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="hijo" value="{{$alumno->id}}">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                              </form>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  </div>

</div>
@endsection
