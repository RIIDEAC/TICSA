<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar Nota de Ingreso</h1>
</div>
  <div class="container">
    <h2><?php echo $datos->PACIENTE->PAC_NOMBRE.' '.$datos->PACIENTE->PAC_PATERNO.' '.$datos->PACIENTE->PAC_MATERNO; ?></h2>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>ActualizarDatosNotaDeIngreso/">
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="PAC_TINGRESO">Tipo de ingreso</label>
            <select data-live-search="true" id="PAC_TINGRESO" name="TII_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_TIPOINGRESO_TII as $key => $value) { ?>
                <option value="<?php echo $value->TII_ID; ?>" <?php if($value->TII_ID == $datos->PACIENTE->TII_ID){ echo 'selected'; } ?>><?php echo $value->TII_MAY; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_FINGRESO">Fecha de ingreso</label>
          <input type="date" name="PAC_FINGRESO" value="<?php echo $datos->PACIENTE->PAC_FINGRESO; ?>" class="form-control" id="PAC_FINGRESO" required>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_HINGRESO">Hora de ingreso</label>
          <input type="time" name="PAC_HINGRESO" value="<?php echo $datos->PACIENTE->PAC_HINGRESO; ?>" class="form-control" id="PAC_HINGRESO" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="PAC_MOTIVO">Motivo de consulta</label>
          <textarea class="form-control" id="PAC_MOTIVO" name="PAC_MOTIVO" maxlength="255" rows="3"><?php echo $datos->PACIENTE->PAC_MOTIVO; ?></textarea>
        </div>
        <div class="form-group col-md-12">
          <label for="PAC_SALUD">Descripción general del estado de salud</label>
          <textarea class="form-control" id="PAC_SALUD" name="PAC_SALUD" maxlength="255" rows="3"><?php echo $datos->PACIENTE->PAC_SALUD; ?></textarea>
        </div>
      </div>
      <div class="form-row">
        <label class="form-group"> El paciente vive en:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PAC_SCALLE" id="CALLE" value="1" required <?php if($datos->PACIENTE->PAC_SCALLE == 1){ echo 'checked'; } ?>>
              <label class="form-check-label" for="CALLE">Situación de calle</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="PAC_SCALLE" id="CALLE1" value="2" required <?php if($datos->PACIENTE->PAC_SCALLE == 2){ echo 'checked'; } ?>>
              <label class="form-check-label" for="CALLE1">Domicilio fijo</label>
            </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="PAC_CALLE">Calle</label>
          <input type="text" name="PAC_CALLE" value="<?php echo $datos->PACIENTE->PAC_CALLE; ?>" class="form-control" id="PAC_CALLE" placeholder="Calle">
        </div>
        <div class="form-group col-md-4">
          <label for="PAC_NEXTERIOR">Número exterior</label>
          <input type="text" name="PAC_NEXTERIOR" value="<?php echo $datos->PACIENTE->PAC_NEXTERIOR; ?>" class="form-control" id="PAC_NEXTERIOR" placeholder="Número exterior">
        </div>
        <div class="form-group col-md-4">
          <label for="PAC_NINTERIOR">Número interior</label>
          <input type="text" name="PAC_NINTERIOR" value="<?php echo $datos->PACIENTE->PAC_NINTERIOR; ?>" class="form-control" id="PAC_NINTERIOR" placeholder="Número interior">
        </div>
      </div>
      <div class="form-row">
        <label  class="form-group">Tendrá que capturar el código postal aunque el paciente viva en situación de calle, coloque el código postal en dónde suele pasar más tiempo el paciente</label>
       <div class="form-group col-md-6">
          <label for="CPOSTAL">Buscar el código postal (marque 99999 para extranjeros)</label>
          <input type="number" value="<?php echo $datos->PACIENTE->d_codigo; ?>" minlength="4" maxlength="5" class="form-control" id="CPOSTAL" placeholder="Código postal">
          </select>
        </div> 
      </div>
      <div id="RESPUESTA"></div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="PAC_TELEFONO">Teléfono</label>
          <input type="phone" value="<?php echo $datos->PACIENTE->PAC_TELEFONO; ?>" name="PAC_TELEFONO" class="form-control" id="PAC_TELEFONO" placeholder="Teléfono">
        </div>
        <div class="form-group col-md-4">
          <label for="PAC_CORREO">Correo electrónico</label>
          <input type="email" value="<?php echo $datos->PACIENTE->PAC_CORREO; ?>" name="PAC_CORREO" class="form-control" id="PAC_CORREO" placeholder="Correo electrónico">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="PAC_ECIVIL">Estado civil</label>
            <select data-live-search="true" id="PAC_ECIVIL" name="ESC_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_ESTADOCIVIL_ESC as $key => $value) { ?>
                <option value="<?php echo $value->ESC_ID; ?>" <?php if($value->ESC_ID == $datos->PACIENTE->ESC_ID){ echo 'selected'; } ?>><?php echo $value->ESC_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_ESCOLARIDAD">Grado máximo de escolaridad</label>
            <select data-live-search="true" id="PAC_ESCOLARIDAD" name="ESO_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_ESCOLARIDAD_ESO as $key => $value) { ?>
                <option value="<?php echo $value->ESO_ID; ?>" <?php if($value->ESO_ID == $datos->PACIENTE->ESO_ID){ echo 'selected'; } ?>><?php echo $value->ESO_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_OCUPACION">Ocupación actual</label>
            <select data-live-search="true" id="PAC_OCUPACION" name="OCU_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_OCUPACION_OCU as $key => $value) { ?>
                <option value="<?php echo $value->OCU_ID; ?>" <?php if($value->OCU_ID == $datos->PACIENTE->OCU_ID){ echo 'selected'; } ?>><?php echo $value->OCU_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
      </div>
      <h4 class="my-4">Breve historial de consumo</h4>
      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="SIS_ID">Sustancia (Droga) de impacto</label>
              <select data-live-search="true" id="SIS_ID" name="SIS_ID" class="form-control" required>
                <?php foreach ($datos->CATALOGOS->CAT_SISVEASUS_SIS as $key => $value) { ?>
                  <option value="<?php echo $value->SIS_ID; ?>"><?php echo $value->SIS_MIN; ?></option>  
                <?php } ?>
              </select>
        </div>
        <div class="form-group col-md-3">
            <label for="CND_ID">¿Actualmente la consume?</label>
              <select data-live-search="true" id="CND_ID" name="CND_ID" class="form-control" required>
                <?php foreach ($datos->CATALOGOS->CAT_CONSUMEACTUALDROGA_CAD as $key => $value) { ?>
                  <option value="<?php echo $value->CND_ID; ?>"><?php echo $value->CND_MIN; ?></option>  
                <?php } ?>
              </select>
        </div>
        <div class="form-group col-md-3">
          <label for="EDAD_INICIO">Edad de inicio</label>
          <input type="number" name="EDAD_INICIO" class="form-control" id="EDAD_INICIO" minlength="1" maxlength="2" required>
        </div>
        <div class="form-group col-md-6">
            <label for="FAD_ID">Forma de administración principal</label>
              <select data-live-search="true" id="FAD_ID" name="FAD_ID" class="form-control" required>
                <?php foreach ($datos->CATALOGOS->CAT_FORMAADMINISTRACIONDROGA_FAD as $key => $value) { ?>
                  <option value="<?php echo $value->FAD_ID; ?>"><?php echo $value->FAD_MIN; ?></option>  
                <?php } ?>
              </select>
        </div>
        <div class="form-group col-md-6">
            <label for="FCD_ID">Frecuencia de consumo actual</label>
              <select data-live-search="true" id="FCD_ID" name="FCD_ID" class="form-control" required>
                <?php foreach ($datos->CATALOGOS->CAT_FRECUENCIACONSUMODROGA_FCD as $key => $value) { ?>
                  <option value="<?php echo $value->FCD_ID; ?>"><?php echo $value->FCD_MIN; ?></option>  
                <?php } ?>
              </select>
        </div>
      </div>
      <input type="hidden" name="NING_ID" value="<?php echo $datos->PACIENTE->NING_ID; ?>" required>
  <input type="hidden" name="PAC_FNACIMIENTO" value="<?php echo $datos->PACIENTE->PAC_FNACIMIENTO; ?>" required>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
      <div class="form-group my-4">  
        <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
        <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
      </div>
  </form>
  </div>
<script>
  //CODIGO POSTAL
  $( "#CPOSTAL" ).on('keyup',function()
  {
    var cp = {"CP" : document.getElementById("CPOSTAL").value,"Vista": "Paciente"};
    
    if(cp['CP'].length > 3)
    {
        $.ajax({
          data: cp,
          url: "<?php echo $this->_config->obtener('app/webbase'); ?>ObtenerCodigoPostal",
          type: 'POST',
          success: function(response)
          {
            $("#RESPUESTA").html(response);
            $('select').selectpicker('refresh');
          }
      });
    }    
  });
</script>