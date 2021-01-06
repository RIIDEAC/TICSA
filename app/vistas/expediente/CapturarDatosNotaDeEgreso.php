<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Registrar Nota de Egreso</h1>
</div>
  <div class="container">
    <p>Sólo se permite egresar si el paciente tiene un expediente activo.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosNotaDeEgreso/">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="NING_ID">Paciente</label>
            <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
              <?php foreach ($datos->PACIENTES as $value) { ?>
                <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="PAC_TEGRESO">Tipo de egreso</label>
            <select data-live-search="true" id="PAC_TEGRESO" name="TIE_ID" class="form-control" required>
              <?php foreach($datos->CATALOGOS->CAT_TIPOEGRESO_TIE as $value) { ?>
                <option value="<?php echo $value->TIE_ID; ?>"><?php echo $value->TIE_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_FEGRESO">Fecha de egreso</label>
          <input type="date" name="PAC_FEGRESO" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="PAC_FEGRESO" required>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_HEGRESO">Hora de egreso</label>
          <input type="time" name="PAC_HEGRESO" class="form-control" value="<?php echo date("H:i"); ?>" id="PAC_HEGRESO" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="PAC_ESTADO">Descripción del estado general del paciente</label>
          <textarea class="form-control" id="PAC_ESTADO" name="PAC_ESTADO" maxlength="255" rows="3"></textarea>
        </div>
      </div>
      <div class="form-row">
        <label>El paciente cumplió los criterios de egreso:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" onchange="Enable(this.id,this.value)" name="CUMPLIO" id="CUMPLIO" value="1" required checked>
              <label class="form-check-label" for="CUMPLIO">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" onchange="Enable(this.id,this.value)" name="CUMPLIO" id="CUMPLIO1" value="2" required>
              <label class="form-check-label" for="CUMPLIO1">No</label>
            </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <h5>Criterios de egreso</h5>
        </div>
        <label>Cumplió con los objetivos del tratamiento:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="OBJETIVOS" id="OBJETIVOS" value="1" required disabled checked>
              <label class="form-check-label" for="OBJETIVOS">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="OBJETIVOS" id="OBJETIVOS1" value="2" required disabled>
              <label class="form-check-label" for="OBJETIVOS1">No</label>
            </div>
        </div>
        <label>Asistió a todas las sesiones terapéuticas y actividades programadas:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SESIONES" id="SESIONES" value="1" required disabled checked>
              <label class="form-check-label" for="SESIONES">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SESIONES" id="SESIONES1" value="2" required disabled>
              <label class="form-check-label" for="SESIONES1">No</label>
            </div>
        </div>
        <label>Mantuvo la abstinencia durante todo el proceso de tratamiento:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ABSTINENCIA" id="ABSTINENCIA" value="1" required disabled checked>
              <label class="form-check-label" for="ABSTINENCIA">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ABSTINENCIA" id="ABSTINENCIA1" value="2" required disabled>
              <label class="form-check-label" for="ABSTINENCIA1">No</label>
            </div>
        </div>
        <label>Se compromete a asistir al proceso de seguimiento:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SEGUIMIENTO" id="SEGUIMIENTO" value="1" required disabled checked>
              <label class="form-check-label" for="SEGUIMIENTO">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SEGUIMIENTO" id="SEGUIMIENTO1" value="2" required disabled>
              <label class="form-check-label" for="SEGUIMIENTO1">No</label>
            </div>
        </div>
      </div>
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
      <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
<script>
  function Enable(id, value)
  {
      var items = ['OBJETIVOS','OBJETIVOS1','SESIONES','SESIONES1','ABSTINENCIA','ABSTINENCIA1','SEGUIMIENTO','SEGUIMIENTO1'];

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
              document.getElementById(element).value = 1;
          });
      }
  }
  $(document).on('click','#ENVIAR',function(){
  $("form :input").prop("disabled", false);
});
</script>