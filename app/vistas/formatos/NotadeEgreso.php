<?php //echo '<pre>'; print_r($datos); die(); ?>
<html lang="es">
<header>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="<?php echo $this->_config->obtener('app/webbase'); ?>ckeditor/ckeditor.js"></script>
	<title>Nota de egreso de <?php echo $datos->FORMATO->PAC_NOMBRE.' '.$datos->FORMATO->PAC_PATERNO.' '.$datos->FORMATO->PAC_MATERNO; ?></title>
</header>
<body>
	<textarea name="Editor">
		<table border="1" cellpadding="1" cellspacing="1" style="height:100%; width:100%">
			<tbody>
				<tr>
					<td rowspan="4" style="text-align:center; vertical-align:middle"><img alt="" src="http://localhost/ticsa/img/AmanecerAC.png" style="height:100px; width:100px" /></td>
					<td colspan="1" rowspan="2">
						<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br />
						<?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?><br />
						<?php echo $datos->CENTRO->CEN_TELEFONO. ', ' .$datos->CENTRO->CEN_CORREO. ', ' .$datos->CENTRO->CEN_WEB; ?><br />
					</td>
					<td>Revisión: <?php echo date("Y-m-d"); ?></td>
				</tr>
				<tr>
					<td>Versión: 01</td>
				</tr>
				<tr>
					<td rowspan="2" style="text-align:center">
					<h3><strong>Nota de egreso</strong></h3>
					</td>
					<td>Código:</td>
				</tr>
				<tr>
					<td>Página: 1 de 1</td>
				</tr>
			</tbody>
		</table>ody>
		</table>
		Expediente n&uacute;mero: <strong><?php echo $datos->FORMATO->NING_ID; ?></strong>&nbsp;
		Fecha y hora de ingreso: <strong><?php echo $datos->FORMATO->PAC_FINGRESO. ' ' .$datos->FORMATO->PAC_HINGRESO; ?></strong>
		Fecha y hora de egreso: <strong><?php echo $datos->FORMATO->PAC_FEGRESO. ' ' .$datos->FORMATO->PAC_HEGRESO; ?></strong> 
		Tipo de ingreso:&nbsp;<strong><?php echo $datos->FORMATO->TII_MAY; ?></strong>
		Tipo de egreso:&nbsp;<strong><?php echo $datos->FORMATO->TIE_MIN; ?></strong> 
		Fecha y hora de elaboración: <strong><?php echo $datos->FORMATO->PAC_FEGRESO. ' ' .$datos->FORMATO->PAC_HEGRESO; ?></strong>
		Días de tratamiento: <strong><?php echo $datos->FORMATO->DIAS_TRATAMIENTO; ?></strong>
		<hr>
		<h3>Datos del paciente:</h3>
		Nombre completo:&nbsp;<strong><?php echo $datos->FORMATO->PAC_NOMBRE.' '.$datos->FORMATO->PAC_PATERNO.' '.$datos->FORMATO->PAC_MATERNO; ?></strong>&nbsp;
		Sexo:&nbsp;<strong><?php echo $datos->FORMATO->SEX_MAY; ?></strong>
		Fecha de nacimiento: <strong><?php echo $datos->FORMATO->PAC_FNACIMIENTO; ?></strong>&nbsp;
		Edad al ingreso:<strong><?php echo $datos->FORMATO->PAC_EDAD; ?> años</strong>
		Edad al egreso:<strong><?php echo $datos->FORMATO->EDAD_EGRE; ?> años</strong> 
		Lugar de nacimiento: <strong><?php echo $datos->FORMATO->ENF_MAY; ?></strong> 
		Nacionalidad: <strong><?php echo $datos->FORMATO->NAC_MAY; ?></strong>&nbsp;
		<br />
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<thead>
				<tr>
					<th scope="col" style="width: 75%;">Criterios de egreso</th>
					<th scope="col">Cumpli&oacute;</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width:75%">Cumpli&oacute; con los objetivos del tratamiento:</td>
					<td style="text-align:center"><?php if($datos->FORMATO->OBJETIVOS == '1'){ echo 'Sí'; }else{ echo 'No'; } ?></td>
				</tr>
				<tr>
					<td style="width:75%">Asisti&oacute; a todas las sesiones terap&eacute;uticas y actividades programadas:</td>
					<td style="text-align:center"><?php if($datos->FORMATO->SESIONES == '1'){ echo 'Sí'; }else{ echo 'No'; } ?></td>
				</tr>
				<tr>
					<td style="width:75%">Mantuvo la abstinencia durante todo el proceso de tratamiento:</td>
					<td style="text-align:center"><?php if($datos->FORMATO->ABSTINENCIA == '1'){ echo 'Sí'; }else{ echo 'No'; } ?></td>
				</tr>
				<tr>
					<td style="width:75%">Se compromete a asistir al proceso de seguimiento:</td>
					<td style="text-align:center"><?php if($datos->FORMATO->SEGUIMIENTO == '1'){ echo 'Sí'; }else{ echo 'No'; } ?></td>
				</tr>
			</tbody>
		</table>
		<br />
		<table align="center" border="1" cellpadding="1" cellspacing="1" style="width:100%">
		<thead>
			<tr>
				<th colspan="2" scope="col">Datos cl&iacute;nicos</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><strong>Resumen de evolución y estado actual</strong></td>
				<td style="height:60px; white-space:nowrap; width:80%">&nbsp;</td>
			</tr>
			<tr>
				<td><strong>Problemas clínicos pendientes:</strong></td>
				<td style="height:60px; white-space:nowrap; width:80%">&nbsp;</td>
			</tr>
			<tr>
				<td><strong>Diagnóstico final (CIE-10, DSM-V):</strong></td>
				<td style="height:60px; white-space:nowrap; width:80%">&nbsp;</td>
			</tr>
			<tr>
				<td><strong>Pronóstico:</strong></td>
				<td style="height:60px; white-space:nowrap; width:80%">&nbsp;</td>
			</tr>
			<tr>
				<td><strong>Indicaciones médicas:</strong></td>
				<td style="height:60px; white-space:nowrap; width:80%">&nbsp;</td>
			</tr>
		</tbody>
	</table>	
	</textarea>
    <script>
            CKEDITOR.replace('Editor');
    </script>
</body>
</html>