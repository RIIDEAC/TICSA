<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Expediente #<?php echo $datos->PACIENTE->NING_ID; ?></h1>
</div>
<div class="card mt-3">
  <div class="card-body">
      <a target="_blank" href="<?php echo $this->_config->obtener('app/webbase'); ?>VerAportacionesDelPaciente/<?php echo $datos->PACIENTE->NING_ID; ?>" role="button" class="btn btn-outline-primary btn-lg">Ver aportaciones</a>
  </div>
</div>
<div class="row">
<div class="col-sm-5">
	<div class="card mt-3">
		<div class="card-header">
			<?php echo $datos->PACIENTE->PAC_NOMBRE.' '.$datos->PACIENTE->PAC_PATERNO.' '.$datos->PACIENTE->PAC_MATERNO; ?>
		</div>
		<div class="card-body">
		<p>Edad al ingreso: <?php echo $datos->PACIENTE->PAC_EDAD; ?> años Sexo: <?php echo $datos->PACIENTE->SEX_MAY; ?></p>
		<p>
			Fecha de ingreso: <?php echo $datos->PACIENTE->PAC_FINGRESO.' hora: '.$datos->PACIENTE->PAC_HINGRESO; ?> <br>
			Tipo de ingreso: <?php echo $datos->PACIENTE->TII_MAY; ?>
		</p>
		<p>
			Fecha de nacimiento:  <?php echo $datos->PACIENTE->PAC_FNACIMIENTO; ?><br>
			Nacionalidad: <?php echo $datos->PACIENTE->NAC_MAY; ?> <br> 
			Lugar de nacimiento: <?php echo $datos->PACIENTE->ENF_MAY; ?>
		</p>
		<p>
			Ocupación: <?php echo $datos->PACIENTE->OCU_MIN; ?> <br>
			Estado civil: <?php echo $datos->PACIENTE->ESC_MIN; ?> <br> 
			Escolaridad: <?php echo $datos->PACIENTE->ESO_MIN; ?>
		</p>
		</div>
	</div>
</div>
<div class="col-sm-7">
	<div class="card mt-3">
		<div class="card-header">
			Convenios
		</div>
		<ul class="list-group list-group-flush">
				<?php if(!empty($datos->PERIODICO)){ foreach($datos->PERIODICO as $datos->PERIODICO){ ?>
				<?php if($datos->PERIODICO->BECA_ID == 1){ ?>
				<li class="list-group-item"><strong>El paciente tiene una beca del 100%</strong>
				<a href="<?php echo $this->_config->obtener('app/webbase'); ?>EditarDatosConvenioDeAportaciones/<?php echo $datos->PERIODICO->CPE_ID; ?>" role="button" class="btn btn-outline-warning btn-sm">Editar convenio periodico</a>	
				</li>
				<?php }else{ ?>
				<li class="list-group-item">	
					Fecha: <strong><?php echo $datos->PERIODICO->FECHA_CAPTURA; ?></strong> 
					Aportación: <strong><?php echo $datos->PERIODICO->PER_MIN; ?></strong> 
					Cantidad: <strong><?php echo $datos->PERIODICO->CANTIDAD; ?></strong> <?php echo $datos->PERIODICO->TIM_MIN; ?>
					<a href="<?php echo $this->_config->obtener('app/webbase'); ?>EditarDatosConvenioDeAportaciones/<?php echo $datos->PERIODICO->CPE_ID; ?>" role="button" class="btn btn-outline-warning btn-sm">Editar convenio periodico</a>
				</li>	
				<?php } ?>			
				<?php } }else { ?>
				<li class="list-group-item">	
					<a href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosConvenioDeAportaciones" role="button" class="btn btn-outline-info btn-sm">Capturar convenio de aportaciones</a>
				</li>	
				<?php } ?>
				<?php if(!empty($datos->INGRESO)){ ?>
				<?php if($datos->INGRESO->BECA_ID == 1){ ?>
				<li class="list-group-item"><strong>El paciente tiene una beca del 100%</strong>
				<a href="<?php echo $this->_config->obtener('app/webbase'); ?>EditarDatosConvenioDeIngreso/<?php echo $datos->INGRESO->CIN_ID; ?>" role="button" class="btn btn-outline-warning btn-sm">Editar convenio de ingreso</a>	
				</li>
				<?php }else{ ?>
				<li class="list-group-item">	
					Cantidad de ingreso: <strong><?php echo $datos->INGRESO->CANTIDAD; ?></strong> <?php echo $datos->INGRESO->TIM_MIN; ?>
					<a href="<?php echo $this->_config->obtener('app/webbase'); ?>EditarDatosConvenioDeIngreso/<?php echo $datos->INGRESO->CIN_ID; ?>" role="button" class="btn btn-outline-warning btn-sm">Editar convenio de ingreso</a>
				</li>
				<?php } ?>
				<?php }else { ?>
				<li class="list-group-item">
					<a href="<?php echo $this->_config->obtener('app/webbase'); ?>CapturarDatosConvenioDeIngreso" role="button" class="btn btn-outline-info btn-sm">Capturar convenio de ingreso</a>
				</li>	
				<?php } ?>
		</ul>		
	</div>
</div>
</div>

<hr>
				
				
				