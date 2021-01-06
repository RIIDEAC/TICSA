<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar Nota de Egreso</h1>
</div>
  <div class="container">
    <h2><?php echo $datos->PACIENTE->PAC_NOMBRE.' '.$datos->PACIENTE->PAC_PATERNO.' '.$datos->PACIENTE->PAC_MATERNO; ?></h2>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>ActualizarDatosNotaDeEgreso/">
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="PAC_TEGRESO">Tipo de egreso</label>
            <select data-live-search="true" id="PAC_TEGRESO" name="TIE_ID" class="form-control" required>
              <?php foreach($datos->CATALOGOS->CAT_TIPOEGRESO_TIE as $value) { ?>
                <option value="<?php echo $value->TIE_ID; ?>" <?php if($value->TIE_ID == $datos->PACIENTE->TIE_ID){ echo 'selected'; } ?>><?php echo $value->TIE_MIN; ?></option>  
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_FEGRESO">Fecha de egreso</label>
          <input type="date" name="PAC_FEGRESO" value="<?php echo $datos->PACIENTE->PAC_FEGRESO; ?>" class="form-control" id="PAC_FEGRESO" required>
        </div>
        <div class="form-group col-md-3">
          <label for="PAC_HEGRESO">Hora de egreso</label>
          <input type="time" name="PAC_HEGRESO" class="form-control" value="<?php echo $datos->PACIENTE->PAC_HEGRESO; ?>" id="PAC_HEGRESO" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="PAC_ESTADO">Descripción del estado general del paciente</label>
          <textarea class="form-control" id="PAC_ESTADO" name="PAC_ESTADO" maxlength="255" rows="3"><?php echo $datos->PACIENTE->PAC_ESTADO; ?></textarea>
        </div>
      </div>
      <div class="form-row">
        <label>El paciente cumplió los criterios de egreso:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CUMPLIO" id="CUMPLIO" value="1" required <?php if($datos->PACIENTE->CUMPLIO == 1){ echo 'checked'; } ?>>
              <label class="form-check-label" for="CUMPLIO">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="CUMPLIO" id="CUMPLIO1" value="2" required <?php if($datos->PACIENTE->CUMPLIO == 2){ echo 'checked'; } ?>>
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
              <input class="form-check-input" type="radio" name="OBJETIVOS" id="OBJETIVOS" value="1" required <?php if($datos->PACIENTE->OBJETIVOS == 1){ echo 'checked'; } ?>>
              <label class="form-check-label" for="OBJETIVOS">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="OBJETIVOS" id="OBJETIVOS1" value="2" required <?php if($datos->PACIENTE->OBJETIVOS == 2){ echo 'checked'; } ?>>
              <label class="form-check-label" for="OBJETIVOS1">No</label>
            </div>
        </div>
        <label>Asistió a todas las sesiones terapéuticas y actividades programadas:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SESIONES" id="SESIONES" value="1" required <?php if($datos->PACIENTE->SESIONES == 1){ echo 'checked'; } ?>>
              <label class="form-check-label" for="SESIONES">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SESIONES" id="SESIONES1" value="2" required <?php if($datos->PACIENTE->SESIONES == 2){ echo 'checked'; } ?>>
              <label class="form-check-label" for="SESIONES1">No</label>
            </div>
        </div>
        <label>Mantuvo la abstinencia durante todo el proceso de tratamiento:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ABSTINENCIA" id="ABSTINENCIA" value="1" required <?php if($datos->PACIENTE->ABSTINENCIA == 1){ echo 'checked'; } ?>>
              <label class="form-check-label" for="ABSTINENCIA">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ABSTINENCIA" id="ABSTINENCIA1" value="2" required <?php if($datos->PACIENTE->ABSTINENCIA == 2){ echo 'checked'; } ?>>
              <label class="form-check-label" for="ABSTINENCIA1">No</label>
            </div>
        </div>
        <label>Se compromete a asistir al proceso de seguimiento:</label>
        <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SEGUIMIENTO" id="SEGUIMIENTO" value="1" required <?php if($datos->PACIENTE->SEGUIMIENTO == 1){ echo 'checked'; } ?>>
              <label class="form-check-label" for="SEGUIMIENTO">Sí</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="SEGUIMIENTO" id="SEGUIMIENTO1" value="2" required <?php if($datos->PACIENTE->SEGUIMIENTO == 2){ echo 'checked'; } ?>>
              <label class="form-check-label" for="SEGUIMIENTO1">No</label>
            </div>
        </div>
      </div>
      <input type="hidden" name="NING_ID" value="<?php echo $datos->PACIENTE->NING_ID; ?>">
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
      <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Actualizar</button>
  </form>
  </div>
