<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Entrevista Psicológica Inicial Parte 1</h1>
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
Nombre completo:&nbsp;<strong><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></strong>&nbsp;
Fecha y hora de elaboración: <strong><?php echo $datos->DATOS->FECHA_CAPTURA; ?></strong> 
<hr>
<p>
Motivo por el que acude a consulta explicitado por el paciente: <?php echo $datos->DATOS->MOTIVO; ?>
</p>
<p>
Circunstancias actuales especiales:: <?php echo $datos->DATOS->ESPECIALES; ?>
</p>
<p>
Definición del problema (¿Qué, cómo, cuándo, dónde?) evolución explicitado por el paciente: <?php echo $datos->DATOS->PROBLEMA; ?>
</p>

<p><strong>Motivaci&oacute;n para el consumo:</strong></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td>Conflictos personales</td>
			<td><?php if($datos->DATOS->CONFLICTOS == '1'){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Presi&oacute;n social</td>
			<td><?php if($datos->DATOS->PRESION == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Ambientes propicios</td>
			<td><?php if($datos->DATOS->AMBIENTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Estados emocionales negativos</td>
			<td><?php if($datos->DATOS->NEGATIVOS == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Estados f&iacute;sicos negativos</td>
			<td><?php if($datos->DATOS->FISICOS == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Deseos y tentaciones</td>
			<td><?php if($datos->DATOS->DESEOS == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Prueba de control personal</td>
			<td><?php if($datos->DATOS->CONTROL == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Estados emocionales positivos</td>
			<td><?php if($datos->DATOS->POSITIVOS == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
	</tbody>
</table>

<p><strong>Acontecimientos significativos en la vida del paciente:</strong></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td>&nbsp;</td>
			<td style="text-align:center">Antes</td>
			<td style="text-align:center">Durante</td>
		</tr>
		<tr>
			<td>P&eacute;rdidas o duelos importantes</td>
			<td><?php if($datos->DATOS->PERDIDAANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->PERDIDADURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Rupturas o abandonos</td>
			<td><?php if($datos->DATOS->RUPTURAANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->RUPTURADURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Enfermedades importantes</td>
			<td><?php if($datos->DATOS->ENFERMEDADANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->ENFERMEDADDURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Intervenciones quir&uacute;rgicas o ingresos</td>
			<td><?php if($datos->DATOS->QUIRURGICOANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->QUIRURGICODURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Hospitalarios con importante capacidad de influencia para el paciente</td>
			<td><?php if($datos->DATOS->HOSPITALARIOSANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->HOSPITALARIOSDURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Violencia familiar o maltrato</td>
			<td><?php if($datos->DATOS->VIOLENCIAANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->VIOLENCIADURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Abuso sexual</td>
			<td><?php if($datos->DATOS->ABUSOANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->ABUSODURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Desarraigo (por migraci&oacute;n u otros motivos)</td>
			<td><?php if($datos->DATOS->DESARRAIGOANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->DESARRAIGODURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
		<tr>
			<td>Otras: <?php echo $datos->DATOS->OTRAS; ?></td>
			<td><?php if($datos->DATOS->OTRASANTES == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
			<td><?php if($datos->DATOS->OTRASDURANTE == 1){ echo 'No'; }else{ echo 'Sí'; } ?></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td style="width:50%">Capturado por: <strong><?php echo $datos->DATOS->USU_NOMBRE.' '.$datos->DATOS->USU_PATERNO.' '.$datos->DATOS->USU_MATERNO; ?></strong></td>
			<td rowspan="3">
			<p>Firma:</p>
			</td>
		</tr>
		<tr>
			<td>Funci&oacute;n: <strong><?php echo $datos->DATOS->USU_CARGO; ?></strong></td>
		</tr>
		<tr>
			<td>C&eacute;dula:&nbsp;<strong><?php echo $datos->DATOS->USU_PRO; ?></strong> </td>
		</tr>
	</tbody>
</table>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>