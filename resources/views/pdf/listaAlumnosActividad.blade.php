<!DOCTYPE html>
<html lang="else" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    </head>
  <body>

          <h1>Actividad:</h1>

          <h4>A continuación se muestra una lista de los alumnos que acudirán a
            la actividad de {{$actividad->tipo->name}} el día {{date('d-m-Y', strtotime($actividad->fecha))}}</h4>

            @if($actividad->tipo->id == 2)
            <h6>Los tutores legales de los siguientes alumnos han dado el consentimiento para enviar los datos a la empresa
            correspondiente.</h6>
            @endif

          <br>
          <br>
                    LISTADO: <br>
                    @foreach($alumnos as $alumno)
                      Nombre: {{$alumno->name}} <br>
                      Apellidos: {{$alumno->apellido}}<br>
                      DNI: {{$alumno->dni}}.
                      <br>
                      <br>
                    @endforeach


  </body>
</html>
