@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
        <div class="col-md-10">
          <div class="main-card mb-3 card">
              <div class="card-header">Realización de examenes de {{$actividad->empresa}}</div>
              <div class="card-body">
                <big><strong>Fecha: </strong>{{date('d-m-Y', strtotime($actividad->fecha))}}</big><br>

                @if($actividad->lugar!=null)
                  <strong>Lugar: </strong>{{$actividad->lugar}}<br>
                @endif
                @if($actividad->ciudad!=null)
                  <strong>Ciudad: </strong>{{$actividad->lugar}}<br>
                @endif
                @if($actividad->empresa!=null)
                  <strong>Empresa: </strong>{{$actividad->lugar}}<br>
                @endif
                  <br>
                  <strong>Descripcion: </strong>{{$actividad->descripcion}}<br>
                <br>
                  <form class="" action="index.html" method="post">
                      <div class="position-relative form-check">
                        <label class="form-check-label">
                          <input name="consentimiento_datos" required type="checkbox" class="form-check-input">
                          Doy mi consentimiento a que se guarden los datos etc
                        </label>
                      </div>
                      <br>
                      <div class="position-relative form-check">
                        <label class="form-check-label">
                          <input name="consentimiento_tutor" required type="checkbox" class="form-check-input">
                          Doy mi consentimiento que mi hijo vaya a la excursión etcDoy mi consentimiento que mi hijo vaya a la excursión etcDoy mi consentimiento que mi hijo vaya a la excursión etcDoy mi consentimiento que mi hijo vaya a la excursión etc
                        </label>
                      </div>

              </div>
              <div class="card-footer">
                @csrf
                  <input type="hidden" name="id" value="{{$actividad->id}}">
                  <button type="submit" class="btn btn-warning">
                    Ver información
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
