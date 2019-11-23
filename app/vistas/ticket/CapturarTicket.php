<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Abrir ticket</h1>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarCapturarTicket/">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="PAC_ID">Paciente</label>
            <select data-live-search="true" id="PAC_ID" name="PAC_ID" class="form-control" required>
              <?php foreach ($datos['PACIENTES'] as $value) { ?>
                <option value="<?php echo $value->PAC_ID; ?>"><?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6">
          <label for="USU_ID">Responsable</label>
            <select data-live-search="true" id="USU_ID" name="RESPONSABLE_ID" class="form-control" required>
              <?php foreach ($datos['USUARIOS'] as $value) { ?>
                <option value="<?php echo $value->USU_ID; ?>"><?php echo $value->USU_CORREO; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="TIC_TIPO">Tipo de ticket</label>
            <select id="TIC_TIPO" name="TIC_TIPO" class="form-control" required>
              <?php foreach ($this->_formatos->obtener('TIC_TIPO') as $key => $value) { ?>
                <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>  
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TIC_ESTADO" id="TIC_ESTADO" value="1">
              <label class="form-check-label" for="TIC_ESTADO">Ticket abierto</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="TIC_ESTADO" id="TIC_ESTADO1" value="2" checked>
              <label class="form-check-label" for="TIC_ESTADO1">Ticket cerrado</label>
            </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <div class="form-group">
            <label for="TIC_OBSERVACIONES">Observaciones</label>
            <textarea class="form-control" placeholder="Máximo 255 palabras" name="TIC_OBSERVACIONES" id="TIC_OBSERVACIONES" rows="3"></textarea>
          </div>
        </div>
      </div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
</div>