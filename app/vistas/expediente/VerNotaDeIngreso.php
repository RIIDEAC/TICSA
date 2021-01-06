<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Nota de Ingreso</h1>
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
		Fecha y hora de ingreso: <strong><?php echo $datos->DATOS->PAC_FINGRESO. ' ' .$datos->DATOS->PAC_HINGRESO; ?></strong><br> 
		Tipo de ingreso:&nbsp;<strong><?php echo $datos->DATOS->TII_MAY; ?></strong> 
		Fecha y hora de elaboración: <strong><?php echo $datos->DATOS->PAC_FINGRESO. ' ' .$datos->DATOS->PAC_HINGRESO; ?></strong>
		
		<h3><strong>1. Datos del paciente:</strong></h3>
		Nombre completo:&nbsp;<strong><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></strong>&nbsp;
		Sexo:&nbsp;<strong><?php echo $datos->DATOS->SEX_MAY; ?></strong> 
		Fecha de nacimiento: <strong><?php echo $datos->DATOS->PAC_FNACIMIENTO; ?></strong>&nbsp;
		Edad:<strong><?php echo $datos->DATOS->PAC_EDAD; ?> años</strong><br> 
		Lugar de nacimiento: <strong><?php echo $datos->DATOS->ENF_MAY; ?></strong> 
		Nacionalidad: <strong><?php echo $datos->DATOS->NAC_MAY; ?></strong><br>		
		Estado civil: <strong><?php echo $datos->DATOS->ESC_MIN; ?></strong> 
		Escolaridad: <strong><?php echo $datos->DATOS->ESO_MIN; ?></strong> 
		Ocupación: <strong><?php echo $datos->DATOS->OCU_MIN; ?></strong><br>
		<?php if($datos->DATOS->PAC_SCALLE == '1'){ ?>
		El paciente vive en situación de calle en 
		<?php echo $datos->DATOS->d_tipo_asenta; ?> <strong><?php echo $datos->DATOS->d_asenta; ?></strong>,
		Municipio: <strong><?php echo $datos->DATOS->D_mnpio; ?></strong> Estado: <strong><?php echo $datos->DATOS->d_estado; ?></strong>, C.P.: <strong><?php echo $datos->DATOS->d_codigo; ?></strong>

		<?php } else { ?>
		Domicilio: <strong><?php echo $datos->DATOS->PAC_CALLE.' '.$datos->DATOS->PAC_NEXTERIOR.' '.$datos->DATOS->PAC_NINTERIOR; ?></strong> 
		<?php echo $datos->DATOS->d_tipo_asenta; ?>: <strong><?php echo $datos->DATOS->d_asenta; ?></strong>, 
		C.P.: <strong><?php echo $datos->DATOS->d_codigo; ?></strong>,
		Municipio: <strong><?php echo $datos->DATOS->D_mnpio; ?></strong>,
		Estado: <strong><?php echo $datos->DATOS->d_estado; ?></strong>
		<?php } ?>	
		
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td style="width:20%"><strong>Motivo de consulta:</strong></td>
					<td style="width:20%"><strong>Exploraci&oacute;n f&iacute;sica:</strong></td>
					<td style="width:20%"><strong>Descripción general del estado de salud:</strong></td>
					<td style="width:20%"><strong>Impresi&oacute;n diagn&oacute;stica:</strong></td>
					<td style="width:20%"><strong>Plan de estudio o tratamiento:</strong></td>
				</tr>
				<tr>
					<td style="width:20%">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					</td>
					<td style="width:20%">&nbsp;</td>
					<td style="width:20%">&nbsp;</td>
					<td style="width:20%">&nbsp;</td>
					<td style="width:20%">&nbsp;</td>
				</tr>
			</tbody>
		</table>
		<h3><strong>2. Datos del familiar:</strong></h3>
		<?php if(!empty($datos->DATOS->FAM_ID)){ ?>

		Nombre: <strong><?php echo $datos->DATOS->FAM_NOMBRE. ' ' .$datos->DATOS->FAM_PATERNO. ' ' .$datos->DATOS->FAM_PATERNO; ?></strong> 
		Fecha de nacimiento: <strong><?php echo $datos->DATOS->FAM_FNACIMIENTO; ?></strong> 
		Parentesco: <strong><?php echo $datos->DATOS->PAE_MIN; ?></strong> 
		Sexo: <strong><?php echo $datos->DATOS->SEX_MAY; ?></strong><br />
		Lugar de nacimiento: <strong><?php echo $datos->DATOS->ENF_MAY; ?></strong> 
		Nacionalidad: <strong><?php echo $datos->DATOS->NAC_MAY; ?></strong><br />
		Domicilio: <strong><?php echo $datos->DATOS->FAM_CALLE.' '.$datos->DATOS->FAM_NEXTERIOR.' '.$datos->DATOS->FAM_NINTERIOR; ?></strong> 
		<?php echo $datos->DATOS->d_tipo_asenta; ?>: <strong><?php echo $datos->DATOS->d_asenta; ?></strong>, 
		C.P.: <strong><?php echo $datos->DATOS->d_codigo; ?></strong>,
		Municipio: <strong><?php echo $datos->DATOS->D_mnpio; ?></strong>,
		Estado: <strong><?php echo $datos->DATOS->d_estado; ?></strong>
		
		<?php } else { ?>
		<h3>El paciente no tiene familiares registrados o no dio ningún dato.</h3>	
		<?php } ?>
		<h3><strong>3. Breve historial de consumo</strong></h3>		
		<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
		<tbody>
				<tr>
					<td>Droga de impacto</td>
					<td>Actualmente consume</td>
					<td>Edad de inicio</td>
					<td>Forma de administraci&oacute;n</td>
					<td>Frecuencia de consumo</td>
				</tr>
				<tr>
					<td><strong><?php echo $datos->DATOS->SIS_MIN; ?></strong></td>
					<td><?php echo $datos->DATOS->CND_MIN; ?></td>
					<td><?php echo $datos->DATOS->EDAD_INICIO; ?></td>
					<td><?php echo $datos->DATOS->FAD_MIN; ?></td>
					<td><strong><?php echo $datos->DATOS->FCD_MIN; ?></strong></td>
				</tr>
			</tbody>
		</table>
		<h3><strong>4. Criterios de inclusión</strong></h3>
		<p>El paciente cumple con todos los criterios de inclusión al tratamiento.</p>
		
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