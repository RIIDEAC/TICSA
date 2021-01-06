<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Convenio de aportaciones periódicas</h1>
</div>
<div class="container">
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosConvenioPeriodico/">
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="NING_ID"><h3>Paciente</h3></label>
                <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                  <?php foreach ($datos->PACIENTES as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>">#<?php echo $value->NING_ID; ?> <?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="FECHA_CAPTURA"><h3>Fecha de realización</h3></label>
                <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
            </div>
        </div>
        <hr>
        <div class="form-row">
            <label>Becado</label>
            <div class="form-group col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" onchange="Enable(this.id,this.value)" name="BECA_ID" id="BECA1" value="1" required checked>
                  <label class="form-check-label" for="BECA1">Becado al 100%</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" onchange="Enable(this.id,this.value)" name="BECA_ID" id="BECA2" value="2" required>
                  <label class="form-check-label" for="BECA2">Beca parcial</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <label>Periodicidad (cada cuánto tiempo hará la aportación):</label>
            <div class="form-group col-md-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PER_ID" id="PERIODO1" value="1" required checked disabled>
                  <label class="form-check-label" for="PERIODO1">Semanal</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PER_ID" id="PERIODO2" value="2" required disabled>
                  <label class="form-check-label" for="PERIODO2">Quincenal</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PER_ID" id="PERIODO3" value="3" required disabled>
                  <label class="form-check-label" for="PERIODO3">Mensual</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PER_ID" id="PERIODO4" value="4" required disabled>
                  <label class="form-check-label" for="PERIODO4">Trimestral</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="PER_ID" id="PERIODO5" value="5" required disabled>
                  <label class="form-check-label" for="PERIODO5">Semestral</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Cantidad que aportará (sin puntos, ni comas, ni centavos):</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="number" id="CANTIDAD" value="0" name="CANTIDAD" min="0" step="0" class="form-control" aria-label="Cantidad" required disabled>
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
                  <input class="form-check-input" type="radio" name="TIM_ID" id="MONEDA1" value="1" required checked disabled>
                  <label class="form-check-label" for="MONEDA1">Pesos</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="TIM_ID" id="MONEDA2" value="2" required disabled>
                  <label class="form-check-label" for="MONEDA2">Doláres</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
                <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
            </div>
        </div> 
    </form>
</div>
<script>
function Enable(id, value)
{
    var items = ['PERIODO1','PERIODO2','PERIODO3','PERIODO4','PERIODO5','CANTIDAD','MONEDA1','MONEDA2'];
    if(id == 'BECA2' && value == '2')
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
            document.getElementById(element).value = 0;
        });
    }
}
$(document).on('click','#ENVIAR',function(){
  $("form :input").prop("disabled", false);
});
</script>