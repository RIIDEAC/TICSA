<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Notificación al Miniterio Público</h1>
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
			<td>Revisión: <?php echo $this->fechaMx($datos->FORMATO->FOR_REVISION); ?></td>
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

<div style="text-align:justify">
<strong>C. AGENTE DEL MINISTERIO PUBLICO</strong><br>
PARA SU CONOCIMIENTO:<br>
<strong>AVISO DE INTERNAMIENTO</strong>
<p>
Con objeto de dar cumplimiento a lo dispuesto por la Norma Oficial Mexicana NOM-028-SSA2-2009, Para la Prevención, Tratamiento y Control de las Adicciones, me permito informarle los datos relativos al internamiento:
</p>
Expediente n&uacute;mero: <strong><?php echo $datos->DATOS->NING_ID; ?></strong>&nbsp;
Fecha y hora de ingreso del paciente: <strong><?php echo $this->fechaMx($datos->DATOS->PAC_FINGRESO). ' ' .$datos->DATOS->PAC_HINGRESO; ?></strong> 
Fecha y hora de elaboración del formato: <strong><?php echo $this->fechaMx($datos->DATOS->PAC_FINGRESO). ', ' .$datos->DATOS->PAC_HINGRESO; ?></strong>
<hr>
<h3>Datos del paciente:</h3>
Nombre completo:&nbsp;<strong><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></strong>&nbsp;
Sexo:&nbsp;<strong><?php echo $datos->DATOS->SEX_MAY; ?></strong> 
Fecha de nacimiento: <strong><?php echo $this->fechaMx($datos->DATOS->PAC_FNACIMIENTO); ?></strong>&nbsp;
Edad:<strong><?php echo $datos->DATOS->PAC_EDAD; ?> años</strong> 
Lugar de nacimiento: <strong><?php echo $datos->DATOS->ENF_MAY; ?></strong> 
Nacionalidad: <strong><?php echo $datos->DATOS->NAC_MAY; ?></strong>&nbsp;		
Estado civil: <strong><?php echo $datos->DATOS->ESC_MIN; ?></strong> 
Escolaridad: <strong><?php echo $datos->DATOS->ESO_MIN; ?></strong> 
Ocupación: <strong><?php echo $datos->DATOS->OCU_MIN; ?></strong> Domicilio: <strong><?php echo $datos->DATOS->PAC_CALLE.' '.$datos->DATOS->PAC_NEXTERIOR.' '.$datos->DATOS->PAC_NINTERIOR; ?></strong> 
<?php echo $datos->DATOS->d_tipo_asenta; ?>: <strong><?php echo $datos->DATOS->d_asenta; ?></strong>, 
C.P.: <strong><?php echo $datos->DATOS->d_codigo; ?></strong>,
Municipio: <strong><?php echo $datos->DATOS->D_mnpio; ?></strong>,
Estado: <strong><?php echo $datos->DATOS->d_estado; ?></strong>	
<hr>
<h3>Datos del familiar, tutor o representante legal:</h3>

Nombre: <strong><?php echo $datos->DATOS->FAM_NOMBRE. ' ' .$datos->DATOS->FAM_PATERNO. ' ' .$datos->DATOS->FAM_MATERNO; ?></strong> 
Fecha de nacimiento: <strong><?php echo $this->fechaMx($datos->DATOS->FAM_FNACIMIENTO); ?></strong> 
Parentesco con el usuario: <strong><?php echo $datos->DATOS->PAE_MIN; ?></strong> 
Sexo: <strong><?php echo $datos->DATOS->FAM_SEX; ?></strong> Lugar de nacimiento: <strong><?php echo $datos->DATOS->ENF_MAY; ?></strong> 
Nacionalidad: <strong><?php echo $datos->DATOS->NAC_MAY; ?></strong> 
Domicilio: <strong><?php echo $datos->DATOS->FAM_CALLE.' '.$datos->DATOS->FAM_NEXTERIOR.' '.$datos->DATOS->FAM_NINTERIOR; ?></strong> 
<?php echo $datos->DATOS->d_tipo_asenta; ?>: <strong><?php echo $datos->DATOS->d_asenta; ?></strong>, 
C.P.: <strong><?php echo $datos->DATOS->d_codigo; ?></strong>,
Municipio: <strong><?php echo $datos->DATOS->D_mnpio; ?></strong>,
Estado: <strong><?php echo $datos->DATOS->d_estado; ?></strong>
Télefono fijo: <strong><?php echo $datos->DATOS->FAM_TELEFONOF; ?></strong>
Télefono celular: <strong><?php echo $datos->DATOS->FAM_TELEFONOM; ?></strong>
<hr>
<h3>Datos del responsable sanitario</h3>
Responsable sanitario: <strong><?php echo $datos->CENTRO->MED_TIT; ?> <?php echo $datos->CENTRO->MED_NOMBRE; ?></strong><br>
Cédula profesional: <strong><?php echo $datos->CENTRO->MED_CED; ?></strong>

<p>
	El usuario cuenta con la indicación de un médico y la solicitud de un familiar responsable tutor o representante legal, ambas por escrito; los cuales fueron recabados al momento de su ingreso, además que un profesional de la salud manifiesta que debido a su problema representa un riesgo para su persona y su familia, lo anterior para dar cumplimiento a lo ordenado en el numeral 5.3.2 de la NOM-028-SSA2-2009.
</p>
<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td style="text-align:center; width:50%">Familiar, tutor o representante legal</td>
			<td style="text-align:center; width:50%">Director del establecimiento</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:12px"><?php echo $datos->DATOS->FAM_NOMBRE.' '.$datos->DATOS->FAM_PATERNO.' '.$datos->DATOS->FAM_MATERNO; ?></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12px"><?php echo $datos->CENTRO->CEN_DIRECTOR; ?></span></p>
			</td>
		</tr>
		<tr>
			<td style="vertical-align:baseline; white-space:nowrap">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p><span style="font-size:10px">Firma:</span></p>
			</td>
			<td style="vertical-align:baseline">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p><span style="font-size:10px">Firma:</span></p>
			</td>
		</tr>
	</tbody>
</table>
</div>
</textarea>