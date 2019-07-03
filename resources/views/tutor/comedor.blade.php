@extends('layouts.backend.app')


@section('content')
<div class="app-main__inner">


  <div class="tab-content">
    <div class="row">
      @foreach($hijos as $hijo)


                  <?php
                  $patologiasHijo = App\Comedor::where('hijo_id',$hijo->id)->get();
                  ?>


      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">
                <div class="col-md-8">
                  Alumno: {{$hijo->name}}.
                </div>
                <div class="col-md-4">
                  @if($patologiasHijo->count()!=0)
                    Asistirá.
                  @else
                    No Asistirá
                  @endif
                </div>
            </div>

            <div class="card-body">
              <div class="table">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="text-center text-muted">Patología</th>
                          <th class="text-center text-muted">ELIMINAR</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($patologiasHijo as $patologiaIndividual)

                        <?php
                          $id_patologia = Illuminate\Support\Facades\Crypt::decryptString($patologiaIndividual->patologia_id);

                          $name = App\Patologia::find($id_patologia)->name;

                        ?>

                        <tr>
                            <td class="text-center text-muted">{{$name}}</td>
                            <td class="text-center text-muted">
                              <form action="{{ route('tutor.comedor.destroy', '4')}}" method="post">
                                @method('DELETE')
                                @csrf



                                  <input type="hidden" name="id" value="{{$patologiaIndividual->id}}">
                                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                              </form>
                            </td>
                        </tr>

                        @endforeach





                    </tbody>
                  </table>
              </div>
            </div>

            <div class="d-block card-footer">
              <small>Si su hijo no padece ninguna patología debe marcar "Ninguna" para apuntarle al comedor.<br></small>

              <form class="" action="{{ route('tutor.comedor.store')}}" method="post">
                    @csrf
                    <div class="position-relative form-check">
                      <label class="form-check-label">
                        <input name="consentimiento" required type="checkbox" class="form-check-input">
                          Doy mi consentimiento para que se guarden los datos referentes a la asistencia al comedor así como las posibles patologías con el fin de controlar la asistencia al mismo. Estos datos se guardarán hasta final de curso académico o hasta que el usuario decida eliminarlos.
                        </label>
                    </div>

                    <div class="row">


                      <div class="col-md-8">
                        <input type="hidden" name="hijo" value="{{$hijo->id}}">
                        <select class="form-control" name="patologia">
                          @foreach($patologias as $patologia)
                            <option value="{{$patologia->id}}">{{$patologia->name}}</option>
                          @endforeach

                        </select>
                      </div>
                      <div class="col-md-4">
                        <button type="submit" class="btn-lg btn btn-success "><big>Añadir patología</big></button>
                      </div>
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
