<td><?php //echo '<pre>'; print_r($datos); ?></td>
<div class="card mt-3">
	<div class="card-body">
<h2>Lista de egresos</h2>
<table class="table table-striped table-sm" id="myTable">
	<thead>
	<tr>
		<th>Exp.</th>
		<th>Nombre</th>
		<th>Ingresó</th>
		<th>Egresó</th>
		<th>Tipo ingreso</th>
		<th>Tipo egreso</th>
		<th>Edad ingreso</th>
		<th>Edad egreso</th>
		<th>Días de tratamiento</th>
		<th>Acción</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datos as $key => $value) { ?>
	<tr>
		<td><?php echo $value->NING_ID; ?></td>
		<td><?php echo $value->PAC_NOMBRE . ' '. $value->PAC_PATERNO . ' ' . $value->PAC_MATERNO; ?></td>
		<td><?php echo $value->PAC_FINGRESO.' '.$value->PAC_HINGRESO; ?></td>
		<td><?php echo $value->PAC_FEGRESO.' '.$value->PAC_HEGRESO; ?></td>
		<td><?php echo $value->TII_MAY; ?></td>
		<td><?php echo $value->TIE_MIN; ?></td>
		<td><?php echo $value->PAC_EDAD; ?></td>
		<td><?php echo $value->EDAD_EGRE; ?></td>
		<td><?php echo $value->DIAS_TRATAMIENTO; ?></td>
		<td>
			<a role="button" class="btn btn-outline-info btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'VerDatosExpediente/'. $value->NING_ID; ?>">Ver</a> 
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
</div>
</div>