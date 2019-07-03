@extends('layouts.backend.app')

@section('content')
<div class="app-main__inner">

  <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
      <div class="row">
          <div class="col-md-10">
              <div class="main-card mb-5 card">
                  <div class="card-body">
                    <h5 class="card-title">Introduzca los datos del colegio</h5>
                        <form class="" action="{{route('director.colegio.store')}}" method="post">
                          @csrf
                          <div class="position-relative form-group">
                            <label class="">Tipo de centro</label>
                            <select name="centro" required class="form-control">
                                <option value="Instituto">Instituto</option>
                                <option value="Colegio">Colegio</option>
                            </select>
                          </div>

                          <div class="position-relative form-group">
                            <label class="">Nombre</label>
                            <input name="name" placeholder="Nombre del centro" required class="form-control">
                          </div>

                          <button type="submit" class="mt-1 btn btn-primary">Añadir información</button>
                      </form>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>


@endsection
