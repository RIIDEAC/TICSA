<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Registrar Nota de evolución</h1>
    <p></p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarPsicologiaNotaIndividual/">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="NING_ID"><h3>Paciente</h3></label>
            <select id="NING_ID" name="NING_ID" class="form-control" data-live-search="true" required>
              <?php foreach ($datos as $value) { ?>
                <option value="<?php echo $value->NING_ID; ?>"><?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="PAC_FINGRESO">Fecha de realización</label>
            <input type="date" name="FECHA_SESION" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="PAC_FINGRESO" required>
        </div>
        <div class="form-group col-md-6">
            <label for="PAC_FINGRESO">Fecha de la próxima sesión</label>
            <input type="date" name="FECHA_PROXIMA" 
            value="<?php $fecha = date('Y-m-d'); $nuevafecha = strtotime ( '+7 day' , strtotime ( $fecha ) ) ;
            echo date ( 'Y-m-d' , $nuevafecha ); ?>" class="form-control" id="PAC_FINGRESO" required>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label>Objetivo de la sesión:</label>
        <textarea class="form-control" maxlength="255" rows="3" name="OBJETIVO" required></textarea>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label>Aspectos que se trabajaron con el usuario durante la sesión (temas, acciones específicas):</label>
        <textarea class="form-control" maxlength="255" rows="3" name="ASPECTOS" required></textarea>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label>Resultados de la sesión (conducta que mostró el usuario y su disposición):</label>
        <textarea class="form-control" maxlength="255" rows="3" name="RESULTADOS" required></textarea>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label>Tareas que debe realizar el usuario:</label>
        <textarea class="form-control" maxlength="255" rows="3" name="TAREAS" required></textarea>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label>Temas/contenidos a trabajar con el usuario en la próxima sesión (Plan de psicológia individual):</label>
        <textarea class="form-control" maxlength="255" rows="3" name="TEMAS" required></textarea>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label>Observaciones:</label>
        <textarea class="form-control" maxlength="255" rows="3" name="OBSERVACIONES" required></textarea>
      </div>
      </div>       
      <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
      <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
  </form>
  </div>
</div>