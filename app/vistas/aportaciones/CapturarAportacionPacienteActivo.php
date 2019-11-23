<?php //echo '<pre>'; print_r($datos); ?>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Capturar aportación</h1>
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Este apartado es para capturar las aportaciones de pacientes que se encuentran activos, si desea recibir una aportación para otro proceso del mismo paciente como un adeudo elija la opción adecuada.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarAportacionPaciente/">
        <div class="form-row">
        <div class="col-md-6">
            <div class="form-group col-md-12">
              <label for="NING_ID"><h3>Paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                  <?php foreach ($datos as $value) { ?>
                    <option>Selecciona el paciente</option>
                    <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
                  <?php } ?>
                </select>
            </div>
        	<div class="form-group col-md-12">
                <div class="form-label-group">
                    <label for="input">Nombre de quien aporta</label>
                    <input name="APORTA" maxlength="255" type="text" id="input" class="form-control" required>     
                </div>
            </div>
            <div class="form-group col-md-12">
              <label for="TIPO_APORTACION">Tipo de aportación:</label>
                <select data-live-search="true" id="TIPO_APORTACION" name="TIA_ID" class="form-control" required>
                	<option>Selecciona el tipo de aportación</option>
                 	<?php foreach ($this->_formatos->obtener('TIPO_APORTACION') as $key => $value) { ?>
                 	<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                 	<?php } ?>  
                </select>
            </div>
        	<div class="form-group col-md-12">
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
        	<div class="form-group col-md-12">
            	<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="TIM_ID" id="inlineRadio1" value="1" required>
				  <label class="form-check-label" for="inlineRadio1">Pesos</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" type="radio" name="TIM_ID" id="inlineRadio2" value="2" required>
				  <label class="form-check-label" for="inlineRadio2">Doláres</label>
				</div>
            </div>
            </div>
            <div id="RESPUESTA" class="col-md-6">
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
<script>
// ------------------------------------------------------- //
// ENABLE AND DISABLED
// ------------------------------------------------------ //
$('#NING_ID').change(function(){
    var data ={"NING_ID" : $(this).val()};
    $.ajax({
        data: data,
        url: '<?php echo $this->_config->obtener('app/webbase').'ControladorBALANCEAPORTACIONES'; ?>',
        type: 'POST',
        success: function(response)
        {
            var items = ['2','3','4','5','6','7','8','9','10','11','12','13','14','15','16'];
            if(response)
            {
                $("#RESPUESTA").html(response);
                
                items.forEach(function(element)
                {
                    document.getElementById("TIPO_APORTACION").options[element].disabled = true;
                });
                document.getElementById("TIPO_APORTACION").selectedIndex = 1;
                $('select').selectpicker('refresh');
            }
            else
            {
                $("#RESPUESTA").html(response);

                items.forEach(function(element)
                {
                    document.getElementById("TIPO_APORTACION").options[element].disabled = false;
                });
                document.getElementById("TIPO_APORTACION").selectedIndex = 1;
                $('select').selectpicker('refresh');
            }
        }
    });
})
</script>