<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Capturar gastos paciente Activo</h1>
</div>
    <div class="container">
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Este apartado es para capturar las gastos de pacientes que se encuentran activos, si desea registrar un gasto para otro proceso del mismo paciente que ya egresó elija la opción adecuada.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarGasto/">
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
              <label for="TIPO_GASTO">Tipo de gasto:</label>
                <select data-live-search="true" id="TIPO_GASTO" name="TIG_ID" class="form-control" required>
                 	<?php foreach ($datos->CATALOGOS->CAT_TIPOGASTO_TIG as $value) { ?>
                 	<option value="<?php echo $value->TIG_ID; ?>"><?php echo $value->TIG_MIN; ?></option>
                 	<?php } ?>  
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="DESCRIPCION">Descripción</label>
                  <textarea class="form-control" id="DESCRIPCION" name="DESCRIPCION" maxlength="255" rows="3"></textarea>
                </div>
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
				  <input class="form-check-input" onchange="Dolar(this.value);" type="radio" name="TIM_ID" id="inlineRadio1" value="1" required checked>
				  <label class="form-check-label" for="inlineRadio1">Pesos</label>
				</div>
				<div class="form-check form-check-inline">
				  <input class="form-check-input" onchange="Dolar(this.value);" type="radio" name="TIM_ID" id="inlineRadio2" value="2" required>
				  <label class="form-check-label" for="inlineRadio2">Doláres</label>
				</div>
            </div>
            <div id="TIPOCAMBIO"></div>
            </div>
            <div id="RESPUESTA" class="col-md-6">
            </div>
        </div>
    	<div class="row">
	        <div class="col-md-12 text-left">
	            <br>
	            <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
	            <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
	        </div>
        </div> 
        </form>
    </div>
<script>
// ------------------------------------------------------- //
// ENABLE AND DISABLED
// ------------------------------------------------------ //
// ------------------------------------------------------- //
// ENABLE AND DISABLED
// ------------------------------------------------------ //
$('select').selectpicker();
$('#NING_ID').change(function(){
    var data ={"NING_ID" : $(this).val()};
    $.ajax({
        data: data,
        url: '<?php echo $this->_config->obtener('app/webbase').'ObtenerBalanceGastosPacienteActivo'; ?>',
        type: 'POST',
        success: function(response)
        {
            $("#RESPUESTA").html(response);
        }
    });
})
function Dolar(value)
{
    if(value == 2)
    {
        document.getElementById("TIPOCAMBIO").innerHTML = "<div class='form-group col-md-12'><label class='form-check-label' for='TIPO_CAMBIO'>Tipo de cambio (máximo 2 decimales)</label><div class='input-group mb-3'><div class='input-group-prepend'><span class='input-group-text'>$</span></div><input type='number' name='TIPO_CAMBIO' min='1' step='.01' value='18' class='form-control' aria-label='Cantidad' required></div></div>";
    }
    else
    {
        document.getElementById("TIPOCAMBIO").innerHTML = "";
    }
}
</script>