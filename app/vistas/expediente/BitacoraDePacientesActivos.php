<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Bitácora de pacientes activos</h1>
</div>
<textarea name="Editor">
<table border="1" cellpadding="1" cellspacing="1" style="height:100%; width:100%">
			<tbody>
				<tr>
					<td rowspan="4" style="text-align:center; vertical-align:middle"><img alt="" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/<?php echo $datos->CENTRO->CEN_ABRE; ?>.png" style="height:100px; width:100px" /></td>
					<td colspan="1" rowspan="2">
						<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br />
						<?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?><br />
						<?php echo $datos->CENTRO->CEN_TELEFONO. ', ' .$datos->CENTRO->CEN_CORREO. ', ' .$datos->CENTRO->CEN_WEB; ?><br />
					</td>
					<td>Revisión: <?php echo $datos->FORMATO->FOR_REVISION; ?></td>
				</tr>
				<tr>
					<td>Versión: 01</td>
				</tr>
				<tr>
					<td rowspan="2" style="text-align:center">
					<h3><strong><?php echo $datos->FORMATO->FOR_MIN; ?></strong></h3>
					</td>
					<td>Código: <?php echo $datos->FORMATO->FOR_CODIGO; ?></td>
				</tr>
				<tr>
					<td>Página: 1 de 1</td>
				</tr>
			</tbody>
		</table>
		<br>
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td># Exp.</td>
					<td>Nombre</td>
					<td>Edad</td>
					<td>Nacimiento</td>
					<td>Sexo</td>
					<td>Nacionalidad</td>
					<td>Domicilio</td>
					<td>Tipo de ingreso</td>
					<td>Fecha -hora</td>
					<td>Familiar</td>
				</tr>
			<?php 
			foreach ($datos->PACIENTES as $paciente) { ?>
				<tr>
					<td><?php echo $paciente->NING_ID; ?></td>
					<td><?php echo $paciente->PAC_NOMBRE.' '.$paciente->PAC_PATERNO.' '.$paciente->PAC_MATERNO; ?></td>
					<td><?php echo $paciente->PAC_EDAD; ?> años</td>
					<td><?php echo $paciente->PAC_FNACIMIENTO; ?></td>
					<td><?php echo $paciente->SEX_MIN; ?></td>
					<td><?php echo $paciente->NAC_MAY; ?></td>
					<td><?php if($paciente->PAC_SCALLE == 1){ echo 'Situación de calle en '; }else{ echo $paciente->PAC_CALLE.' '.$paciente->PAC_NEXTERIOR.' '.$paciente->PAC_NINTERIOR.' '; } echo 'CP '.$paciente->d_codigo.' '.$paciente->d_ciudad.' '.$paciente->D_mnpio.' '.$paciente->d_estado; ?></td>
					<td><?php echo $paciente->TII_MAY; ?></td>
					<td><?php echo $paciente->PAC_FINGRESO.' '.$paciente->PAC_HINGRESO; ?></td>
					<td><?php if(!empty($paciente->FAM_ID)){ echo $paciente->FAM_NOMBRE.' '.$paciente->FAM_PATERNO.' '.$paciente->FAM_MATERNO; }else{ echo 'Sin registro'; } ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>