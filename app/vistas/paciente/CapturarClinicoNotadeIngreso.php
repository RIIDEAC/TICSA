<?php //echo '<pre>'; print_r($datos); ?>
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Registrar Nota de ingreso</h1>
    <p>Sólo se permite un expediente activo por paciente.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarClinicoNotadeIngreso/">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="PAC_ID">Paciente</label>
            <select data-live-search="true" id="PAC_ID" name="PAC_ID" class="form-control" required>
              <?php foreach ($datos->PACIENTES as $value) { ?>
                <option value="<?php echo $value->PAC_ID; ?>"><?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="PAC_TINGRESO">Tipo de ingreso</label>
            <select data-live-search="true" id="PAC_TINGRESO" name="TII_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_TIPOINGRESO_TII as $key => $value) { ?>
                <option value="<?php echo $value->TII_ID; ?>"><?php echo $value->TII_MAY; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_FINGRESO">Fecha de ingreso</label>
          <input type="date" name="PAC_FINGRESO" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="PAC_FINGRESO" required>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_HINGRESO">Hora de ingreso</label>
          <input type="time" name="PAC_HINGRESO" value="<?php echo date("H:i"); ?>" class="form-control" id="PAC_HINGRESO" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="PAC_MOTIVO">Motivo de consulta</label>
          <textarea class="form-control" id="PAC_MOTIVO" name="PAC_MOTIVO" maxlength="255" rows="3">Llenar en caso de que utilice los formatos del modelo de Ayuda Mutua</textarea>
        </div>
        <div class="form-group col-md-12">
          <label for="PAC_SALUD">Descripción general del estado de salud</label>
          <textarea class="form-control" id="PAC_SALUD" name="PAC_SALUD" maxlength="255" rows="3">Llenar en caso de que utilice los formatos del modelo de Ayuda Mutua</textarea>
        </div>
      </div>
      <div class="form-row">
        <label class="form-group"> El paciente vive en:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" onchange="Enable(this.id,this.value)" name="PAC_SCALLE" id="CALLE" value="1" required checked>
              <label class="form-check-label" for="CALLE">Situación de calle</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" onchange="Enable(this.id,this.value)" name="PAC_SCALLE" id="CALLE1" value="2" required>
              <label class="form-check-label" for="CALLE1">Domicilio fijo</label>
            </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="PAC_CALLE">Calle</label>
          <input type="text" name="PAC_CALLE" class="form-control" id="PAC_CALLE" placeholder="Calle" disabled>
        </div>
        <div class="form-group col-md-4">
          <label for="PAC_NEXTERIOR">Número exterior</label>
          <input type="text" name="PAC_NEXTERIOR" class="form-control" id="PAC_NEXTERIOR" placeholder="Número exterior" disabled>
        </div>
        <div class="form-group col-md-4">
          <label for="PAC_NINTERIOR">Número interior</label>
          <input type="text" name="PAC_NINTERIOR" class="form-control" id="PAC_NINTERIOR" placeholder="Número interior" disabled>
        </div>
      </div>
      <div class="form-row">
        <label  class="form-group">Tendrá que capturar el código postal aunque el paciente viva en situación de calle, coloque el código postal en dónde suele pasar más tiempo el paciente</label>
       <div class="form-group col-md-6">
          <label for="CPOSTAL">Buscar el código postal (marque 99999 para extranjeros)</label>
          <input type="number" minlength="4" maxlength="5" class="form-control" id="CPOSTAL" placeholder="Código postal">
          </select>
        </div> 
      </div>
      <div id="RESPUESTA"></div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="PAC_TELEFONO">Teléfono</label>
          <input type="phone" name="PAC_TELEFONO" class="form-control" id="PAC_TELEFONO" placeholder="Teléfono" disabled>
        </div>
        <div class="form-group col-md-4">
          <label for="PAC_CORREO">Correo electrónico</label>
          <input type="email" name="PAC_CORREO" class="form-control" id="PAC_CORREO" placeholder="Correo electrónico" disabled>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="PAC_ECIVIL">Estado civil</label>
            <select data-live-search="true" id="PAC_ECIVIL" name="ESC_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_ESTADOCIVIL_ESC as $key => $value) { ?>
                <option value="<?php echo $value->ESC_ID; ?>"><?php echo $value->ESC_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_ESCOLARIDAD">Grado máximo de escolaridad</label>
            <select data-live-search="true" id="PAC_ESCOLARIDAD" name="ESO_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_ESCOLARIDAD_ESO as $key => $value) { ?>
                <option value="<?php echo $value->ESO_ID; ?>"><?php echo $value->ESO_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_OCUPACION">Ocupación actual</label>
            <select data-live-search="true" id="PAC_OCUPACION" name="OCU_ID" class="form-control" required>
              <?php foreach ($datos->CATALOGOS->CAT_OCUPACION_OCU as $key => $value) { ?>
                <option value="<?php echo $value->OCU_ID; ?>"><?php echo $value->OCU_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
      </div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
</div>
<script>
  //SITUACION DE CALLE
  function Enable(id, value)
  {
      var items = ['PAC_CALLE','PAC_NEXTERIOR','PAC_NINTERIOR','PAC_TELEFONO','PAC_CORREO'];

      if(value == '2')
      {
          items.forEach(function(element)
          {
              document.getElementById(element).disabled = false;
          });
      }
      else
      {
          items.forEach(function(element)
          {
              document.getElementById(element).disabled = true;
              document.getElementById(element).value = '';
          });
      }
  }
  //CODIGO POSTAL
  $( "#CPOSTAL" ).on('keyup',function()
  {
    var cp = {"CP" : document.getElementById("CPOSTAL").value,"Vista": "Paciente"};
    
    if(cp['CP'].length > 3)
    {
        $.ajax({
          data: cp,
          url: '<?php echo $this->_config->obtener('app/webbase').'ControladorCODIGOPOSTAL'; ?>',
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