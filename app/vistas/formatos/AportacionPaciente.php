<html lang="es">
<header>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
	<title>Recibo de aportación</title>
</header>
<body>
	<textarea name="Editor">
		<table align="center" border="0" cellpadding="1" cellspacing="1" style="width:100%">
			<tbody>
				<tr>
					<td rowspan="2" style="text-align:center; vertical-align:middle; width:60px"><img alt="" src="#" style="height:50px; width:50px" />
					</td>
					<td rowspan="2" style="text-align:center; vertical-align:middle; width:60px">&nbsp;</td>
					<td>
						<strong><?php echo $datos['CENTRO']->CEN_NOMBRE; ?></strong> <?php echo $datos['CENTRO']->CEN_TELEFONO. ' ' .$datos['CENTRO']->CEN_CORREO. ' ' .$datos['CENTRO']->CEN_WEB; ?>
					</td>
				</tr>
				<tr>
					<td>
					Aportaci&oacute;n de: <strong><?php echo $datos['FORMATO']->APORTA; ?></strong>
					Concepto: <strong><?php echo $datos['FORMATO']->TIPO_APORTACION; ?></strong>
					Cantidad: <strong><?php echo $datos['FORMATO']->CANTIDAD. ' ' .$datos['FORMATO']->MONEDA; ?></strong> Fecha y hora: <strong><?php echo $datos['FORMATO']->FECHA_REGISTRO; ?></strong>
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php //echo '<pre>'; print_r($datos); ?>

	</textarea>
    <script>
            CKEDITOR.replace('Editor');
    </script>
</body>
</html>