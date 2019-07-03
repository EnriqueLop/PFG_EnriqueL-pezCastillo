@extends('layouts.backend.app')

@section('content')

    <div class="app-main__inner">


        <div class="tab-content">
      <div class="row">
        <div class="col-md-10">
            <div class="main-card mb-3 card">
                <div class="card-header">Situación actual de los colegios.
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center text-muted">COLEGIO</th>
                            <th class="text-center text-muted">ESTADO</th>
                            <th class="text-center text-muted">ELIMINAR</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($colegios as $colegio)
                        <tr>
                            <td class="text-center text-muted">{{$colegio->name}}</td>
                            @if($colegio->name==null)
                            <td class="text-center text-muted">No se utiliza</td>
                            @else
                            <td class="text-center text-muted">En uso</td>
                            @endif

                            <td class="text-center text-muted">
                              <form action="{{ route('admin.colegio.destroy', '4')}}" method="post">
                                @method('DELETE')
                                @csrf
                                  <input type="hidden" name="id" value="{{$colegio->id}}">
                                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                              </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>


        <div class="tab-content">
          <div class="row">
          <div class="col-md-10">
              <div class="main-card card">
                  <div class="card-header">
                     <big> <big> NUEVO COLEGIO </big></big>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active">
                          El código de creación del nuevo colegio es: <br><br>
                          <h2 style="text-align:center"> {{$codigo}} </h2>
                      </div>
                      <form class="" action="{{ route('admin.colegio.store') }}" method="post">
                        @csrf
                      <div class="position-relative form-group">
                            <label class="">Correo electrónico</label>
                            <input name="email" required placeholder="Introduzca el correo electrónico" type="email" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="d-block text-right card-footer">
                      <input type="hidden" name="codigo" value="{{$codigo}}">
                      <button type="submit" class="btn-lg btn btn-success "><big><big>Crear</big></big></button>
                    </form>
                  </div>
              </div>
              </div>
          </div>
        </div>

        <br>


      <div class="tab-content">
        <div class="row">
          <div class=" col-xl-6">
              <div class="card mb-3 widget-content">
                  <div class="widget-content-outer">
                      <div class="widget-content-wrapper">
                          <div class="widget-content-left">
                              <div class="widget-heading "><big>Notificar brecha seguridad.</big> </div>
                          </div>
                          <div class="widget-content-right">

                            <?php
                              $brecha = App\Responsable::all()->first()->brecha;
                            ?>

                            <form class="" action="{{ route('admin.brecha') }}" method="">
                              @csrf

                              @if($brecha==false)
                              <button type="submit" class="btn btn-success">Correcto</button>
                              @else
                              <button type="submit" class="btn btn-danger">Brecha encontrada</button>
                              @endif

                            </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>
        </div>



</div>


@endsection
