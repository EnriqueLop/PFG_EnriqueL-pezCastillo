<!DOCTYPE html>
<html lang="else" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>

    <div class="app-main__inner">
        <div class="tab-content">
          <h1>Nueva actividad.</h1>

          <div class="row">
            <div class="col-md-5">
              <div class="main-card mb-3 card">
                  <div class="card-header">
                  </div>
                  <div class="card-body tex-center">
                    Se ha creado una nueva actividad para el día {{date('d-m-Y', strtotime($fecha))}}.
                    <br>
                    Por favor entre en el sistema de gestión de asistencias y confirme la asistencia.
                  </div>
                  <div class="card-footer">
                    Si desea dejar de recibir correos puede hacerlo en el apartado de "Conozca sus derechos".
                  </div>
            </div>

      </div>

    </div>
  </div>

</div>


  </body>
</html>
