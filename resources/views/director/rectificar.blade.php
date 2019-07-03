@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

  <div class="tab-content">
    <div class="row">
      <div class="col-md-10">
        <div class="main-card mb-3 card">
            <div class="card-header">Información del colegio</div>
            <form class="" action="index.html" method="post">
              @csrf
              <div class="card-body">

                <div class="position-relative form-group">
                  <label class="">Nombre</label>
                  <input name="name" value="{{$colegio->name}}" required class="form-control">
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
            <div class="card-header">Información personal</div>
            <form class="" action="{{route('director.rectificar.index')}}" method="">
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


    </div>
    </div>
  </div>


</div>
@endsection
