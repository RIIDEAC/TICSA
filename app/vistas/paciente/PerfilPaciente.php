<?php //echo '<pre>'; print_r($datos); ?>
<hr>
<div class="container-fluid">
<div class="row">  
  <div class="col-6">
  	<div class="card">
      <div class="card-header">
        Datos del paciente
      </div>
      <div class="card-body">
      <?php echo $datos->{0}->PAC_NOMBRE.' '.$datos->{0}->PAC_PATERNO.' '.$datos->{0}->PAC_MATERNO; ?><br>
      Fecha de nacimiento: <?php echo $datos->{0}->PAC_FNACIMIENTO; ?><br>
      Lugar de nacimiento: <?php echo $datos->{0}->ENF_MAY; ?><br>
      Nacionalidad: <?php echo $datos->{0}->NAC_MAY; ?><br>
      Sexo: <?php echo $datos->{0}->SEX_MAY; ?><br>
      Fecha registro: <?php echo $datos->{0}->FECHA_REGISTRO; ?><br>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card">
      <div class="card-header">
        Procesos del paciente
      </div>
      <div class="card-body">
      <ul class="list-group list-group-flush">
      <?php foreach ($datos as $key => $value) { ?>
        <li class="list-group-item">
          <h5 class="card-title">Expediente: <?php echo $value->NING_ID; ?></h5>
          <p class="card-text">Fecha y hora de ingreso: <?php echo $value->PAC_FINGRESO. ' '.$value->PAC_HINGRESO; ?></p>
          <a href="<?php echo $this->_config->obtener('app/webbase').'VisualizarProceso/'.$value->NING_ID; ?>" class="btn btn-primary">Ver el proceso</a>
        </li>
      <?php } ?> 
      </ul>
      </div>
    </div>
  </div>
</div>
</div>