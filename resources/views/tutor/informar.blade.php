@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">
    <div class="tab-content">
      <div class="row">
        <div class="col-md-8">

          <div class="main-card mb-3 card">
              <div class="card-header">
                  Tabla de información del tratamiento de sus datos
              </div>
              <div class="table">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <tbody>
                        <tr>
                            <th scope="row"> Responsable</th>

                            <td class=" text-muted ">
                              El responsable de tratamiento de sus datos
                              personales es {{$responsable->name}}. Su código de identificación es {{$responsable->identificación}}
                              . Puede contactar con el responsable en {{$responsable->direccion}} o llamando al {{$responsable->telefono}}
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"> Legitimización</th>

                            <td class=" text-muted ">
                              @if($actividad->tipo->id == 2)
                                La finalidad de este tratamiento es tener un control de los alumnos que se realizarán las fotografías.
                                Y obtener el consentimiento para que la empresa pueda tener las fotografías para realizar las impresiones oportunas.
                              @else
                                La finalidad de este tratamiento es tener un control de los alumnos que irán a la excursión.
                              @endif
                            </td>
                        </tr>


                        <tr>
                            <th scope="row"> Legitimización</th>

                            <td class=" text-muted ">
                              Usted puede revocar el consentimiento de guardar los datos en cualquier momento. En caso de no hacerlo
                              constará como que su hijo no asistirá a la actividad. Para más información sobre sus derechos pulse <a href="/derechos">aquí</a>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"> Destinatarios</th>

                            <td class=" text-muted ">
                                @if($actividad->tipo->id == 2)
                                  Los datos y fotografías se enviarán a {{$actividad->empresa}}.
                                @else
                                  Los datos no se enviarán a ningún destinatario.
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th scope="row"> Derechos</th>

                            <td class=" text-muted ">
                              Puede conocer y ejercer sus derechos como usuario <a href="/derechos">aquí</a>

                            </td>
                        </tr>



                    </tbody>
                  </table>
              </div>
            </div>


        </div>
    </div>
  </div>

</div>


@endsection
