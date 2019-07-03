@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
        <div class="col-md-10">
          <div class="main-card mb-3 card">
              <div class="card-header">Asistencia a la realización de fotografías.</div>
              <div class="card-body">
                <big><strong>Fecha: </strong>{{date('d-m-Y', strtotime($actividad->fecha))}}</big><br>

                @if($actividad->lugar!=null)
                  <strong>Lugar: </strong>{{$actividad->lugar}}<br>
                @endif
                @if($actividad->ciudad!=null)
                  <strong>Ciudad: </strong>{{$actividad->ciudad}}<br>
                @endif
                @if($actividad->empresa!=null)
                  <strong>Empresa: </strong>{{$actividad->empresa}}<br>
                @endif
                  <br>
                  <strong>Descripcion: </strong>{{$actividad->descripcion}}<br>
                <br>
                  <form class="" action="{{route('tutor.confirmar.store')}}" method="post">
                    @csrf
                      <div class="position-relative form-check">
                        <label class="form-check-label">
                          <input name="consentimiento_datos" required type="checkbox" class="form-check-input">
                          Doy mi consentimiento a que {{$hijo->name}} se guarden los datos para tener un control de asistencia
                          a la actividad hasta finalizar el curso académico. Tanto los datos como las fotografías de los alumnos
                          serán enviadas a la empresa {{$actividad->empresa}} para la elaboración de las mismas.
                        </label>
                      </div>
                      <br>
                      <div class="position-relative form-check">
                        <label class="form-check-label">
                          <input name="asistencia" type="checkbox" class="form-check-input">
                          Doy mi consentimiento que {{$hijo->name}} vaya se realice fotografías.
                        </label>
                      </div>

                      <br>
                      <div class="position-relative form-check">
                        <label class="form-check-label">
                          Puede conocer y ejercer sus derechos como usuario <a href="/derechos">aquí</a>
                        </label>
                      </div>

              </div>
              <div class="card-footer">
                  <input type="hidden" name="actividad" value="{{$actividad->id}}">
                  <input type="hidden" name="hijo" value="{{$hijo->id}}">
                  <button type="submit" class="btn btn-warning">
                    Acepto
                  </button>

                </form>
              </div>
            </div>
          </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
</div>





@endsection
