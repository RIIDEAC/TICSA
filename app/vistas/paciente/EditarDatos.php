<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar datos de paciente</h1>
</div>
<div class="container">
  <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>ActualizarDatosPaciente/">
  <div class="form-row">
  	<div class="form-group col-md-4">
      <label for="PAC_NOMBRE">Nombres</label>
      <input type="text" name="PAC_NOMBRE" value="<?php echo $datos->PACIENTE->PAC_NOMBRE; ?>" class="form-control" id="PAC_NOMBRE" placeholder="Nombres" required>
    </div>
    <div class="form-group col-md-4">
      <label for="PAC_PATERNO">Primer apellido</label>
      <input type="text" name="PAC_PATERNO" value="<?php echo $datos->PACIENTE->PAC_PATERNO; ?>" class="form-control" id="PAC_PATERNO" placeholder="Apellido paterno" required>
    </div>
    <div class="form-group col-md-4">
      <label for="PAC_MATERNO">Segundo Apellido</label>
      <input type="text" name="PAC_MATERNO" value="<?php echo $datos->PACIENTE->PAC_MATERNO; ?>" class="form-control" id="PAC_MATERNO" placeholder="Apellido materno">
    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-3">
  		<label for="PAC_SEXO">Sexo</label>
	      <select data-live-search="true" id="PAC_SEXO" name="SEX_ID" class="form-control" required>
          <?php foreach ($datos->CATALOGOS->CAT_SEXO_SEX as $key => $value) { ?>
            <option value="<?php echo $value->SEX_ID; ?>" <?php if($value->SEX_ID == $datos->PACIENTE->SEX_ID){ echo 'selected'; } ?>><?php echo $value->SEX_MAY; ?></option>  
          <?php } ?>
        </select>
  	</div>
  	<div class="form-group col-md-3">
      <label for="PAC_FNACIMIENTO">Fecha de nacimiento</label>
      <input type="date" name="PAC_FNACIMIENTO" value="<?php echo $datos->PACIENTE->PAC_FNACIMIENTO; ?>" class="form-control" id="PAC_FNACIMIENTO" required>
    </div>
    <div class="form-group col-md-3">
  		<label for="PAC_LNACIMIENTO">Lugar de nacimiento</label>
	      <select data-live-search="true" id="PAC_LNACIMIENTO" name="ENF_ID" class="form-control" required>
	        <?php foreach ($datos->CATALOGOS->CAT_ENTIDADFEDERATIVA_ENF as $key => $value) { ?>
            <option value="<?php echo $value->ENF_ID; ?>" <?php if($value->ENF_ID == $datos->PACIENTE->ENF_ID){ echo 'selected'; } ?>><?php echo $value->ENF_MAY; ?></option>  
          <?php } ?>
	      </select>
  	</div>
  	<div class="form-group col-md-3">
  		<label for="PAC_NACIONALIDAD">Nacionalidad</label>
	      <select data-live-search="true" id="PAC_NACIONALIDAD" name="NAC_ID" class="form-control" required>
	        <?php foreach ($datos->CATALOGOS->CAT_NACIONALIDAD_NAC as $key => $value) { ?>
                <option value="<?php echo $value->NAC_ID; ?>" <?php if($value->NAC_ID == $datos->PACIENTE->NAC_ID){echo 'selected';} ?>><?php echo $value->NAC_MAY; ?></option>  
          <?php } ?>
        </select>
  	</div>
  </div>
  <input type="hidden" name="PAC_ID" value="<?php echo $datos->PACIENTE->PAC_ID; ?>">
  <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
  <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
</form>
</div>