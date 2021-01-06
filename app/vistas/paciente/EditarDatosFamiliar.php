<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar datos de familiar</h1>
</div>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>ActualizarDatosFamiliar/">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="FAM_PARENTESCO">Parentesco con el paciente (Pregunte al familiar: ¿Qué es de usted el paciente? soy su...)</label>
            <select data-live-search="true" id="FAM_PARENTESCO" name="PAE_ID" class="form-control" required>
          <?php foreach ($datos->CATALOGOS->CAT_PARENTESCO_PAE as $key => $value) { ?>
            <option value="<?php echo $value->PAE_ID; ?>"><?php echo $value->PAE_MIN; ?></option>  
          <?php } ?>
        </select>
        </div>
        <div class="form-group col-md-4" id="RESPUESTA_PARENTESCO"></div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="RPR_ID">¿Es Representante legal del paciente?</label>
            <select data-live-search="true" id="RPR_ID" name="RPR_ID" class="form-control" required>
          <?php foreach ($datos->CATALOGOS->CAT_REPRESENTANTELEGAL_RPR as $key => $value) { ?>
            <option value="<?php echo $value->RPR_ID; ?>" <?php if($value->RPR_ID == $datos->FAMILIAR->RPR_ID){ echo 'selected'; } ?>><?php echo $value->RPR_MAY; ?></option>  
          <?php } ?>
        </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="FAM_PATERNO">Apellido paterno</label>
          <input type="text" value="<?php echo $datos->FAMILIAR->FAM_PATERNO; ?>" name="FAM_PATERNO" class="form-control" id="FAM_PATERNO" placeholder="Apellido paterno" required>
        </div>
        <div class="form-group col-md-4">
          <label for="FAM_MATERNO">Apellido materno</label>
          <input type="text" value="<?php echo $datos->FAMILIAR->FAM_MATERNO; ?>" name="FAM_MATERNO" class="form-control" id="FAM_MATERNO" placeholder="Apellido materno">
        </div>
        <div class="form-group col-md-4">
          <label for="FAM_NOMBRE">Nombres</label>
          <input type="text" value="<?php echo $datos->FAMILIAR->FAM_NOMBRE; ?>" name="FAM_NOMBRE" class="form-control" id="FAM_NOMBRE" placeholder="Nombres" required>
        </div>
      </div>
      <div class="form-row">
      	<div class="form-group col-md-3">
      		<label for="FAM_SEXO">Sexo</label>
    	      <select data-live-search="true" id="FAM_SEXO" name="SEX_ID" class="form-control" required>
    	        <?php foreach ($datos->CATALOGOS->CAT_SEXO_SEX as $key => $value) { ?>
                <option value="<?php echo $value->SEX_ID; ?>" <?php if($value->SEX_ID == $datos->FAMILIAR->SEX_ID){ echo 'selected'; } ?>><?php echo $value->SEX_MAY; ?></option>  
              <?php } ?>
    	      </select>
      	</div>
      	<div class="form-group col-md-3">
          <label for="FAM_FNACIMIENTO">Fecha de nacimiento</label>
          <input type="date" value="<?php echo $datos->FAMILIAR->FAM_FNACIMIENTO; ?>" name="FAM_FNACIMIENTO" class="form-control" id="FAM_FNACIMIENTO" required>
        </div>
        <div class="form-group col-md-3">
      		<label for="FAM_LNACIMIENTO">Lugar de nacimiento</label>
    	      <select data-live-search="true" id="FAM_LNACIMIENTO" name="ENF_ID" class="form-control" required>
    	        <?php foreach ($datos->CATALOGOS->CAT_ENTIDADFEDERATIVA_ENF as $key => $value) { ?>
                    <option value="<?php echo $value->ENF_ID; ?>" <?php if($value->ENF_ID == $datos->FAMILIAR->ENF_ID){echo 'selected';} ?>><?php echo $value->ENF_MAY; ?></option>  
              <?php } ?>
    	      </select>
      	</div>
      	<div class="form-group col-md-3">
      		<label for="FAM_NACIONALIDAD">Nacionalidad</label>
    	      <select data-live-search="true" id="FAM_NACIONALIDAD" name="NAC_ID" class="form-control" required>
    	        <?php foreach ($datos->CATALOGOS->CAT_NACIONALIDAD_NAC as $key => $value) { ?>
                    <option value="<?php echo $value->NAC_ID; ?>" <?php if($value->NAC_ID == $datos->FAMILIAR->NAC_ID){echo 'selected';} ?>><?php echo $value->NAC_MAY; ?></option>  
              <?php } ?>
    	      </select>
      	</div>
      </div>
      <hr>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="FAM_CALLE">Calle</label>
          <input type="text" maxlength="255" value="<?php echo $datos->FAMILIAR->FAM_CALLE; ?>" name="FAM_CALLE" class="form-control" id="FAM_CALLE" placeholder="Calle" required>
        </div>
        <div class="form-group col-md-4">
          <label for="FAM_NEXTERIOR">Número exterior</label>
          <input type="text" name="FAM_NEXTERIOR" value="<?php echo $datos->FAMILIAR->FAM_NEXTERIOR; ?>" class="form-control" id="FAM_NEXTERIOR" placeholder="Número exterior" required>
        </div>
        <div class="form-group col-md-4">
          <label for="FAM_NINTERIOR">Número interior</label>
          <input type="text" value="<?php echo $datos->FAMILIAR->FAM_NINTERIOR; ?>" name="FAM_NINTERIOR" class="form-control" id="FAM_NINTERIOR" placeholder="Número interior">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="FAM_TELEFONOF">Teléfono fijo (incluyendo lada)</label>
          <input type="tel" value="<?php echo $datos->FAMILIAR->FAM_TELEFONOF; ?>" minlength="10" maxlength="10" name="FAM_TELEFONOF" class="form-control" id="FAM_TELEFONOF" placeholder="En caso de que no tenga, coloque el celular" required>
        </div> 
        <div class="form-group col-md-6">
          <label for="FAM_TELEFONOM">Teléfono fijo (incluyendo lada)</label>
          <input type="tel" value="<?php echo $datos->FAMILIAR->FAM_TELEFONOM; ?>" minlength="10" maxlength="10" name="FAM_TELEFONOM" class="form-control" id="FAM_TELEFONOM" placeholder="Coloque el celular" required>
        </div>      
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="CPOSTAL">Buscar el código postal (marque 99999 para extranjeros)</label>
          <input type="number" value="<?php echo $datos->FAMILIAR->d_codigo; ?>" minlength="4" maxlength="5" class="form-control" id="CPOSTAL" placeholder="Código postal">
          </select>
        </div>
      </div>
      <div id="RESPUESTA"></div>
      <div class="row">
      <div class="col-md-12 mt-3">
          <br>
        <input type="hidden" name="PAC_ID" value="<?php echo $datos->FAMILIAR->PAC_ID; ?>" required>
		<input type="hidden" name="FAM_ID" value="<?php echo $datos->FAMILIAR->FAM_ID; ?>" required>
        <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
        <button type="submit" class="btn btn-primary btn-lg">Actualizar</button>
      </div>
      </div> 
    </form>
<script>
  $('#FAM_PARENTESCO').on('change', function()
  {
    var e = document.getElementById('FAM_PARENTESCO');
    var strUser = e.options[e.selectedIndex].text;
    $('#RESPUESTA_PARENTESCO').html(
      '<p>Debe de obtener la siguiente respuesta del familiar:</p><p style="color:red;"> Soy ' + strUser + ' del paciente</p><strong>Si esto no es correcto elija la opción adecuada</strong>'
      );
  });

  $( "#CPOSTAL" ).on('keyup',function()
  {
    var cp = {"CP" : document.getElementById("CPOSTAL").value, "Vista" : "Familiar"};
    
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