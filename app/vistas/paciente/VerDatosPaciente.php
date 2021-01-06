<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2"><?php echo $datos->PAC_NOMBRE. ' ' .$datos->PAC_PATERNO. ' ' .$datos->PAC_MATERNO; ?></h1>
</div>

Fecha de nacimiento: <?php echo $datos->PAC_FNACIMIENTO; ?><br>
Sexo: <?php echo $datos->SEX_MAY; ?><br>
Nacionalidad: <?php echo $datos->NAC_MAY; ?><br>
Lugar de nacimiento: <?php echo $datos->ENF_MAY; ?><br>
<p><b>Registrado por:</b></p>
<?php echo $datos->USU_NOMBRE. ' ' .$datos->USU_PATERNO. ' ' .$datos->USU_MATERNO; ?><br>
Fecha: <?php echo $datos->FECHA_REGISTRO; ?><br>
	