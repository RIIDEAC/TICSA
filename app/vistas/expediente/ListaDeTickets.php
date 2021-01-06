<div class="card mt-3">
	<div class="card-body">
<h2>Lista de reportes</h2>
<table class="table table-striped table-sm" id="myTable">
	<thead>
	<tr>
		<th>Tipo</th>
		<th>Estado</th>
		<th>Exp.</th>
		<th>Paciente</th>
		<th>Abierto</th>
		<th>Cerrado</th>
		<th>Observaciones</th>
		<th>Abierto por</th>
		<th>Acción</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datos as $key => $value) { ?>
	<tr>
		<td><?php echo $value->TIT_MIN; ?></td>
		<td><?php echo $value->ETI_MIN; ?></td>
		<td><?php echo $value->NING_ID; ?></td>
		<td><?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></td>
		<td><?php echo $value->FECHA_REGISTRO; ?></td>
		<td><?php echo $value->FECHA_CIERRE; ?></td>
		
		<td><?php echo $value->TIC_OBSERVACIONES; ?></td>
		<td><?php echo $value->USU_NOMBRE.' '.$value->USU_PATERNO.' '.$value->USU_MATERNO; ?></td>
		<td>
			<?php if ($value->ETI_ID == 1) { ?>
			<a role="button" class="btn btn-outline-warning btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'CerrarTicket/'. $value->TIC_ID; ?>">Cerrar</a>
			<?php }else{ ?>
			<a role="button" class="btn btn-outline-info btn-sm" href="<?php echo $this->_config->obtener('app/webbase').'AbrirTicket/'. $value->TIC_ID; ?>">Abrir</a>
			<?php } ?> 
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>
</div>
</div>