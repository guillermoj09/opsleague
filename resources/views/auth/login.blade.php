<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Acceso a Aplicacion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="panel panel-default">
            <div class="panel-body">
              <!-- FORMULARIO LOGIN  -->

            <form id="formulario-login">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="email">Email</label> 
                  <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese tu email">
                  
                </div>
                <div class="form-group">
                  <label for="password">Password</label> 
                  <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese tu password">
                  
                </div>
                <button class="btn btn-danger btn-block" type="button" id="botonValidar">Acceder</button>
                <div class="form-group">
                <label for="olvidate"><a href="{{ url('password/reset')}}">¿ Olvidaste tu contraseña ? </a></label> 
                </div>
            </form>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>