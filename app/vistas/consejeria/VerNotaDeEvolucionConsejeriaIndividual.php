<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Nota de evolución consejería individual</h1>
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
		Fecha de elaboración: <strong><?php echo $datos->DATOS->FECHA_SESION; ?></strong>
		Fecha de la proxima sesión: <strong><?php echo $datos->DATOS->FECHA_PROXIMA; ?></strong> 
		Número de la sesión: <strong><?php echo $datos->DATOS->NUMERO_SESION; ?></strong> 
		Días de tratamiento: <strong><?php echo $datos->DATOS->DIAS_TRATAMIENTO; ?></strong>  
		<h3>Objetivo de la sesión:</h3>
		<?php echo $datos->DATOS->OBJETIVO; ?>
		<h3>Aspectos que se trabajaron con el usuario durante la sesión (temas, acciones específicas):</h3>
		<?php echo $datos->DATOS->ASPECTOS; ?>
		<h3>Resultados de la sesión (conducta que mostró el usuario y su disposición):</h3>
		<?php echo $datos->DATOS->RESULTADOS; ?>
		<h3>Tareas que debe realizar el usuario:</h3>
		<?php echo $datos->DATOS->TAREAS; ?>
		<h3>Temas/contenidos a trabajar con el usuario en la próxima sesión (Plan de cosnejería individual):</h3>
		<?php echo $datos->DATOS->TEMAS; ?>
		<h3>Observaciones:</h3>
		<?php echo $datos->DATOS->OBSERVACIONES; ?>
		
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
			<td>Certificación:&nbsp;<strong><?php echo $datos->DATOS->USU_PRO; ?></strong> </td>
		</tr>
	</tbody>
</table>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>