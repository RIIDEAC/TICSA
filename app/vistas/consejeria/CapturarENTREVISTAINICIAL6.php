<h1>Situación laboral - Parte 6</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
<div class="form-row">
<div class="form-group col-md-12">
  <label>44. En los últimos 12 meses, ¿cuántos días no trabajó como resultado del consumo de alcohol/drogas? (de 0 a 365 días)</label>
  <input class="form-control" type="number" min="0" max="365" name="NOTRABAJO" required>
</div>
<div class="form-group col-md-12">
  <label>45. En los últimos 12 meses, ¿cuántas veces perdió el empleo como resultado de consumir alcohol/drogas?</label>
  <input class="form-control" min="0" max="365" type="number" name="PERDIOEMPLEO" required>
</div>
</div>
<div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <input type="hidden" name="PARTE" value="6">
		    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>
