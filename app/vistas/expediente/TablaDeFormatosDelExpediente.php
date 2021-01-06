<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="card mt-3">
	<div class="card-body">
<h2>Lista de formatos disponibles</h2>
<table class="table table-striped table-sm" id="myTable">
	<thead>
	<tr>
		<th>#</th>
		<th>Nombre</th>
		<th>Captura en sistema</th>
		<th>Acción</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datos as $formato => $value) { ?>
	<?php foreach ($value['DATOS'] as $form) { ?>	
	<tr>
		<td>#</td>
		<td><?php echo $value['NOMBRE']; ?></td>
		<td><?php echo $form->FECHA_REGISTRO; ?></td>
		<td>
			<a target="_blank" role="button" class="btn btn-outline-info btn-sm" href="<?php echo $this->_config->obtener('app/webbase').$value["CONTROLADOR"].'/'.$form->{$value["CAMPOS"][0]}; ?>">Ver</a>
			
			<a role="button" class="btn btn-outline-warning btn-sm" href="<?php echo $this->_config->obtener('app/webbase').$value["EDITAR"].'/'.$form->{$value["CAMPOS"][0]}; ?>">Editar</a> 
		</td>
	</tr>
	<?php } ?>
	<?php } ?>
	</tbody>
</table>
</div>
</div>
