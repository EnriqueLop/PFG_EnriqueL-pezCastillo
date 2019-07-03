@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
    <div class="tab-content">
      <div class="row">
        <div class="col-md-10">
          <div class="main-card mb-3 card">
              <div class="card-header">{{$actividad->tipo->name}}</div>
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
                  <strong>Fecha en la que dio el consentimiento: </strong>{{date('d-m-Y', strtotime($consentimiento->guardar_datos))}}<br>
                <br>
              </div>
              <div class="card-footer">

                <div class="col-md-4">
                  @if($consentimiento->asistencia==0)
                    <form action="{{route('tutor.confirmar.update','update')}}" method="post">
                      @method('patch')
                      @csrf
                      <input type="hidden" name="hijo" value="{{$hijo->id}}">
                      <input type="hidden" name="actividad" value="{{$actividad->id}}">
                      <button type="submit" class="btn btn-danger btn-sm">No asistirá</button>
                    </form>
                    @elseif($consentimiento->asistencia==1)

                    <form action="{{route('tutor.confirmar.update','update')}}" method="post">
                      @method('patch')
                      @csrf
                      <input type="hidden" name="hijo" value="{{$hijo->id}}">
                      <input type="hidden" name="actividad" value="{{$actividad->id}}">
                      <button type="submit" class="btn btn-success btn-sm">Asistirá</button>
                    </form>

                    @else
                      se ha producido un error
                    @endif
                </div>


                <div class="col-md-5">
                  <form class="" action="{{route('tutor.informar.index')}}" method="">
                    <input type="hidden" name="actividad" value="{{$actividad->id}}">
                    <button type="submit" class="btn btn-info">
                      @csrf
                      <input type="hidden" name="$consentimiento" value="{{$consentimiento->id}}">
                      Información del tratamiento
                    </button>

                  </form>
                </div>

                <div class="col-md-3">
                  <form action="{{ route('tutor.confirmar.destroy', '4')}}" method="post">
                      @method('DELETE')
                      @csrf
                      <input type="hidden" name="actividad" value="{{$actividad->id}}">
                      <input type="hidden" name="hijo" value="{{$hijo->id}}">

                      <button type="submit" class="btn btn-danger">
                        Revocar consentimiento
                      </button>

                    </form>
                </div>

                </form>

              </div>
          </div>
        </div>
    </div>
  </div>

</div>


@endsection
