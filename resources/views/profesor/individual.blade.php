@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
    <div class="tab-content">
      <div class="main-card mb-3 card">
          <div class="card-header">{{$actividad->tipo->name}}</div>
          <div class="card-body">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                <tr>
                    <th class="text-muted">Alumno</th>
                    <th class="text-muted">Tutor</th>
                    <th class="text-muted">Consentimiento</th>
                </tr>
                </thead>
                <tbody>

                @foreach($alumnos as $alumno)
                  <tr>
                      <td class="text-muted ">Apellidos, {{$alumno->name}}</td>
                      <td class="text-muted">{{$alumno->user->name}} Apellidos</td>

                      @if($consentimientos->where('hijo_id',$alumno->id)->get()->count()==0)
                        <td class="text-muted">No ha dado el consentimiento</td>
                      @else
                        <td class="text-muted">Consentimiento dado</td>
                      @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="card-footer">
            <form class="" action="{{route('profesor.pendiente.create')}}" method="get">
              <input type="hidden" name="actividad" value="{{$actividad->id}}">
              <button type="submit" class="btn btn-warning">
                @csrf
                Informe de asistencia
              </button>

            </form>
          </div>
    </div>
  </div>

</div>


@endsection
