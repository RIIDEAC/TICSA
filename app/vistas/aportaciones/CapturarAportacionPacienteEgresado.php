<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Capturar aportación</h1>
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Este apartado es para capturar las aportaciones de <strong>pacientes que se encuentran egresados</strong>, si desea recibir una aportación para otro proceso del mismo paciente pero que se encuentra en proceso de tratamiento actualmente elija la opción adecuada.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarAportacionPaciente/">
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="NING_ID"><h3>Paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                    <option>Elija el paciente</option>
                  <?php foreach ($datos as $NING => $value) { ?>
                    <option value="<?php echo $NING; ?>"><?php echo 'Exp:'. $NING.' '. $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
                  <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-6">
                <div class="form-label-group">
                    <label for="input">Nombre de quien aporta</label>
                    <input name="APORTA" maxlength="255" type="text" id="input" class="form-control" required>                
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="TIPO_APORTACION">Tipo de aportación:</label>
                <select data-live-search="true" id="TIPO_APORTACION" name="TIPO_APORTACION" class="form-control" required>
                	<option>Selecciona el tipo de aportación</option>
                 	<?php foreach ($this->_formatos->obtener('TIPO_APORTACION') as $key => $value) { ?>
                 	<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                 	<?php } ?>  
                </select>
            </div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-6">
        		<label>Cantidad (sin puntos, ni comas):</label>
            	<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">$</span>
				  </div>
				  <input type="number" name="CANTIDAD" min="1" step="0" class="form-control" aria-label="Cantidad" required>
				  <div class="input-group-append">
				    <span class="input-group-text">.00</span>
				  </div>
				</div>
            </div>
        </div>
        <div class="form-row">
        	<div class="form-group col-md-6">
            	<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="MONEDA" id="inlineRadio1" value="1" required>
				  <label class="form-check-label" for="inlineRadio1">Pesos</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="MONEDA" id="inlineRadio2" value="2" required>
				  <label class="form-check-label" for="inlineRadio2">Doláres</label>
				</div>
            </div>
        </div>
    	<div class="row">
	        <div class="col-md-12 text-left">
	            <br>
	            <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
	            <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
	        </div>
        </div> 
        </form>
    </div>
</div>