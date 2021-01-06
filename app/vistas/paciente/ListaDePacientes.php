<div class="card mt-3">
	<div class="card-body">
<h2>Lista de pacientes</h2>
<table class="table table-striped table-sm" id="myTable">
	<thead>
	<tr>
		<th>Nombre</th>
		<th>Fecha de registro</th>
		<th>Acción</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datos as $key => $value) { ?>
	<tr>
		<td><?php echo $value->PAC_NOMBRE . ' '. $value->PAC_PATERNO . ' ' . $value->PAC_MATERNO; ?></td>
		<td><?php echo $value->FECHA_REGISTRO; ?></td>
		<td>
			<a role="button" class="btn btn-outline-info btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'VerDatosPaciente/'. $value->PAC_ID; ?>">Ver</a> 
			<a role="button" class="btn btn-outline-warning btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'EditarDatosPaciente/'. $value->PAC_ID; ?>">Editar</a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
</div>
</div>
