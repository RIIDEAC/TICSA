<h1>Administración del tiempo libre - Parte 5</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
<div class="form-row">
<div class="form-group col-md-12">
  <label>42. ¿Cuánto tiempo le dedica a consumir sustancias y qué actividades ha dejado de hacer por consumir?</label>
  <textarea class="form-control" maxlength="255" rows="3" name="TIEMPOCONSUMO" required></textarea>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
  <label>43. ¿Qué actividades de diversión o entretenimiento que usted realiza están relacionadas al consumo de alcohol/drogas?</label>
  <textarea class="form-control" maxlength="255" rows="3" name="ACTIVIDADES" required></textarea>
</div>
</div>
<div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <input type="hidden" name="PARTE" value="5">
		    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>
