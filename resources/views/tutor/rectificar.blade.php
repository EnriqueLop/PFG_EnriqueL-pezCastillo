@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

  <div class="tab-content">
    <div class="row">

      <div class="col-md-10">
        <div class="main-card mb-3 card">
            <div class="card-header">Información personal</div>
            <form class="" action="{{route('tutor.rectificar.store')}}" method="post">
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

      @foreach($hijos as $hijo)
      <div class="col-md-10">
        <div class="main-card mb-3 card">
            <div class="card-header">Información de {{$hijo->name}}</div>
            <form class="" action="{{route('tutor.hijo.store')}}" method="post">
              @csrf
              <div class="card-body">

                <input type="hidden" name="id" value="{{$hijo->id}}">

                <div class="position-relative form-group">
                  <label class="">Nombre</label>
                  <input name="name" value="{{$hijo->name}}" required class="form-control">
                </div>

                <div class="position-relative form-group">
                  <label class="">Apellidos</label>
                  <input name="apellido" value="{{$hijo->apellido}}" required class="form-control">
                </div>

                <div class="position-relative form-group">
                  <label class="">DNI</label>
                  <input name="dni" value="{{$hijo->dni}}" required class="form-control">
                </div>

                @if($hijo->clase_id==null)
                  <div class="position-relative form-group">
                    <label class="">CÓDIGO DE LA CLASE: NECESITA EL CÓDIGO DE LA CLASE CORRESPONDIENTE</label>
                    <input name="codigo" style="border: 3px solid red;" required class="form-control">
                  </div>
                @endif

                <br>
              </div>
              <div class="card-footer">
                  <div class="col-md-10">
                    <button type="submit" class="btn btn-warning"href="">Ejercer</button>
                    </form>
                  </div>
                  <div class="col-md-2">
                    <form class="" action="index.html" method="post">
                      <button type="submit" class="btn btn-danger"href="">Eliminar</button>
                  </form>
                  </div>


          </div>
        </div>
        </div>
      @endforeach

    </div>
  </div>


</div>
@endsection
