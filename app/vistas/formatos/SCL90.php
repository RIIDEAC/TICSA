<?php //echo '<pre>'; print_r($datos); die(); ?>
<html lang="es">
<header>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="<?php echo $this->_config->obtener('app/webbase'); ?>ckeditor/ckeditor.js"></script>
	<title>Resultados prueba SCL90R</title>
</header>
<body>
	<textarea name="Editor">
		<table border="1" cellpadding="1" cellspacing="1" style="height:100%; width:100%">
			<tbody>
				<tr>
					<td rowspan="3" style="text-align:center; vertical-align:middle"><img alt="" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/<?php echo $datos->CENTRO->CEN_ABRE; ?>.png" style="height:100px; width:100px" /></td>
					<td colspan="1" rowspan="2">
						<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br />
						<?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?><br />
						<?php echo $datos->CENTRO->CEN_TELEFONO. ', ' .$datos->CENTRO->CEN_CORREO. ', ' .$datos->CENTRO->CEN_WEB; ?><br />
					</td>
					<td>Revisi&oacute;n: <?php echo date("Y-m-d"); ?></td>
				</tr>
				<tr>
					<td>Versi&oacute;n: 01</td>
				</tr>
				<tr>
					<td style="text-align:center">
					<h3><strong>SCL90R para molestia en s&iacute;ntomas de psicosis</strong></h3>
					</td>
					<td>C&oacute;digo:</td>
				</tr>
			</tbody>
		</table>
		Expediente n&uacute;mero: <strong><?php echo $datos->FORMATO->NING_ID; ?></strong>&nbsp;
		Fecha de elaboración de la prueba: <strong><?php echo $datos->FORMATO->FECHA_CAPTURA; ?></strong>
		<hr>
		<h3>Datos del paciente:</h3>
		Nombre completo:&nbsp;<strong><?php echo $datos->FORMATO->PAC_NOMBRE.' '.$datos->FORMATO->PAC_PATERNO.' '.$datos->FORMATO->PAC_MATERNO; ?></strong>&nbsp;
		Sexo:&nbsp;<strong><?php echo $datos->FORMATO->SEX_MAY; ?></strong> 
		Fecha de nacimiento: <strong><?php echo $datos->FORMATO->PAC_FNACIMIENTO; ?></strong>&nbsp;
		Edad:<strong><?php echo $datos->FORMATO->PAC_EDAD; ?> años</strong> 
		Lugar de nacimiento: <strong><?php echo $datos->FORMATO->ENF_MAY; ?></strong> 
		Nacionalidad: <strong><?php echo $datos->FORMATO->NAC_MAY; ?></strong>&nbsp;		
		Estado civil: <strong><?php echo $datos->FORMATO->ESC_MIN; ?></strong> 
		Escolaridad: <strong><?php echo $datos->FORMATO->ESO_MIN; ?></strong> 
		Ocupación: <strong><?php echo $datos->FORMATO->OCU_MIN; ?></strong>
		<hr>
		<h3>Resultados</h3>
		<h4>Puntuación: <strong><?php echo $datos->RESULTADOS->PUNTOS; ?></strong></h4>
		<h4>Nivel de molestia: <strong><?php echo $datos->RESULTADOS->RIESGO; ?></strong></h4>
		
		<?php if(isset($datos->RESULTADOS->ESPECIAL->CONTROLAR)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>	
		<strong>Sentir que alguien puede controlar mis pensamientos</strong><br>
		<?php } ?>
		
		<?php if(isset($datos->RESULTADOS->ESPECIAL->VOCES)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Escuchar voces que otras personas no pueden oír</strong><br>
		<?php } ?>
		
		<?php if(isset($datos->RESULTADOS->ESPECIAL->PENSANDO)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Creer que la gente sabe qué estoy pensando</strong><br>
		<?php } ?>
		
		<?php if(isset($datos->RESULTADOS->ESPECIAL->VER)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Ver cosas que otros no pueden ver</strong><br>
		<?php } ?>

		<?php if(isset($datos->RESULTADOS->ESPECIAL->MOVIENDOSE)){ ?>
		Es necesario referir al paciente a valoración psiquiátrica por el resultado en el reactivo:<br>
		<strong>Sentir algo caminando o moviéndose en mi cuerpo que no se pueda ver</strong><br>
		<?php } ?>
		<hr>
		Registrado por: <strong><?php echo $datos->FORMATO->USU_NOMBRE.' '.$datos->FORMATO->USU_PATERNO.' '.$datos->FORMATO->USU_MATERNO; ?></strong><br>
		Cargo: <strong><?php echo $datos->FORMATO->USU_CARGO; ?></strong><br>
		<p>&nbsp;</p>
		<p><strong>Firma: __________________________</strong></p>
	</textarea>
    <script>
            CKEDITOR.replace('Editor');
    </script>
</body>
</html>