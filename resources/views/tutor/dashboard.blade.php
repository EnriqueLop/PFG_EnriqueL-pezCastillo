@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

    <div class="tab-content">
    <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">
                Actividades de sus hijos
              </div>
              <div class="card-body">
                <div class="table">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-muted">Hijo/Hija</th>
                            <th class="text-muted">Actividad</th>
                            <th class="text-muted">Fecha</th>
                            <th class="text-muted">Estado</th>
                            <th class="text-muted">Información</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($actividades as $actividad)
                          <?php
                          $hijosPasados = collect([]);
                          ?>
                            @foreach($hijos as $hijo)

                            @if($hijo->clase_id == $actividad->clase_id and !$hijosPasados->contains($hijo->id))
                            <tr>
                                <td class="text-muted ">{{$hijo->name}}</td>
                                <td class="text-muted">{{$actividad->tipo->name}} {{$actividad->id}}</td>
                                <td class="text-muted">{{date('d-m-Y', strtotime($actividad->fecha))}}</td>


                                <?php
                                  $consentimiento = $consentimientos->where('hijo_id',$hijo->id)->where('actividad_id',$actividad->id);

                                  if($consentimiento->count()!=0){
                                    $consentimiento = $consentimiento->first();
                                  }
                                ?>


                                <td class="text-muted">
                                  @if($consentimiento->count()==0)
                                    Falta por dar consentimiento.
                                  @elseif($consentimiento->asistencia==0)
                                    No asistirá.
                                  @elseif($consentimiento->asistencia==1)
                                    Asistirá
                                  @endif


                                </td>

                                <td class="text-muted">

                                  <!-- SI NO SE LE HA DADO CONSENTIMIENTO -->
                                  @if($consentimiento->count()==0)

                                      <form action="{{route('tutor.confirmar.index')}}" method="">
                                        @csrf
                                        <input type="hidden" name="hijo" value="{{$hijo->id}}">
                                        <input type="hidden" name="actividad" value="{{$actividad->id}}">
                                        <button type="submit" class="btn btn-info btn-sm">Confirmar asistencia</button>
                                      </form>



                                  <!-- sI YA HA DADO CONSENTIMIENTO -->
                                  @else

                                  <form action="{{route('tutor.individual.index')}}" method="">
                                    @csrf
                                    <input type="hidden" name="hijo" value="{{$hijo->id}}">
                                    <input type="hidden" name="actividad" value="{{$actividad->id}}">
                                    <input type="hidden" name="consentimiento" value="{{$consentimiento->id}}">
                                    <button type="submit" class="btn btn-warning btn-sm">Ver información</button>
                                  </form>

                                  @endif
                                </td>


                            </tr>

                            <?php
                            $hijosPasados = $hijosPasados->merge($hijo->id);
                            ?>

                            @endif
                          @endforeach
                        @endforeach
                      </tbody>
                    </table>
                </div>
              </div>

          </div>
      </div>
  </div>
  </div>

</div>
@endsection
