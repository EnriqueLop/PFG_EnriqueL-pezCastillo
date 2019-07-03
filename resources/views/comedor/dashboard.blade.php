@extends('layouts.backend.app')


@section('content')
<div class="app-main__inner">

 <div class="tab-content">
  <div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">
              Alumnos que acudirán al comedor. Total: {{$hijos->count()}}
            </div>
            <div class="table">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center text-muted">Nombre</th>
                        <th class="text-center text-muted">Patología</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($hijos as $hijo)

                      <?php

                        $comedors = App\Comedor::where('hijo_id', $hijo->id)->get();

                      ?>

                      <tr>
                        <td class="text-center text-muted">{{$hijo->name}} {{$hijo->apellido}}</td>
                          @if($comedors->count()!=0)
                            <td class="text-center text-muted">
                              @foreach($comedors as $comedor)
                                <?php
                                 $id_patologia = Illuminate\Support\Facades\Crypt::decryptString($comedor->patologia_id);

                                 $name = App\Patologia::find($id_patologia)->name;
                                ?>
                                  {{$name}} /


                              @endforeach
                            </td>
                          @else
                          <td class="text-center text-muted">No</td>
                          @endif
                      </tr>

                      @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>



</div>


</div>
@endsection
