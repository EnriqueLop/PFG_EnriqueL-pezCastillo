<!DOCTYPE html>
<html lang="else" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    </head>
  <body>

          <h1>Lista de códigos</h1>

          <h4>Aporte estos códigos a los profesores. <br>
            Deben introducirlos en el apartado de código del login de la herramienta de gestión de asistencia a actividades. <br>
            Una vez introducido el código quedarán determinados como un profesor y deberán meter los datos de su clase.</h4>
          <br>
                    @foreach ($codigos as $codigo)
                    {{$codigo}} <br>
                    @endforeach

  </body>
</html>
