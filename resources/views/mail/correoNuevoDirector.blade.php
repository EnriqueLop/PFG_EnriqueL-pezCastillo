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
          <h1>Bienvenido al sistema de gestión de asistencias.</h1>

          <div class="row">
            <div class="col-md-5">
              <div class="main-card mb-3 card">
                  <div class="card-header">El código de acceso es:
                  </div>
                  <div class="card-body tex-center">
                    {{$codigo}}
                  </div>
                  <div class="card-footer">
                        Debe acceder al login de la herramienta, introducir sus
                        datos y en el último apartado introducir el código proporcionado
                        y quedará determinado como un Director.
                  </div>
            </div>

      </div>

    </div>
  </div>

</div>


  </body>
</html>
