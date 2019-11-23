<?php //echo '<pre>'; print_r($datos); ?>
<div class="row">
	<div class="form-group col-md-12">
	  <label for="MED_ID">Medicamento</label>
	    <select data-live-search="true" id="MED_ID" name="MED_ID" class="form-control" required>
	      <?php foreach ($datos as $value) { ?>
	        <option value="<?php echo $value->MED_ID; ?>">
	        	<?php echo utf8_encode($value->DESCRIPCION_COMPLETA); ?>
	        </option>
	      <?php } ?>
	    </select>
	</div>
</div>