@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
  <!-- BARRA DONDE SE PONE EL NOMBRE Y QUIÉN ES -->
  <div class="app-page-title">
    <div class="page-title-heading">
        <div>{{$usuario->name}}   <br>  Docente de {{$usuario->clase->curso}}º {{$usuario->clase->letra}} de {{$usuario->clase->colegio->name}}
      <div class="page-title-subheading">
        <big>Código de la clase: {{$usuario->clase->codigo}}</big>
      </div>
        </div>
    </div>
  </div>


  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
          <div class="col-md-10">
              <div class="main-card mb-5 card">
                  <div class="card-body">

                  <h5 class="card-title">
                    Introduzca los datos para la realización de fotos
                  </h5>

                  <h6 class="card-subtitle">
                    Usted va a crear una nueva actividad de tipo tal tal
                  </h6>

                        <form class="" action="{{route('profesor.foto.store')}}" method="post">
                          @csrf

                          <div class="position-relative form-group">
                            <label class="">Empresa de fotografía</label>
                            <input name="empresa" required placeholder="Nombre de la ciudad" required class="form-control">
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Centro donde se realizará la excusión/actividad</label>
                            <input name="lugar" placeholder="Nombre del centro" required class="form-control">
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Fecha</label>
                            <input name="fecha" type="date" required class="form-control">
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Descripción</label>
                            <textarea name="descripcion" required placeholder="Se recomienda que introduzca un texto breve con las actividades que se van a realizar." class="form-control"></textarea>
                          </div>

                          <div class="d-block text-right">
                            <button type="submit" class="mt-1 btn btn-primary">Crear actividad de fotografía</button>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>


@endsection
