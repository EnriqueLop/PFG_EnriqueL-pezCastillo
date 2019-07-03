@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

  <div class="tab-content">
    <div class="row">
      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">EXCURSIÓN</div>
            <div class="card-body"><h5 class="card-title">Actividad fuera de la escuela</h5>
              Esta actividad pedirá los datos necesarios para realizar una actividad fuera de la institucion educativa.
              <br>
            </div>
            <div class="card-footer">
                <a class="btn btn-success"href="{{route('profesor.excursion.index')}}">Crear</a>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">FOTOGRAFÍA</div>
            <div class="card-body"><h5 class="card-title">Fotos realizadas por una entidad externa</h5>
              Esta actividad pedirá los para que se puedan realizar una sesión fotográfica por parte de una empresa externa a la institucion educativa.
              <br>
            </div>
            <div class="card-footer">
                <a class="btn btn-success"href="{{route('profesor.foto.index')}}">Crear</a>
            </div>
        </div>
      </div>
    </div>
    </div>
  </div>


</div>
@endsection
