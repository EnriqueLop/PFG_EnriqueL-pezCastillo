<div class="ui-theme-settings">
    <button type="button" id="TooltipDemo" class="btn-open-options btn btn-info">
        <i class="fas fa-info"></i>
    </button>
    <div class="theme-settings__inner">
        <div class="scrollbar-container">

          <!-- ADMINISTRADOR -->
          @if(Auth::user()->role_id==1)
            <div class="theme-settings__options-wrapper">
                <h3 class="themeoptions-heading">Pantalla principal
                </h3>
                <div class="p-3">

                  hola

                </div>
            </div>
            @endif

            <!-- DIRECTOR -->
            @if(Auth::user()->role_id==2)
              <div class="theme-settings__options-wrapper">
                  <h3 class="themeoptions-heading">Pantalla principal
                  </h3>
                  <div class="p-3">

                    hola

                  </div>
              </div>
              @endif


              <!-- PROFESOR -->
              @if(Auth::user()->role_id==1)
                <div class="theme-settings__options-wrapper">
                    <h3 class="themeoptions-heading">Pantalla principal
                    </h3>
                    <div class="p-3">

                      hola

                    </div>
                </div>
                @endif

                <!-- TUTOR -->
                @if(Auth::user()->role_id==4)
                  <div class="theme-settings__options-wrapper">
                      <h3 class="themeoptions-heading">Pantalla principal
                      </h3>
                      <div class="p-3">

                        fads

                      </div>
                  </div>
                  @endif


        </div>
    </div>
</div>
