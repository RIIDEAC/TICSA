<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Capturar reporte</h1>
</div>
    <div class="container">
        <p class="text-justify"><strong>INTRUCCIONES:</strong> </p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosTicket/">
        <div class="form-row">
        <div class="col-md-6">
            <div class="form-group col-md-12">
              <label for="NING_ID"><h3>Paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                    <option>Selecciona el paciente</option>
                  <?php foreach ($datos->PACIENTES as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-12">
              <label for="TIPO_TICKET">Tipo de reporte:</label>
                <select data-live-search="true" id="TIPO_TICKET" name="TIT_ID" class="form-control" required>
                 	<?php foreach ($datos->CATALOGOS->CAT_TIPOTICKET_TIT as $value) { ?>
                 	<option value="<?php echo $value->TIT_ID; ?>"><?php echo $value->TIT_MIN; ?></option>
                 	<?php } ?>  
                </select>
            </div>
             <div class="form-group col-md-12">
              <label for="ETI_ID">Estado del reporte:</label>
                <select data-live-search="true" id="ETI_ID" name="ETI_ID" class="form-control" required>
                    <?php foreach ($datos->CATALOGOS->CAT_ESTADOTICKET_ETI as $value) { ?>
                    <option value="<?php echo $value->ETI_ID; ?>"><?php echo $value->ETI_MIN; ?></option>
                    <?php } ?>  
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="TIC_OBSERVACIONES">Observaciones:</label>
                  <textarea class="form-control" id="TIC_OBSERVACIONES" name="TIC_OBSERVACIONES" maxlength="255" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12 text-left">
                <br>
                <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
                <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
            </div>
        </div>
        </div>
        </form>
    </div>