<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Prueba de ASSIST</h1>
</div>
<textarea name="Editor">
<table border="1" cellpadding="1" cellspacing="1" style="height:100%; width:100%">
	<tbody>
		<tr>
			<td rowspan="4" style="text-align:center; vertical-align:middle"><img alt="" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/<?php echo $datos->CENTRO->CEN_ABRE; ?>.png" style="height:100px; width:100px" /></td>
			<td colspan="1" rowspan="2">
				<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br/>
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
Fecha de elaboración: <strong><?php echo $datos->DATOS->FECHA_CAPTURA; ?></strong>

<p><strong>Resultados:</strong></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td>Sustancia</td>
			<td>Puntuaci&oacute;n</td>
			<td>Riesgo</td>
		</tr>
		<tr>
			<td>Tabaco</td>
			<td><?php echo $datos->DATOS->TABACO->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->TABACO->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Alcohol</td>
			<td><?php echo $datos->DATOS->ALCOHOL->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->ALCOHOL->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Cannabis</td>
			<td><?php echo $datos->DATOS->CANNABIS->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->CANNABIS->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Cocaína</td>
			<td><?php echo $datos->DATOS->COCAINA->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->COCAINA->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Anfetamina</td>
			<td><?php echo $datos->DATOS->ANFETAMINA->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->ANFETAMINA->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Inhalables</td>
			<td><?php echo $datos->DATOS->INHALABLES->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->INHALABLES->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Sedantes</td>
			<td><?php echo $datos->DATOS->SEDANTES->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->SEDANTES->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Alucinógenos</td>
			<td><?php echo $datos->DATOS->ALUCINOGENOS->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->ALUCINOGENOS->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Opiacios</td>
			<td><?php echo $datos->DATOS->OPIACEOS->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->OPIACEOS->RIESGO; ?></td>
		</tr>
		<tr>
			<td>Otros:</td>
			<td><?php echo $datos->DATOS->OTROS->PUNTOS; ?></td>
			<td><?php echo $datos->DATOS->OTROS->RIESGO; ?></td>
		</tr>
	</tbody>
</table>
<p>
Riesgo bajo: Los/las usuarios/as que obtuvieron puntuaciones de 0-3 para “Todas las sustancias” o 0-10 para “Alcohol”, tienen un riesgo bajo de presentar problemas relacionados con el consumo de sustancias. Aunque pueden consumir sustancias de vez en cuando, actualmente no se enfrentan con esos problemas y dado sus hábitos actuales de consumo tienen un riesgo bajo de desarrollar futuros problemas.
</p>
<p>
Riesgo moderado: Los/las usuarios/as que obtuvieron una puntuación de 4-26 para “Todas
las sustancias” o de 11-26 para “Alcohol”, aunque quizás presenten algunos problemas, tienen
un riesgo moderado de presentar problemas de salud y de otro tipo. El continuar el consumo a
este ritmo indica una probabilidad de futuros problemas de salud y de otro tipo, entre ellos la
probabilidad de dependencia. El riesgo aumenta en los/las usuarios/as que tienen un historial
de problemas por el uso de sustancias y dependencia.
</p>
<p>
Riesgo alto: Una puntuación de ‘27 o más’ en cualquier sustancia sugiere que el/la usuario/a
tiene un alto riesgo de dependencia de dicha sustancia y probablemente esté teniendo problemas de salud, sociales, económicos, legales y en las relaciones personales, como resultado
del consumo de alcohol y otras drogas. Además, los/las usuarios/as que en promedio se han
inyectado drogas en los últimos tres meses, más de cuatro veces al mes, también tienen probabilidad de estar en alto riesgo.
</p>
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
			<td>Folio certificado:&nbsp;<strong><?php echo $datos->DATOS->USU_PRO; ?></strong> </td>
		</tr>
	</tbody>
</table>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>