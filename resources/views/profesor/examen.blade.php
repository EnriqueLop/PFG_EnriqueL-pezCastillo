@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
          <div class="col-md-10">
              <div class="main-card mb-5 card">
                  <div class="card-body">

                  <h5 class="card-title">
                    Introduzca los datos de la excursión
                  </h5>

                  <h6 class="card-subtitle">
                    Usted va a crear una nueva actividad de tipo excursión.
                  </h6>

                        <form class="" action="{{route('profesor.examen.store')}}" method="post">
                          @csrf

                          <div class="position-relative form-group">
                            <label class="">Empresa que realiza los realizarán los exámenes</label>
                            <input name="empresa" placeholder="Empresa examinadora" required class="form-control">
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Lugar donde se realizarán</label>
                            <input name="lugar" placeholder="Indique el lugar" required class="form-control">
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Fecha</label>
                            <input name="fecha" type="date" required class="form-control">
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Descripción</label>
                            <textarea name="descripcion" required placeholder="Se recomienda que introduzca un texto explicativos con las actividades que se van a realizar." class="form-control"></textarea>
                          </div>

                          <div class="d-block text-right">
                            <button type="submit" class="mt-1 btn btn-primary">Crear actividad de excursión</button>
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
