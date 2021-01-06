<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Aportación</h1>
</div>
<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<textarea name="Editor">
<table border="1" cellpadding="1" cellspacing="1" style="width:4cm">
	<tbody>
		<tr>
			<td style="text-align:center; vertical-align:middle"><img alt="" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/<?php echo $datos->CENTRO->CEN_ABRE; ?>.png" style="height:100px; width:100px" /></td>
		</tr>
		<tr>
			<td>
			<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br />
			<?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?><br />
			<?php echo $datos->CENTRO->CEN_TELEFONO. ', ' .$datos->CENTRO->CEN_CORREO. ', ' .$datos->CENTRO->CEN_WEB; ?><br />
			</td>
		</tr>
		<tr>
			<td>
			Tipo de aportación: <strong><?php echo $datos->APORTACION->TIA_MIN; ?> </strong><br>
			Paciente: <strong><?php echo $datos->APORTACION->PAC_NOMBRE.' '.$datos->APORTACION->PAC_PATERNO.' '.$datos->APORTACION->PAC_MATERNO; ?></strong><br>
			</td>
		</tr>
		<tr>
			<td>Entreg&oacute;: <span style="font-size:10px"><?php echo $datos->APORTACION->APORTA; ?></span></td>
		</tr>
		<tr>
			<td>Fecha: <?php echo $datos->APORTACION->FECHA_REGISTRO; ?></td>
		</tr>
		<tr>
			<td>Cantidad: <strong><?php echo $datos->APORTACION->CANTIDAD; ?></strong></td>
		</tr>
		<tr>
			<td>Moneda: <strong><?php echo $datos->APORTACION->TIM_MIN; ?></strong></td>
		</tr>
		<tr>
			<td><span style="font-size:10px">Recibi&oacute;: <?php echo $datos->APORTACION->USU_NOMBRE.' '.$datos->APORTACION->USU_PATERNO.' '.$datos->APORTACION->USU_MATERNO; ?> - <?php echo $datos->APORTACION->USU_CARGO; ?></span></td>
		</tr>
		<tr>
			<td>
			<p>FIRMA:</p>

			<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>		
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>