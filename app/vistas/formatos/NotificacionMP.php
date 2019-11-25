<?php //echo '<pre>'; print_r($datos); die(); ?>
<html>
<header>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="<?php echo $this->_config->obtener('app/webbase'); ?>ckeditor/ckeditor.js"></script>
	<title>Notificación al M.P.</title>
</header>
<body>
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
					<td>Revisión: <?php echo date("Y-m-d"); ?></td>
				</tr>
				<tr>
					<td>Versión: 01</td>
				</tr>
				<tr>
					<td rowspan="2" style="text-align:center">
					<h3><strong>AVISO DE INTERNAMIENTO</strong></h3>
					</td>
					<td>Código:</td>
				</tr>
				<tr>
					<td>Página: 1 de 1</td>
				</tr>
			</tbody>
		</table>
		Expediente n&uacute;mero: <strong><?php echo $datos->FORMATO->NING_ID; ?></strong>&nbsp;
		Fecha y hora de ingreso: <strong><?php echo $datos->FORMATO->PAC_FINGRESO. ' ' .$datos->FORMATO->PAC_HINGRESO; ?></strong> 
		Tipo de ingreso:&nbsp;<strong><?php echo $datos->FORMATO->TII_MAY; ?></strong> 
		Fecha y hora de elaboración: <strong><?php echo $datos->FORMATO->PAC_FINGRESO. ' ' .$datos->FORMATO->PAC_HINGRESO; ?></strong>
		<hr>
		<strong>C. AGENTE DEL MINISTERIO PUBLICO</strong><br>
		PARA SU CONOCIMIENTO:
		<p>
		Con objeto de dar cumplimiento a lo dispuesto por la Norma Oficial Mexicana NOM -028 -SSA2-2009, Para la Prevención, Tratamiento y Control de las Adicciones, me permito informarle los datos relativos al internamiento:
		</p>
		<h3>Datos del paciente:</h3>
		Nombre completo:&nbsp;<strong><?php echo $datos->FORMATO->PAC_NOMBRE.' '.$datos->FORMATO->PAC_PATERNO.' '.$datos->FORMATO->PAC_MATERNO; ?></strong>&nbsp;
		Sexo:&nbsp;<strong><?php echo $datos->FORMATO->SEX_MAY; ?></strong> 
		Fecha de nacimiento: <strong><?php echo $datos->FORMATO->PAC_FNACIMIENTO; ?></strong>&nbsp;
		Edad:<strong><?php echo $datos->FORMATO->PAC_EDAD; ?> años</strong> 
		Lugar de nacimiento: <strong><?php echo $datos->FORMATO->ENF_MAY; ?></strong> 
		Nacionalidad: <strong><?php echo $datos->FORMATO->NAC_MAY; ?></strong>&nbsp;		
		Estado civil: <strong><?php echo $datos->FORMATO->ESC_MIN; ?></strong> 
		Escolaridad: <strong><?php echo $datos->FORMATO->ESO_MIN; ?></strong> 
		Ocupación: <strong><?php echo $datos->FORMATO->OCU_MIN; ?></strong><br>
		Domicilio: <strong><?php echo $datos->FORMATO->PAC_CALLE.' '.$datos->FORMATO->PAC_NEXTERIOR.' '.$datos->FORMATO->PAC_NINTERIOR; ?></strong> 
		<?php echo $datos->FORMATO->d_tipo_asenta; ?>: <strong><?php echo $datos->FORMATO->d_asenta; ?></strong>, 
		C.P.: <strong><?php echo $datos->FORMATO->d_codigo; ?></strong>,
		Municipio: <strong><?php echo $datos->FORMATO->D_mnpio; ?></strong>,
		Estado: <strong><?php echo $datos->FORMATO->d_estado; ?></strong>	
		<hr>
		<h3>Datos del familiar, tutor o representante legal:</h3>

		Nombre: <strong><?php echo $datos->FAMILIARES->FAM_NOMBRE. ' ' .$datos->FAMILIARES->FAM_PATERNO. ' ' .$datos->FAMILIARES->FAM_PATERNO; ?></strong> 
		Fecha de nacimiento: <strong><?php echo $datos->FAMILIARES->FAM_FNACIMIENTO; ?></strong> 
		Parentesco: <strong><?php echo $datos->FAMILIARES->PAE_MIN; ?></strong> 
		Sexo: <strong><?php echo $datos->FAMILIARES->SEX_MAY; ?></strong><br />
		Lugar de nacimiento: <strong><?php echo $datos->FAMILIARES->ENF_MAY; ?></strong> 
		Nacionalidad: <strong><?php echo $datos->FAMILIARES->NAC_MAY; ?></strong><br />
		Domicilio: <strong><?php echo $datos->FAMILIARES->FAM_CALLE.' '.$datos->FAMILIARES->FAM_NEXTERIOR.' '.$datos->FAMILIARES->FAM_NINTERIOR; ?></strong> 
		<?php echo $datos->FAMILIARES->d_tipo_asenta; ?>: <strong><?php echo $datos->FAMILIARES->d_asenta; ?></strong>, 
		C.P.: <strong><?php echo $datos->FAMILIARES->d_codigo; ?></strong>,
		Municipio: <strong><?php echo $datos->FAMILIARES->D_mnpio; ?></strong>,
		Estado: <strong><?php echo $datos->FAMILIARES->d_estado; ?></strong>
		<hr>
		<h3>Datos del responsable sanitario</h3>
		Responsable sanitario: <strong></strong><br>
		Cédula profesional: <strong></strong>

		<p>
			El usuario cuenta con la indicación de un médico y la solicitud de un familiar responsable tutor o representante legal, ambas por escrito; los cuales fueron recabados al momento de su ingreso, además que un profesional de la salud manifiesta que debido a su problema representa un riesgo para su persona y su familia, lo anterior para dar cumplimiento a lo ordenado en el numeral 5.3.2 de la NOM-028-SSA2-2009.
		</p>
		<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td style="width:50%">
				<p><strong><?php echo $datos->FAMILIARES->FAM_NOMBRE.' '.$datos->FAMILIARES->FAM_PATERNO.' '.$datos->FAMILIARES->FAM_MATERNO; ?></strong><br />
				<strong><?php echo strtoupper($datos->FAMILIARES->PAE_MIN); ?></strong></p>
				<br>
				<p><strong>Firma: __________________________</strong></p>
			</td>
			<td style="width:50%">
				<p><strong><?php echo $datos->CENTRO->CEN_DIRECTOR; ?></strong><br />
				<strong>DIRECTOR</strong></p>
				<br>
				<p><strong>Firma: __________________________</strong></p>
			</td>
		</tr>
	</tbody>
</table>	
	</textarea>
    <script>
            CKEDITOR.replace('Editor');
    </script>
</body>
</html>