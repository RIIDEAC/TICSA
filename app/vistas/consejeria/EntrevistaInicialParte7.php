<h1>Salud mental y física - Parte 7</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
  		  <div class="form-row">
		    <div class="form-group col-md-12">
		      <label>46. Durante el último mes, ¿ha pensado que estaría mejor muerto, o ha deseado estar muerto?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="1" name="MUERTO" required checked> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="MUERTO" onchange="Enable(this.id,this.value)" type="radio" value="2" name="MUERTO" required > Sí
		  		</label>
			  </div>
		    </div>

		    <div class="form-group col-md-12">
		      <label>47. En caso afirmativo, durante el último mes, ¿ha intentado suicidarse? </label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="SUICIDIO" type="radio" value="1" name="SUICIDIO" required checked disabled> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="SUICIDIO1" type="radio" value="2" name="SUICIDIO" required disables> Sí
		  		</label>
			  </div>
		    </div>

		    <div class="form-group col-md-12">
		      <label>48. ¿Alguna vez en la vida ha intentado suicidarse?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="1" name="INTENTO" required checked> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="2" name="INTENTO" required> Sí
		  		</label>
			  </div>
		    </div>

		    <div class="form-group col-md-12">
		      <label>49. ¿Presenta alguna enfermedad o padecimiento físico y/o mental?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="1" name="ENFERMEDAD" required checked> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="ENFERMEDAD" onchange="Enable(this.id,this.value)" type="radio" value="2" name="ENFERMEDAD" required> Sí
		  		</label>
			  </div>
		    </div>

		    <div class="form-group col-md-12">
		      <label>50. ¿Esta enfermedad o padecimiento físico fue derivada del consumo de sustancias?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="DERIVADA" type="radio" value="1" name="DERIVADA" required checked disabled> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="DERIVADA1" type="radio" value="2" name="DERIVADA" required disabled> Sí
		  		</label>
			  </div>
		    </div>

		    <div class="form-group col-md-12">
		      <label>51. ¿Está siendo atendido por algún problema de salud físico o mental en la actualidad (incluyendo algún padecimiento psiquiátrico)?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="1" name="ATENDIDO" required checked> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="2" name="ATENDIDO" required> Sí
		  		</label>
			  </div>
		    </div>

		    <div class="form-group col-md-12">
		      <label>52. ¿Está tomando algún medicamento por prescripción médica o se está automedicando?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="1" name="MEDICAMENTO" required checked> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" id="MEDICAMENTO" onchange="Enable(this.id,this.value)" value="2" name="MEDICAMENTO" required> Sí
		  		</label>
			  </div>
		    </div>

		      <div class="form-group col-md-12">
		      <label>53. ¿Qué tipo de medicamento toma?, ¿cada cuánto? y ¿cuál es la razón?</label><br>
		      <textarea class="form-control" id="TIPOMEDICAMENTO" maxlength="255" name="TIPOMEDICAMENTO" disabled>No aplica</textarea>
		    </div>


		    <div class="form-group col-md-12">
		      <label>54. En los últimos 12 meses, ¿ha estado internado en un hospital? </label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" value="1" name="INTERNADO" required checked> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" type="radio" id="INTERNADO" onchange="Enable(this.id,this.value)" value="2" name="INTERNADO" required> Sí
		  		</label>
			  </div>
		    </div>

		     <div class="form-group col-md-12">
		      <label>¿Por qué?</label><br>
		      <textarea class="form-control" maxlength="255" id="PORQUEINTERNADO" name="PORQUEINTERNADO" disabled>No aplica</textarea>
		    </div>


		    <div class="form-group col-md-12">
		      <label>55. En caso afirmativo, ¿ha sido por problemas relacionados con el consumo de alcohol/drogas?</label><br>
		      <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="INTERNADOCONSUMO" type="radio" value="1" name="INTERNADOCONSUMO" required checked disabled> No
		  		</label>
			  </div>
			   <div class="form-check form-check-inline">
		  		<label class="form-check-label">
		    		<input class="form-check-input" id="INTERNADOCONSUMO1" type="radio" value="2" name="INTERNADOCONSUMO" required disabled> Sí
		  		</label>
			  </div>
		    </div>

		  </div>
<div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <input type="hidden" name="PARTE" value="7">
		    <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>
<script>
function Enable(id,value)
{
	if(id == 'MUERTO')
	{
		document.getElementById('SUICIDIO').disabled = false;
		document.getElementById('SUICIDIO1').disabled = false;
	}
	if(id == 'ENFERMEDAD')
	{	
		document.getElementById('DERIVADA').disabled = false;
		document.getElementById('DERIVADA1').disabled = false;
	}
	if(id == 'MEDICAMENTO')
	{
		document.getElementById('TIPOMEDICAMENTO').disabled = false;
		document.getElementById('TIPOMEDICAMENTO').value = '';
	}
	if(id == 'INTERNADO')
	{
		document.getElementById('PORQUEINTERNADO').disabled = false;
		document.getElementById('PORQUEINTERNADO').value = '';
		document.getElementById('INTERNADOCONSUMO').disabled = false;
		document.getElementById('INTERNADOCONSUMO1').disabled = false;
	}
}	
$(document).on('click','#ENVIAR',function(){
  $("form :input").prop("disabled", false);
});
</script>