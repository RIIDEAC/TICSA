<?php //echo '<pre>'; print_r($datos); ?>
<div class="row">
	<div class="form-group col-md-12">
	  <label for="CIE_ID">Diagnóstico</label>
	    <select data-live-search="true" id="CIE_ID" name="CIE_ID" class="form-control" required>
	      <?php foreach ($datos as $value) { ?>
	        <option value="<?php echo $value->CIE_ID; ?>">
	        	<?php echo utf8_encode($value->CATALOG_KEY); ?> <?php echo utf8_encode($value->NOMBRE); ?>
	        </option>
	      <?php } ?>
	    </select>
	</div>
</div>