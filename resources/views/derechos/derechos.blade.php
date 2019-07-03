@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

  <div class="tab-content">
    <div class="row">

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho de acceso</div>
            <div class="card-body">
              Derecho a dirigirte al resonsable del tratamiento para conocer si está tratando
              o no tus datos de carácter personal y, en caso de que se esté realizando dicho
              tratamiento.
              <br>
              Con la utilización de la herramienta se asegura un correcto tratamiento de los datos.
              <br>
            </div>
            <div class="card-footer">
                <a class="btn btn-warning" href="mailto:{{App\Responsable::all()->first()->email}}">Ejercer</a>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho de rectificación</div>
            <div class="card-body">
              Derecho a poder rectificar los datos personales inexactos.
              <br>
            </div>
            <div class="card-footer">
                <a class="btn btn-warning" href="/derechos/rectificar">Ejercer</a>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho a oposición</div>
            <div class="card-body">
              Usted puede no dar el consentimiento a cualquiera de los tratamientos.
              <br>
              Para no dar el consentimiento debe no hacer click en el checkbox del consentimiento de guardar datos.
            </div>

        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho de supresión (al olvido)</div>
            <div class="card-body">
              Para cada consentimiento se puede revocar el consentimiento a tratar sus datos.
              En el caso de las actividades puede eliminar el consentimiento pulsando en "Revocar consentimiento".
              <br>
              En el caso de el comedor, puede eliminar todos los datos referentes a este eliminando los datos de la tabla.
              <br>
              Todos los datos serán eliminados al finalizar el curso académico.
              <br>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho limitación del tratamiento</div>
            <div class="card-body">
              Con la utilización de esta herramienta no se le pedirán más datos de los completamente necesarios.
              <br>
            </div>

        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho a portabilidad de sus datos</div>
            <div class="card-body">
              texto
              <br>
            </div>
            <div class="card-footer">
              <a class="btn btn-warning"href="">Ejercer</a>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-header">Derecho a no ser objeto de decisiones individualizadas</div>
            <div class="card-body">
              Este derecho no se aplica exactamente en el caso de la herramienta.
              <br>
              En el caso de la información aportada para la gestión del comedor, en algunos casos,
               es necesario tomar medidas que dependan directamente de los datos que se obtienen.
              <br>
              Por otro lado en el consentimiento de asistencia a las actividades, no se tomará ninguna
               decisión basándose en los datos aportados por el usuario.
            </div>
        </div>
      </div>


    </div>
    <div class="tab-content">
      <div class="row">
        <div class=" col-xl-12">
            <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading "><big>Dejar de recibir correos.</big> </div>
                        </div>
                        <div class="widget-content-right">

                          <?php
                            $brecha = App\Responsable::all()->first()->brecha;
                          ?>

                          <form class="" action="/derechos/rectificar/correo" method="">
                            @csrf

                            @if($usuario->enviar_correo==1)
                            <button type="submit" class="btn btn-success">Quiero recibir correos</button>
                            @else
                            <button type="submit" class="btn btn-danger">No quiero recibir ningún correo</button>
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
  </div>


</div>
@endsection
