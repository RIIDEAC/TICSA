<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="card mt-3">
	<div class="card-body">
<h2>Lista de expedientes</h2>
<table class="table table-striped table-sm" id="myTable">
	<thead>
	<tr>
		<th>Exp.</th>
		<th>Sistema viejo</th>
		<th>Ingreso</th>
		<th>Tipo</th>
		<th>Nombre</th>
		<th>Edad</th>
		<th>Sexo</th>
		<th>Consejero(a)</th>
		<th>Psicólogo(a)</th>
		<th>Acción</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datos as $key => $value) { ?>
	<tr>
		<td><?php echo $value->NING_ID; ?></td>
		<td><?php echo $value->SIV_ID; ?></td>
		<td><?php echo $value->PAC_FINGRESO.' '.$value->PAC_HINGRESO; ?></td>
		<td><?php echo $value->TII_MAY; ?></td>
		<td><?php echo $value->PAC_NOMBRE . ' '. $value->PAC_PATERNO . ' ' . $value->PAC_MATERNO; ?></td>
		<td><?php echo $value->PAC_EDAD; ?></td>
		<td><?php echo $value->SEX_MAY; ?></td>
		<td><?php echo $value->CONSNOMBRE . ' '. $value->CONSPATERNO . ' ' . $value->CONSMATERNO; ?></td>
		<td><?php echo $value->PSINOMBRE . ' '. $value->PSIPATERNO . ' ' . $value->PSIMATERNO; ?></td>
		<td>
			<a role="button" class="btn btn-outline-info btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'VerDatosExpediente/'. $value->NING_ID; ?>">Ver</a> 
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
</div>
</div>