@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

  <div class="tab-content">
    <div class="row">

      <div class="col-md-10">
        <div class="main-card mb-3 card">
            <div class="card-header">Información personal</div>
            <form class="" action="{{route('profesor.rectificar.store')}}" method="post">
              @csrf
              <div class="card-body">

                <div class="position-relative form-group">
                  <label class="">Nombre</label>
                  <input name="name" value="{{$usuario->name}}" required class="form-control">
                </div>
                <div class="position-relative form-group">
                  <label class="">Apellidos</label>
                  <input name="apellido" value="{{$usuario->apellido}}" required class="form-control">
                </div>
                <div class="position-relative form-group">
                  <label class="">DNI</label>
                  <input name="dni" value="{{$usuario->dni}}" required class="form-control">
                </div>
                <div class="position-relative form-group">
                  <label class="">Correo</label>
                  <input name="email" value="{{$usuario->email}}" required class="form-control">
                </div>

                <br>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-warning"href="">Ejercer</button>
              </div>
            </form>
        </div>
      </div>

      <div class="col-md-10">
        <div class="main-card mb-3 card">
            <div class="card-header">Información de la clase</div>
            <form class="" action="{{route('profesor.rectificar.index')}}" method="">
              @csrf
              <div class="card-body">

                <div class="position-relative form-group">
                  <label class="">Curso</label>
                  <input name="curso" value="{{$clase->curso}}" required class="form-control">
                </div>
                <div class="position-relative form-group">
                  <label class="">Letra</label>
                  <input name="letra" value="{{$clase->letra}}" required class="form-control">
                </div>

                <div class="position-relative form-group">
                  <label class="">Educación</label>
                  <select name="educacion" class="form-control">

                    @if($clase->educacion->id==1)
                      <option selected="selected" value="1">Infantil</option>
                    @else
                      <option value="1">Infantil</option>
                    @endif

                    @if($clase->educacion->id==2)
                      <option selected="selected" value="2">Primaria</option>
                    @else
                      <option value="2">Primaria</option>
                    @endif

                    @if($clase->educacion->id==3)
                      <option selected="selected" value="3">Secundaria</option>
                    @else
                      <option value="3">Secundaria</option>
                    @endif
                    @if($clase->educacion->id==4)
                      <option selected="selected" value="4">Bachillerato</option>
                    @else
                      <option value="4">Bachillerato</option>
                    @endif

                  </select>
                </div>

                <br>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-warning"href="">Ejercer</button>
              </div>
            </form>
        </div>
      </div>




    </div>
    </div>
  </div>


</div>
@endsection
