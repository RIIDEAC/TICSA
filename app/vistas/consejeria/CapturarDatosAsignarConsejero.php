<?php //echo '<pre>'; print_r($datos); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Asigna o modifica el consejero asignado al paciente</h1>
</div>
    <div class="container">
        <p class="text-justify"><strong>INTRUCCIONES:</strong> Este apartado es para asignar o modificar el consejero(a) de un paciente, si el paciente ya tiene consejero asignado se modificará automaticamente</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosAsignarConsejero/">
            <div class="form-row">
            <div class="col-md-12">
                <div class="form-group col-md-12">
                  <label for="NING_ID"><h3>Paciente</h3></label>
                    <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                        <option>Selecciona el paciente</option>
                      <?php foreach ($datos->PACIENTES as $value) { ?>
                        <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></option>
                      <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="USU_ID"><h3>Consejero(a)</h3></label>
                    <select data-live-search="true" id="USU_ID" name="USU_ID" class="form-control" required>
                        <option>Selecciona el consejero(a)</option>
                      <?php foreach ($datos->CONSEJEROS as $value) { ?>
                        <option value="<?php echo $value->USU_ID; ?>"><?php echo $value->USU_NOMBRE.' '.$value->USU_PATERNO.' '.$value->USU_MATERNO; ?></option>
                      <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <br>
                    <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
                    <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
                </div>
            </div> 
        </form>
    </div>