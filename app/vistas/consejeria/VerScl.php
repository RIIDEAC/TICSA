<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"><?php echo $datos->FORMATO->FOR_MIN; ?></h1>
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
		Expediente n&uacute;mero: <strong><?php echo $datos->DATOS->FORMATO->NING_ID; ?></strong>&nbsp;
		Nombre completo:&nbsp;<strong><?php echo $datos->DATOS->FORMATO->PAC_NOMBRE.' '.$datos->DATOS->FORMATO->PAC_PATERNO.' '.$datos->DATOS->FORMATO->PAC_MATERNO; ?></strong>&nbsp;Fecha de elaboración: <strong><?php echo $datos->DATOS->FORMATO->FECHA_CAPTURA; ?></strong>
<h3>Resultados</h3>
		<h4>Puntuación: <strong><?php echo $datos->DATOS->RESULTADOS->PUNTOS; ?></strong></h4>
		<h4>Nivel de molestia: <strong><?php echo $datos->DATOS->RESULTADOS->RIESGO; ?></strong></h4>
		
		<?php if(isset($datos->DATOS->RESULTADOS->ESPECIAL->CONTROLAR)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>	
		<strong>Sentir que alguien puede controlar mis pensamientos</strong><br>
		<?php } ?>
		
		<?php if(isset($datos->DATOS->RESULTADOS->ESPECIAL->VOCES)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Escuchar voces que otras personas no pueden oír</strong><br>
		<?php } ?>
		
		<?php if(isset($datos->DATOS->RESULTADOS->ESPECIAL->PENSANDO)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Creer que la gente sabe qué estoy pensando</strong><br>
		<?php } ?>
		
		<?php if(isset($datos->DATOS->RESULTADOS->ESPECIAL->VER)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Ver cosas que otros no pueden ver</strong><br>
		<?php } ?>

		<?php if(isset($datos->DATOS->RESULTADOS->ESPECIAL->MOVIENDOSE)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Sentir algo caminando o moviéndose en mi cuerpo que no se pueda ver</strong><br>
		<?php } ?>
		<hr>

<p>&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td style="width:50%">Capturado por: <strong><?php echo $datos->DATOS->FORMATO->USU_NOMBRE.' '.$datos->DATOS->FORMATO->USU_PATERNO.' '.$datos->DATOS->FORMATO->USU_MATERNO; ?></strong></td>
			<td rowspan="3">
			<p>Firma:</p>
			</td>
		</tr>
		<tr>
			<td>Funci&oacute;n: <strong><?php echo $datos->DATOS->FORMATO->USU_CARGO; ?></strong></td>
		</tr>
		<tr>
			<td>Certificación:&nbsp;<strong><?php echo $datos->DATOS->FORMATO->USU_PRO; ?></strong> </td>
		</tr>
	</tbody>
</table>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>