@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
    <div class="tab-content">
      <div class="row">
        @foreach($actividades as $actividad)
        <div class="col-md-6">
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
              </div>
              <div class="card-footer">
                <div class="col-md-9">
                  <form class="" action="{{route('profesor.pendiente.show','mostrar')}}" method="get">
                    <input type="hidden" name="id" value="{{$actividad->id}}">
                    <button type="submit" class="btn btn-warning">
                      @csrf
                      Ver información
                    </button>

                  </form>
                </div>
                <div class="col-md-6">
                  <form action="{{ route('profesor.pendiente.destroy', '4')}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$actividad->id}}">
                    <button type="submit" class="btn btn-danger">
                      Eliminar
                    </button>

                  </form>
                </div>

                </form>

              </div>
          </div>
        </div>
        @endforeach
    </div>
  </div>

</div>


@endsection
