<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>GestionRGPD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>
  <!-- INICIO TOP BAR -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    Gestión RGPD
                </div>
            </div>

            <!-- PARTE DERECHA DE LA BARRA -->
  <div class="app-header__content">
    <div class="app-header-left">
      <div class="widget-content p-0">
          <div class="widget-content-wrapper">
            <ul class="header-menu nav">
                {{Auth::user()->name}}.
                @if(Auth::user()->role_id==3)
                  Docente de {{Auth::user()->clase->curso}}º {{Auth::user()->clase->letra}}
                @endif
            </ul>
          </div>
      </div>
    </div>
    <div class="app-header-right">
      <div class="widget-content p-0">
          <div class="widget-content-wrapper">
            <ul class="header-menu nav">
                <li class="nav-item">
                      <a href="/logout" class="nav-link">
                          Cerrar Sesión
                      </a>
                  </li>
                </ul>
          </div>
      </div>
    </div>
  </div>

        </div>
        <!-- End Top bar -->

        <!-- inicio sidebar -->
          <div class="app-main">
                <div class="app-sidebar sidebar-shadow">

                  <div class="app-header__logo">
                      <div class="logo-src"></div>
                      <div class="header__pane ml-auto">
                          <div>
                              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                  <span class="hamburger-box">
                                      <span class="hamburger-inner"></span>
                                  </span>
                              </button>
                          </div>
                      </div>
                  </div>

                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">

                          <!-- //Notificación de brecha de seguridad. -->
                          <?php
                            $brecha = App\Responsable::all()->first()->brecha;
                            ?>

                            @if($brecha==true)
                            <b>Se ha encontrado una brecha de seguridad. Por favor revise sus datos.</b>
                            @endif


                            <li class="app-sidebar__heading">PANTALLAS</li>
                            <li>
                                <a href="/home">
                                    <i class="metismenu-icon fas fa-home"></i>
                                    Principal
                                </a>
                            </li>

                                <!-- ADMINISTRADOR -->
                                @if(Auth::user()->role_id==1)

                                @endif


                                <!-- DIRECTOR -->
                                @if(Auth::user()->role_id==2)
                                @endif



                                <!-- PROFESOR -->
                                @if(Auth::user()->role_id==3)
                                <li>
                                  <a href="{{route('profesor.nueva.index')}}" class="">
                                    <i class="metismenu-icon fas fa-plus"></i>
                                        Crear una actividad
                                    </a>
                                </li>
                                <li>
                                  <a href="{{route('profesor.pendiente.index')}}" class="">
                                    <i class="metismenu-icon fas fa-list"></i>
                                        Actividades pendientes
                                    </a>
                                </li>
                                @endif


                                <!-- TUTOR -->
                                @if(Auth::user()->role_id==4)
                                <li>
                                  <a href="{{route('tutor.comedor.index')}}" class="">
                                    <i class="metismenu-icon fas fa-list"></i>
                                        Comedor
                                    </a>
                                </li>
                                @endif


                        </ul>
                        <ul class="vertical-nav-menu" style="bottom:0; width: 100%; position: absolute;">
                        <div class="footer">
                          <li class="app-sidebar__heading">Usuario</li>
                          <li>
                            <a href="/derechos" class="">
                                <i class="metismenu-icon fas fa-book"></i>
                                Conozca sus derechos
                            </a>
                          </li>
                          <li>
                            <a href="/logout" class="">
                                <i class="metismenu-icon fas fa-sign-out-alt"></i>
                                Cerrar Sesión
                            </a>
                          </li>

                            <br><br>
                        </div>

                      </div>
                    </div>

                </div>


            <!-- fin sidebar -->

                <div class="app-main__outer">

                  @yield('content')
                </div>
        </div>
    </div>




  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}


</body>
</html>
