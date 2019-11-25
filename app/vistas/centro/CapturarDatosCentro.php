<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Datos del establecimiento</h1>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarDatosCentro/">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="CEN_DIRECTOR">Nombre del director</label>
          <input type="text" name="CEN_DIRECTOR" class="form-control" id="CEN_DIRECTOR" placeholder="Nombre completo del director" required>
        </div>
        <div class="form-group col-md-4">
          <label for="CEN_NOMBRE">Razón social</label>
          <input type="text" name="CEN_NOMBRE" class="form-control" id="CEN_NOMBRE" placeholder="Nombre">
        </div>
        <div class="form-group col-md-4">
          <label for="CEN_ABRE">Siglas</label>
          <input type="text" name="CEN_ABRE" maxlength="15" class="form-control" id="CEN_ABRE" placeholder="Abreviatura">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="CEN_CALLE">Calle</label>
          <input type="text" name="CEN_CALLE" class="form-control" id="CEN_CALLE" placeholder="Calle">
        </div>
        <div class="form-group col-md-2">
          <label for="CEN_NUMERO">Número exterior</label>
          <input type="text" name="CEN_NUMERO" class="form-control" id="CEN_NUMERO" placeholder="Número exterior">
        </div>
        <div class="form-group col-md-2">
          <label for="CEN_COLONIA">Colonia</label>
          <input type="text" name="CEN_COLONIA" class="form-control" id="CEN_COLONIA" placeholder="Colonia">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
          <label for="CEN_CP">Código postal</label>
          <input type="number" name="CEN_CP" class="form-control" id="CEN_CP" placeholder="Código postal">
        </div>
        <div class="form-group col-md-4">
          <label for="CEN_CIUDAD">Ciudad</label>
          <input type="text" name="CEN_CIUDAD" class="form-control" id="CEN_CIUDAD" placeholder="Ciudad">
        </div>
        <div class="form-group col-md-4">
          <label for="CEN_ENTIDAD">Entidad federativa</label>
          <input type="text" name="CEN_ENTIDAD" class="form-control" id="CEN_ENTIDAD" placeholder="Ciudad">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="CEN_TELEFONO">Teléfono</label>
          <input type="phone" name="CEN_TELEFONO" class="form-control" id="CEN_TELEFONO" placeholder="Teléfono">
        </div>
        <div class="form-group col-md-4">
          <label for="CEN_CORREO">Correo electrónico</label>
          <input type="email" name="CEN_CORREO" class="form-control" id="CEN_CORREO" placeholder="Correo electrónico">
        </div>
      </div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
</div>