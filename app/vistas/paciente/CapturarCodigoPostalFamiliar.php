<div class="form-row"><div class="form-group col-md-12">
	<label for="FAM_CPOSTAL">Código Postal</label>
      <select data-live-search="true" id="FAM_CPOSTAL" name="COP_ID" class="form-control" required>';
	<?php foreach ($datos as $key => $value)
	{
		echo '<option value="'. $value->COP_ID .'">CP:'. $value->d_codigo . ' ' .utf8_encode($value->d_tipo_asenta). ': ' . utf8_encode($value->d_asenta) . ' Municipio: ' . utf8_encode($value->D_mnpio) . ' Entidad: ' . utf8_encode($value->d_estado) . '</option>';
	}
	?>	
</select>
</div>
</div>