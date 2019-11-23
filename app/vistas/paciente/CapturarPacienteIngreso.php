<div class="jumbotron">
<div class="container">
  <h1 class="display-3">Registrar paciente</h1>
  <p>Sólo se registran los datos de un paciente una sola vez.</p>
  <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarNuevoPaciente/">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="PAC_PATERNO">Apellido paterno</label>
      <input type="text" name="PAC_PATERNO" class="form-control" id="PAC_PATERNO" placeholder="Apellido paterno" required>
    </div>
    <div class="form-group col-md-4">
      <label for="PAC_MATERNO">Apellido materno</label>
      <input type="text" name="PAC_MATERNO" class="form-control" id="PAC_MATERNO" placeholder="Apellido materno">
    </div>
    <div class="form-group col-md-4">
      <label for="PAC_NOMBRE">Nombres</label>
      <input type="text" name="PAC_NOMBRE" class="form-control" id="PAC_NOMBRE" placeholder="Nombres" required>
    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-3">
  		<label for="PAC_SEXO">Sexo</label>
	      <select data-live-search="true" id="PAC_LNACIMIENTO" name="SEX_ID" class="form-control" required>
          <?php foreach ($datos->CATALOGOS->CAT_SEXO_SEX as $key => $value) { ?>
            <option value="<?php echo $value->SEX_ID; ?>"><?php echo $value->SEX_MAY; ?></option>  
          <?php } ?>
        </select>
  	</div>
  	<div class="form-group col-md-3">
      <label for="PAC_FNACIMIENTO">Fecha de nacimiento</label>
      <input type="date" name="PAC_FNACIMIENTO" class="form-control" id="PAC_FNACIMIENTO" required>
    </div>
    <div class="form-group col-md-3">
  		<label for="PAC_LNACIMIENTO">Lugar de nacimiento</label>
	      <select data-live-search="true" id="PAC_LNACIMIENTO" name="ENF_ID" class="form-control" required>
	        <?php foreach ($datos->CATALOGOS->CAT_ENTIDADFEDERATIVA_ENF as $key => $value) { ?>
            <option value="<?php echo $value->ENF_ID; ?>"><?php echo $value->ENF_MAY; ?></option>  
          <?php } ?>
	      </select>
  	</div>
  	<div class="form-group col-md-3">
  		<label for="PAC_NACIONALIDAD">Nacionalidad</label>
	      <select data-live-search="true" id="PAC_NACIONALIDAD" name="NAC_ID" class="form-control" required>
	        <?php foreach ($datos->CATALOGOS->CAT_NACIONALIDAD_NAC as $key => $value) { ?>
                <option value="<?php echo $value->NAC_ID; ?>" <?php if($value->NAC_ID == 223){echo 'selected';} ?>><?php echo $value->NAC_MAY; ?></option>  
          <?php } ?>
        </select>
  	</div>
  </div>
  <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
  <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
</form>
</div>
</div>