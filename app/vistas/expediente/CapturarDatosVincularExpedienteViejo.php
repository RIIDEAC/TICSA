<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Vincular expediente</h1>
</div>
<div class="container">
  <p><strong>INSTRUCCIONES:</strong> Aquí puede vincular el número de expediente del sistema viejo al nuevo.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosVincularExpediente/">
        <div class="form-row">
            <div class="form-group col-md-12">
              <label for="NING_ID"><h3>Elige el paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                  <?php foreach ($datos->PACIENTES as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>">#<?php echo $value->NING_ID; ?> <?php echo $value->PAC_NOMBRE.' '.$value->PAC_MATERNO.' '.$value->PAC_PATERNO; ?></option>
                  <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
              <label for="SIV_ID"><h3>Elige el expediente a vincular</h3></label>
                <select data-live-search="true" id="SIV_ID" name="SIV_ID" class="form-control" required>
                  <?php foreach ($datos->VIEJOS as $value) { ?>
                    <option value="<?php echo $value->id; ?>">#<?php echo $value->id; ?> <?php echo $value->nombre.' '.$value->apellido; ?></option>
                  <?php } ?>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <br>
                <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
                <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
            </div>
        </div> 
    </form>
</div>