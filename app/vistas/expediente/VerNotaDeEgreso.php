<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Nota de Egreso</h1>
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
		Expediente n&uacute;mero: <strong><?php echo $datos->DATOS->NING_ID; ?></strong>&nbsp;
		Fecha y hora de ingreso: <strong><?php echo $datos->DATOS->PAC_FINGRESO. ' ' .$datos->DATOS->PAC_HINGRESO; ?></strong> Tipo de ingreso:&nbsp;<strong><?php echo $datos->DATOS->TII_MAY; ?></strong> 
		
		<hr>
		Nombre completo:&nbsp;<strong><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></strong>&nbsp;Fecha y hora de egreso: <strong><?php echo $datos->DATOS->PAC_FEGRESO. ' ' .$datos->DATOS->PAC_HEGRESO; ?></strong><br>
		Motivo de egreso: <strong><?php echo $datos->DATOS->TIE_MIN; ?></strong> Días de tratamiento: <strong><?php echo $datos->DATOS->DIAS_TRATAMIENTO; ?></strong>
		<p>Resumen de la evoluci&oacute;n y el estado actual:</p>
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td style="height:55px">
					<p>&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>
		<p>Problemas clínicos pendientes:</p>
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td style="height:55px">
					<p>&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>
		<h4><strong>Criterios de egreso:</strong></h4>
		Cumplió con los objetivos del tratamiento: <strong><?php if($datos->DATOS->OBJETIVOS == 1){ echo 'Sí'; }else{ echo 'No'; } ?></strong><br>
		Asistió a todas las sesiones terapéuticas y actividades programadas: <strong><?php if($datos->DATOS->SESIONES == 1){ echo 'Sí'; }else{ echo 'No'; } ?></strong><br>
		Mantuvo la abstinencia durante todo el proceso de tratamiento: <strong><?php if($datos->DATOS->ABSTINENCIA == 1){ echo 'Sí'; }else{ echo 'No'; } ?></strong><br>
		Se compromete a asistir al proceso de seguimiento: <strong><?php if($datos->DATOS->SEGUIMIENTO == 1){ echo 'Sí'; }else{ echo 'No'; } ?></strong><br>
		<p>Ratificación del diagnóstico:</p>
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td style="height:55px">
					<p>&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>
		<p>Pronóstico e indicaciones médicas:</p>
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td style="height:55px">
					<p>&nbsp;</p>
					</td>
				</tr>
			</tbody>
		</table>
		<h4><strong>Datos del capturista y médico:</strong></h4>
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td style="width:50%">Capturado por: <strong><?php echo $datos->DATOS->USU_NOMBRE.' '.$datos->DATOS->USU_PATERNO.' '.$datos->DATOS->USU_MATERNO; ?></td>
					<td>M&eacute;dico que revis&oacute;:</td>
				</tr>
				<tr>
					<td>Funci&oacute;n: <strong><?php echo $datos->DATOS->USU_CARGO; ?></strong></td>
					<td>C&eacute;dula:</td>
				</tr>
				<tr>
					<td>
					<p>Firma:</p>
					</td>
					<td>Firma:</td>
				</tr>
			</tbody>
		</table>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>