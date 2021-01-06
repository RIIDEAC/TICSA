<?php //echo '<pre>'; print_r($datos); ?>
<div class="card mt-3">
	<div class="card-body">
<h2>Lista de familiares</h2>
<table class="table table-striped table-sm" id="myTable">
	<thead>
	<tr>
		<th>Nombre de paciente</th>
		<th>Nombre de familiar</th>
		<th>Parentesco</th>
		<th>Dirección</th>
		<th>Teléfonos</th>
		<th>R.L.</th>
		<th>Acción</th>
	</tr>
</thead>
<tbody>
	<?php foreach ($datos as $key => $value) { ?>
	<tr>
		<td><?php echo $value->PAC_NOMBRE . ' '. $value->PAC_PATERNO . ' ' . $value->PAC_MATERNO; ?></td>
		<td><?php echo $value->FAM_NOMBRE . ' '. $value->FAM_PATERNO . ' ' . $value->FAM_MATERNO; ?></td>
		<td><?php echo $value->PAE_MIN; ?></td>
		<td><?php echo $value->FAM_CALLE.' '.$value->FAM_NEXTERIOR.' '.$value->FAM_NINTERIOR.' '.$value->d_tipo_asenta.' '.$value->d_asenta.' '.$value->D_mnpio.' '.$value->d_estado.' CP '.$value->d_codigo; ?></td>
		<td><?php echo $value->FAM_TELEFONOF.' '.$value->FAM_TELEFONOM; ?></td>
		<td><?php echo $value->RPR_MAY; ?></td>
		<td>
			<a role="button" class="btn btn-outline-warning btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'EditarDatosFamiliar/'. $value->FAM_ID; ?>">Editar</a>
		</td>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>
</div>