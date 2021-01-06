<div class="card mt-3">
	<div class="card-body">
<h2>Lista de aportaciones</h2>
<table class="table table-striped table-sm" id="Aportaciones">
	<thead>
	<tr>
		<th>#</th>
		<th>Aporta</th>
		<th>Tipo</th>
		<th>Moneda</th>
		<th>Cambio</th>
		<th>Cantidad</th>
		<th>Fecha</th>
		<th>Acción</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($datos->APORTACIONES as $value) { ?>
	<tr>
		<td>#</td>
		<td><?php echo $value->APORTA;  ?></td>
		<td><?php echo $value->TIA_MIN;  ?></td>
		<td><?php echo $value->TIM_MIN;  ?></td>
		<td><?php echo $value->TIPO_CAMBIO; ?></td>
		<td><?php echo $value->CANTIDAD;  ?></td>
		<td><?php echo $value->FECHA_REGISTRO;  ?></td>
		<td>
			<a role="button" class="btn btn-outline-info btn-sm" href="<?php echo $this->_config->obtener('app/webbase'); ?>VerAportacion/<?php echo $value->APO_ID; ?>">Imprimir</a>
			<a role="button" class="btn btn-outline-danger btn-sm" href="">Eliminar</a> 
		</td>
	</tr>
	<?php } ?>
	</tbody>
	<tfoot>
            <tr>
            	<th></th>
            	<th></th>
            	<th></th>
                <th>Total: </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
</table>
</div>
</div>
