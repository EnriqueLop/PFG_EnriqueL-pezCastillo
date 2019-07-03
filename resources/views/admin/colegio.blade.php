@extends('layouts.backend.app')

@section('content')

    <div class="app-main__inner">
        <div class="tab-content">
          <div class="row">
          <div class="col-md-10">
                <div class="main-card card">
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active">
                            <h2 style="text-align:center">CÓDIGO ENVIADO CORRECTAMENTE</h2>
                        </div>
                    </div>
                    </div>
                    <div class="d-block text-right card-footer">
                      <form class="" action="/home" >
                        @csrf
                        <button type="submit" class="btn-lg btn btn-success "><big><big>VOLVER</big></big></button>
                      </form>
                    </div>
                </div>
              </div>
          </div>
        </div>


      </div>


@endsection
