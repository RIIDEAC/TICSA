<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar convenio de aportaciones periódicas</h1>
</div>
<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="container">
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>ActualizarDatosConvenioPeriodico/">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="FECHA_CAPTURA"><h3>Fecha de realización</h3></label>
                <input type="date" name="FECHA_CAPTURA" value="<?php echo $datos->CONVENIO->FECHA_CAPTURA; ?>" class="form-control" id="FECHA_CAPTURA" required>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <label>Becado</label>
            <div class="form-group col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="BECA_ID" id="BECA1" value="1" required <?php if($datos->CONVENIO->BECA_ID == 1){ echo 'checked'; } ?>>
                  <label class="form-check-label" for="BECA1">Becado al 100%</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="BECA_ID" id="BECA2" value="2" required <?php if($datos->CONVENIO->BECA_ID == 2){ echo 'checked'; } ?>>
                  <label class="form-check-label" for="BECA2">Beca parcial</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                  <label for="PER_ID"><h3>Periodicidad</h3></label>
                    <select data-live-search="true" id="PER_ID" name="PER_ID" class="form-control">
                      <?php foreach ($datos->CATALOGOS->CAT_PERIODOAPORTACION_PER as $value) { ?>
                        <option value="<?php echo $value->PER_ID; ?>" <?php if($value->PER_ID == $datos->CONVENIO->PER_ID){ echo 'selected'; } ?>><?php echo $value->PER_MIN; ?></option>
                      <?php } ?>
                    </select>
                </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cantidad que aportará (sin puntos, ni comas, ni centavos):</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" id="CANTIDAD" value="<?php echo $datos->CONVENIO->CANTIDAD; ?>" name="CANTIDAD" min="0" step="0" class="form-control" aria-label="Cantidad" required>
                  <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <label>Moneda:</label>
            <div class="form-group col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TIM_ID" id="MONEDA1" value="1" required <?php if($datos->CONVENIO->TIM_ID == 1){ echo 'checked'; } ?>>
                  <label class="form-check-label" for="MONEDA1">Pesos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TIM_ID" id="MONEDA2" value="2" required <?php if($datos->CONVENIO->TIM_ID == 2){ echo 'checked'; } ?>>
                  <label class="form-check-label" for="MONEDA2">Doláres</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <input type="hidden" name="CPE_ID" value="<?php echo $datos->CONVENIO->CPE_ID; ?>">
                <input type="hidden" name="NING_ID" value="<?php echo $datos->CONVENIO->NING_ID; ?>">
                <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
                <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
            </div>
        </div> 
    </form>
</div>