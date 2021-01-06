<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Entrevista Psicológica Inicial Parte 2</h1>
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
			<td>Página: 1 de 2</td>
		</tr>
	</tbody>
</table>
Expediente n&uacute;mero: <strong><?php echo $datos->DATOS->NING_ID; ?></strong>&nbsp;
Nombre completo:&nbsp;<strong><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></strong>&nbsp;
Fecha y hora de elaboración: <strong><?php echo $datos->DATOS->FECHA_CAPTURA; ?></strong> 
<hr>
<p><strong>Apariencia y conducta:</strong></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td>&Aacute;rea</td>
			<td>Resultado</td>
		</tr>
		<tr>
			<td>Edad aparente y cronólogica</td>
			<td>
				<?php if($datos->DATOS->EDAD == 1){ echo 'No difiere'; } ?>
				<?php if($datos->DATOS->EDAD == 2){ echo 'Se observa de menor edad'; } ?>
				<?php if($datos->DATOS->EDAD == 3){ echo 'Se observa de mayor edad'; } ?>
			</td>
		</tr>
		<tr>
			<td>Integridad física</td>
			<td>
				<?php if($datos->DATOS->INTEGRIDAD == 1){ echo 'Integro'; } ?>
				<?php if($datos->DATOS->INTEGRIDAD == 2){ echo 'Falta miembro superior'; } ?>
				<?php if($datos->DATOS->INTEGRIDAD == 3){ echo 'Falta miembro inferior'; } ?>
				<?php if($datos->DATOS->INTEGRIDAD == 4){ echo 'Defecto visual'; } ?>
				<?php if($datos->DATOS->INTEGRIDAD == 5){ echo 'Defecto auditivo'; } ?>
				<?php if($datos->DATOS->INTEGRIDAD == 6){ echo 'Defecto facial'; } ?>
			</td>
		</tr>
		<tr>
			<td>Tono de voz</td>
			<td>
				<?php if($datos->DATOS->TONO == 1){ echo 'No habla'; } ?>
				<?php if($datos->DATOS->TONO == 2){ echo 'Normal'; } ?>
				<?php if($datos->DATOS->TONO == 3){ echo 'Bajo'; } ?>
				<?php if($datos->DATOS->TONO == 4){ echo 'Alto'; } ?>
			</td>
		</tr>
		<tr>
			<td>Aliño</td>
			<td>
				<?php if($datos->DATOS->ALINO == 1){ echo 'Bien aliñado'; } ?>
				<?php if($datos->DATOS->ALINO == 2){ echo 'Descuidado, limpio'; } ?>
				<?php if($datos->DATOS->ALINO == 3){ echo 'Descuidado, sucio'; } ?>
				<?php if($datos->DATOS->ALINO == 4){ echo 'Muy desaliñado'; } ?>
			</td>
		</tr>
		<tr>
			<td>Cooperatividad</td>
			<td>
				<?php if($datos->DATOS->COOPERA == 1){ echo 'Coopera espontáneamente'; } ?>
				<?php if($datos->DATOS->COOPERA == 2){ echo 'Coopera forzadamente'; } ?>
				<?php if($datos->DATOS->COOPERA == 3){ echo 'No coopera'; } ?>
				<?php if($datos->DATOS->COOPERA == 4){ echo 'Se resiste a cooperar'; } ?>
			</td>
		</tr>
		<tr>
			<td>Actitud general</td>
			<td>
				<?php if($datos->DATOS->ACTITUD == 1){ echo 'Libre'; } ?>
				<?php if($datos->DATOS->ACTITUD == 2){ echo 'Forzada'; } ?>
				<?php if($datos->DATOS->ACTITUD == 3){ echo 'Sugerida'; } ?>
				<?php if($datos->DATOS->ACTITUD == 4){ echo 'Tensión'; } ?>
			</td>
		</tr>
		<tr>
			<td>Actitud general</td>
			<td>
				<?php if($datos->DATOS->GENERAL == 1){ echo 'Normal'; } ?>
				<?php if($datos->DATOS->GENERAL == 2){ echo 'Hiperactivo'; } ?>
				<?php if($datos->DATOS->GENERAL == 3){ echo 'Pasivo'; } ?>
			</td>
		</tr>
	</tbody>
</table>

<p><strong>Lenguaje y comunicaci&oacute;n:</strong></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td>&Aacute;rea</td>
			<td>Resultado</td>
		</tr>
		<tr>
			<td>Flujo general del lenguaje</td>
			<td>
				<?php if($datos->DATOS->LENGUAJE == 1){ echo 'Controlado'; } ?>
				<?php if($datos->DATOS->LENGUAJE == 2){ echo 'Rápido'; } ?>
				<?php if($datos->DATOS->LENGUAJE == 3){ echo 'Lento'; } ?>
				<?php if($datos->DATOS->LENGUAJE == 4){ echo 'Dudoso'; } ?>
			</td>
		</tr>
		<tr>
			<td>Alteraciones del lenguaje</td>
			<td>
				<?php if($datos->DATOS->ALTERACIONES == 1){ echo 'Ninguna'; } ?>
				<?php if($datos->DATOS->ALTERACIONES == 2){ echo 'Tartamudeo'; } ?>
				<?php if($datos->DATOS->ALTERACIONES == 3){ echo 'Mutismo'; } ?>
				<?php if($datos->DATOS->ALTERACIONES == 4){ echo 'Verborrea'; } ?>
			</td>
		</tr>
		<tr>
			<td>Tono y contenido del discurso</td>
			<td>
				<?php if($datos->DATOS->CONTENIDOTONO == 1){ echo 'Relación entre comunicaciones verbales y no verbales'; } ?>
				<?php if($datos->DATOS->CONTENIDOTONO == 2){ echo 'Demasiada o poca productividad'; } ?>
				<?php if($datos->DATOS->CONTENIDOTONO == 3){ echo 'Fuga de ideas'; } ?>
				<?php if($datos->DATOS->CONTENIDOTONO == 4){ echo 'Asociaciones vagas'; } ?>
				<?php if($datos->DATOS->CONTENIDOTONO == 5){ echo 'Conclusiones erróneas, neologismos'; } ?>
				<?php if($datos->DATOS->CONTENIDOTONO == 6){ echo 'Incoherencia o incongruencia'; } ?>
			</td>
		</tr>
		<tr>
			<td>Indicadores intelectuales</td>
			<td>
				<?php if($datos->DATOS->INTELECTUAL == 1){ echo 'Responde a lo que se le pregunta'; } ?>
				<?php if($datos->DATOS->INTELECTUAL == 2){ echo 'Divaga'; } ?>
				<?php if($datos->DATOS->INTELECTUAL == 3){ echo 'Entiende en diálogo'; } ?>
				<?php if($datos->DATOS->INTELECTUAL == 4){ echo 'Entiende el vocabulario'; } ?>
				<?php if($datos->DATOS->INTELECTUAL == 5){ echo 'Entiende los conceptos'; } ?>
			</td>
		</tr>
		<tr>
			<td>Manejo de situaciones prácticas y manejo de las situaciones conflictivas</td>
			<td>
				<?php if($datos->DATOS->MANEJO == 1){ echo 'Las resuelve'; } ?>
				<?php if($datos->DATOS->MANEJO == 2){ echo 'Las complica'; } ?>
				<?php if($datos->DATOS->MANEJO == 3){ echo 'Por lo menos se percata de los sucesos'; } ?>
				<?php if($datos->DATOS->MANEJO == 4){ echo 'No es capaz de diferenciar los sucesos'; } ?>
			</td>
		</tr>
		<tr>
			<td>Ambiente sociocultural del que proviene el paciente</td>
			<td>
				<?php if($datos->DATOS->SOCIOCULTURAL == 1){ echo 'Es pobre'; } ?>
				<?php if($datos->DATOS->SOCIOCULTURAL == 2){ echo 'Es enriquecedor'; } ?>
				<?php if($datos->DATOS->SOCIOCULTURAL == 3){ echo 'Limitado'; } ?>
				<?php if($datos->DATOS->SOCIOCULTURAL == 4){ echo 'Lo ha superado'; } ?>
				<?php if($datos->DATOS->SOCIOCULTURAL == 5){ echo 'Lo estanca'; } ?>
			</td>
		</tr>
		<tr>
			<td>Contenido del pensamiento</td>
			<td>
				Espontaneo: <?php if($datos->DATOS->ESPONTANEO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->ESPONTANEO == 2){ echo 'No'; } ?>
				<br>
				Áreas problema: <?php if($datos->DATOS->AREASPROBLEMA == 1){ echo 'Sí '.$datos->DATOS->AREASPROBLEMATEXT; } ?>
				<?php if($datos->DATOS->AREASPROBLEMA == 2){ echo 'No'; } ?>
				<br>
				Temas recurrentes: <?php if($datos->DATOS->TEMASRECURRENTES == 1){ echo 'Sí '.$datos->DATOS->TEMASRECURRENTESTEXT; } ?>
				<?php if($datos->DATOS->TEMASRECURRENTES == 2){ echo 'No'; } ?>
				<br>
				Alteraciones del pensamiento: 
				<?php if($datos->DATOS->ALTERACIONPENSAMIENTO == 1){ echo 'Ninguna'; } ?>
				<?php if($datos->DATOS->ALTERACIONPENSAMIENTO == 2){ echo 'Delirios'; } ?>
				<?php if($datos->DATOS->ALTERACIONPENSAMIENTO == 3){ echo 'Fobias'; } ?>
				<?php if($datos->DATOS->ALTERACIONPENSAMIENTO == 4){ echo 'Obsesiones'; } ?>
				<br>
				Indicadores del pensamiento y prueba de realidad: 
				<?php if($datos->DATOS->REALIDAD == 1){ echo 'Buen contacto con la realidad'; } ?>
				<?php if($datos->DATOS->REALIDAD == 2){ echo 'No es capaz de poner soluciones'; } ?>
				<?php if($datos->DATOS->REALIDAD == 3){ echo 'Contacto inadecuado con la realidad'; } ?>
			</td>
		</tr>
		<tr>
			<td>Funcionamiento emocional</td>
			<td>
				Alteraciones del pensamiento: 
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 1){ echo 'Normal'; } ?>
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 2){ echo 'Angustiado'; } ?>
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 3){ echo 'Deprimido'; } ?>
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 4){ echo 'Enojado'; } ?>
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 5){ echo 'Agresivo'; } ?>
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 6){ echo 'Lábil'; } ?>
				<?php if($datos->DATOS->FUNCIONEMOCIONAL == 7){ echo 'Temeroso'; } ?>
				<br>
				Tono de voz: 
				<?php if($datos->DATOS->TONOEMOCIONAL == 1){ echo 'Normal'; } ?>
				<?php if($datos->DATOS->TONOEMOCIONAL == 2){ echo 'No habla'; } ?>
				<?php if($datos->DATOS->TONOEMOCIONAL == 3){ echo 'Bajo'; } ?>
				<?php if($datos->DATOS->TONOEMOCIONAL == 4){ echo 'Alto'; } ?>
				<br>
				Estado de ánimo en general: 
				<?php if($datos->DATOS->ESTADOGENERAL == 1){ echo 'Normal'; } ?>
				<?php if($datos->DATOS->ESTADOGENERAL == 2){ echo 'Triste'; } ?>
				<?php if($datos->DATOS->ESTADOGENERAL == 3){ echo 'Irritable'; } ?>
				<?php if($datos->DATOS->ESTADOGENERAL == 4){ echo 'Exaltado'; } ?>
				<br>
				Relaciones con el medio: 
				<?php if($datos->DATOS->RELACIONMEDIO == 1){ echo 'Se relaciona adecuadamente'; } ?>
				<?php if($datos->DATOS->RELACIONMEDIO == 2){ echo 'Coopera bien'; } ?>
				<?php if($datos->DATOS->RELACIONMEDIO == 3){ echo 'No coopera, lo hace pasivamente'; } ?>
				<?php if($datos->DATOS->RELACIONMEDIO == 4){ echo 'Coopera forzadamente'; } ?>
				<?php if($datos->DATOS->RELACIONMEDIO == 5){ echo 'Se resiste a cooperar'; } ?>	
			</td>
		</tr>
		<tr>
			<td>Funcionamiento cognoscitivo</td>
			<td>
				Sentido de orientación:<br>
				Tiempo: <?php if($datos->DATOS->TIEMPO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->TIEMPO == 2){ echo 'No'; } ?>
				<br>
				Lugar: <?php if($datos->DATOS->LUGAR == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->LUGAR == 2){ echo 'No'; } ?>
				<br>
				Persona: <?php if($datos->DATOS->PERSONA == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->PERSONA == 2){ echo 'No'; } ?>
				<br>
				Nivel de concentración:<br>
				Persona: <?php if($datos->DATOS->CONCENTRACION == 1){ echo 'Atención'; } ?>
				<?php if($datos->DATOS->CONCENTRACION == 2){ echo 'Estado de alerta'; } ?>
				<br>
				Funcionamiento mnémico:<br>
				<?php if($datos->DATOS->MEMORIA == 1){ echo 'Corto plazo'; } ?>
				<?php if($datos->DATOS->MEMORIA == 2){ echo 'Largo plazo'; } ?>
				<?php if($datos->DATOS->MEMORIA == 3){ echo 'Amnesia'; } ?>
				<?php if($datos->DATOS->MEMORIA == 4){ echo 'Hipermnesia'; } ?>
			</td>
		</tr>
	</tbody>
</table>
<div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
<br>
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
			<td>Página: 2 de 2</td>
		</tr>
	</tbody>
</table>
<br>
<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td>&Aacute;rea</td>
			<td>Resultado</td>
		</tr>
		<tr>
			<td>Insight y juicio</td>
			<td>
				Creencias y expectativas sobre la intervención: 
				<?php if($datos->DATOS->EXPECTATIVAS == 1){ echo 'Apropiadas'; } ?>
				<?php if($datos->DATOS->EXPECTATIVAS == 2){ echo 'Realistas'; } ?>
				<?php if($datos->DATOS->EXPECTATIVAS == 3){ echo 'Fantasiosas'; } ?>
				<br>
				Consciencia de la problematica: 
				<?php if($datos->DATOS->CONCIENCIA == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->CONCIENCIA == 2){ echo 'No'; } ?>
				<br>
				Ideas sobre las causas del problema: 
				<?php if($datos->DATOS->IDEASPROBLEMA == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->IDEASPROBLEMA == 2){ echo 'No'; } ?>
				<br>
				Ideas sobre las posibles soluciones al problema: 
				<?php if($datos->DATOS->IDEASSOLUCIONES == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->IDEASSOLUCIONES == 2){ echo 'No'; } ?>
				<br>
				¿Hay un reconocimiento causa-efecto de sus vivencias: 
				<?php if($datos->DATOS->CAUSAEFECTO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->CAUSAEFECTO == 2){ echo 'No'; } ?>
				<br>
				Responsabiliza a otros o ausencia de insight: 
				<?php if($datos->DATOS->AUSENCIAINSIGHT == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->AUSENCIAINSIGHT == 2){ echo 'No'; } ?>
			</td>
		</tr>
		<tr>
			<td>Problemas conductuales</td>
			<td>
				Sonánbulo: 
				<?php if($datos->DATOS->SONANUBULO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->SONANUBULO == 2){ echo 'No'; } ?>
				<br>
				Habla dormido: 
				<?php if($datos->DATOS->HABLADORMIDO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->HABLADORMIDO == 2){ echo 'No'; } ?>
				<br>
				Bruxismo: 
				<?php if($datos->DATOS->BRUXISMO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->BRUXISMO == 2){ echo 'No'; } ?>
				<br>
				Pesadillas: 
				<?php if($datos->DATOS->PESADILLAS == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->PESADILLAS == 2){ echo 'No'; } ?>
				<br>
				Hiperactivo: 
				<?php if($datos->DATOS->HIPERACTIVO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->HIPERACTIVO == 2){ echo 'No'; } ?>
				<br>
				Mentiroso: 
				<?php if($datos->DATOS->MENTIROSO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->MENTIROSO == 2){ echo 'No'; } ?>
				<br>
				Hurta objetos: 
				<?php if($datos->DATOS->HURTA == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->HURTA == 2){ echo 'No'; } ?>
				<br>
				Timido y se relaciona con dificultad:
				<?php if($datos->DATOS->TIMIDO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->TIMIDO == 2){ echo 'No'; } ?> 
				<br>
				Desobediente:
				<?php if($datos->DATOS->DESOBEDIENTE == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->DESOBEDIENTE == 2){ echo 'No'; } ?>
				<br>
				Hay que forzarlo para completar una tarea:
				<?php if($datos->DATOS->FORZAR == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->FORZAR == 2){ echo 'No'; } ?>
				<br>
				Irritable:
				<?php if($datos->DATOS->IRRITABLE == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->IRRITABLE == 2){ echo 'No'; } ?>
				<br>
				Impulsivo:
				<?php if($datos->DATOS->IMPULSIVO == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->IMPULSIVO == 2){ echo 'No'; } ?>
				<br>
				Se muerde los labios
				<?php if($datos->DATOS->MUERDE == 1){ echo 'Sí'; } ?>
				<?php if($datos->DATOS->MUERDE == 2){ echo 'No'; } ?>

			</td>
		</tr>
		<tr>
			<td>Antecedentes patológicos</td>
			<td>
				<?php if($datos->DATOS->ANTECEDENTESPATO == 1){ echo 'No hay'; } ?>
				<?php if($datos->DATOS->ANTECEDENTESPATO == 2){ echo 'Leves'; } ?>
				<?php if($datos->DATOS->ANTECEDENTESPATO == 3){ echo 'Aparentes (sin atención médica)'; } ?>
				<?php if($datos->DATOS->ANTECEDENTESPATO == 4){ echo 'Motivo previo de atención'; } ?>
			</td>
		</tr>
	</tbody>
</table>

<p><strong>Hip&oacute;tesis diagn&oacute;sticas:</strong></p>

<p><strong>Impresi&oacute;n diagn&oacute;stica:</strong> <?php echo $datos->DATOS->IMPRESION; ?></p>

<p><strong>Sugerencias de tratamiento:</strong> <?php echo $datos->DATOS->SUGERENCIAS; ?></p>

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