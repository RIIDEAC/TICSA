<h1>Consumo de sustancias - Parte 2</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
<!-- CONSUMO DE SUSTANCIAS -->
 <label>1. Consumo durante el último año</label>
   <table class="table">
    <thead>
      <tr>
        <th style="vertical-align: top;text-align: center;">Tipo de sustancia</th>
        <th style="vertical-align: top;text-align: center;">Consumo</th>
        <th style="vertical-align: top;text-align: center;">Forma de consumo</th>
        <th style="vertical-align: top;text-align: center;">Frecuencia de días de consumo (Semanal)</th>
        <th style="vertical-align: top;text-align: center;">Cantidad consumida con más frecuencia (por ocasión)</th>
        <th style="vertical-align: top;text-align: center;">Edad de inicio del consumo (años)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Alcohol</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="ALCOHOL" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" id="ALCOHOL" value="1" onchange="Enable(this.id,this.value)" type="radio" name="ALCOHOL"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="ALCOHOLFORMA" checked> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="ALCOHOLFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="ALCOHOLFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="ALCOHOLFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="ALCOHOLFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="ALCOHOLFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="ALCOHOLFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="ALCOHOLFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="ALCOHOLFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="ALCOHOLFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="ALCOHOLFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="ALCOHOLFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="ALCOHOLCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="ALCOHOLEDAD" value="12" class="form-control"></td>  
      </tr>
      <tr>
        <td>Marihuana</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="MARIHUANA" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" id="MARIHUANA" type="radio" onchange="Enable(this.id,this.value)" name="MARIHUANA"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="MARIHUANAFORMA"> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="MARIHUANAFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="MARIHUANAFORMA" checked> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="MARIHUANAFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="MARIHUANAFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="MARIHUANAFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="MARIHUANAFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="MARIHUANAFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="MARIHUANAFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="MARIHUANAFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="MARIHUANAFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="MARIHUANAFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="MARIHUANACANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="MARIHUANAEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Cocaina</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="COCAINA" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" id="COCAINA" type="radio" onchange="Enable(this.id,this.value)" name="COCAINA"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="COCAINAFORMA"> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="COCAINAFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="COCAINAFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="COCAINAFORMA" checked> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="COCAINAFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="COCAINAFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="COCAINAFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="COCAINAFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="COCAINAFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="COCAINAFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="COCAINAFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="COCAINAFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="COCAINACANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="COCAINAEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Heroína</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="HEROINA" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" id="HEROINA" type="radio" onchange="Enable(this.id,this.value)" name="HEROINA"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="HEROINAFORMA"> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="HEROINAFORMA" checked> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="HEROINAFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="HEROINAFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="HEROINAFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="HEROINAFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="HEROINAFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="HEROINAFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="HEROINAFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="HEROINAFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="HEROINAFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="HEROINAFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="HEROINACANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="HEROINAEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Metanfetaminas/Anfetaminas</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="METANFETAMINA" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" id="METANFETAMINA" type="radio" onchange="Enable(this.id,this.value)" name="METANFETAMINA"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="METANFETAMINAFORMA"> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="METANFETAMINAFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="METANFETAMINAFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="METANFETAMINAFORMA" checked> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="METANFETAMINAFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="METANFETAMINAFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="METANFETAMINAFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="METANFETAMINAFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="METANFETAMINAFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="METANFETAMINAFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="METANFETAMINAFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="METANFETAMINAFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="METANFETAMINACANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="METANFETAMINAEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Inhalables</td>
       	<td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="INHALABLES" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" id="INHALABLES" onchange="Enable(this.id,this.value)" name="INHALABLES"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="INHALABLESFORMA"> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="INHALABLESFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="INHALABLESFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="INHALABLESFORMA" checked> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="INHALABLESFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="INHALABLESFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="INHALABLESFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="INHALABLESFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="INHALABLESFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="INHALABLESFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="INHALABLESFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="INHALABLESFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="INHALABLESCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="INHALABLESEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Alucinógenos</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="ALUCINOGENOS" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" id="ALUCINOGENOS" onchange="Enable(this.id,this.value)" name="ALUCINOGENOS"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="ALUCINOGENOSFORMA" checked> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="ALUCINOGENOSFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="ALUCINOGENOSFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="ALUCINOGENOSFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="ALUCINOGENOSFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="ALUCINOGENOSFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="ALUCINOGENOSFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="ALUCINOGENOSFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="ALUCINOGENOSFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="ALUCINOGENOSFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="ALUCINOGENOSFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="ALUCINOGENOSFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="ALUCINOGENOSCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="ALUCINOGENOSEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Drogas de diseño</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="DISENO" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" id="DISENO" onchange="Enable(this.id,this.value)" name="DISENO"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="DISENOFORMA" checked> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="DISENOFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="DISENOFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="DISENOFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="DISENOFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="DISENOFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="DISENOFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="DISENOFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="DISENOFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="DISENOFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="DISENOFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="DISENOFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="DISENOCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="DISENOEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Medicamentos estimulantes</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="ESTIMULANTES" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" id="ESTIMULANTES" onchange="Enable(this.id,this.value)" name="ESTIMULANTES"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="ESTIMULANTESFORMA" checked> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="ESTIMULANTESFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="ESTIMULANTESFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="ESTIMULANTESFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="ESTIMULANTESFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="ESTIMULANTESFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="ESTIMULANTESFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="ESTIMULANTESFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="ESTIMULANTESFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="ESTIMULANTESFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="ESTIMULANTESFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="ESTIMULANTESFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="ESTIMULANTESCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="ESTIMULANTESEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Medicamentos depresores</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="DEPRESORES" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" id="DEPRESORES" onchange="Enable(this.id,this.value)" name="DEPRESORES"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="DEPRESORESFORMA" checked> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="DEPRESORESFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="DEPRESORESFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="DEPRESORESFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="DEPRESORESFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="DEPRESORESFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="DEPRESORESFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="DEPRESORESFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="DEPRESORESFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="DEPRESORESFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="DEPRESORESFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="DEPRESORESFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="DEPRESORESCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="DEPRESORESEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Tabaco</td>
       <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="TABACO" checked> Nunca he fumado
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" id="TABACO" onchange="Enable(this.id,this.value)" name="TABACO"> Actualmente fumo
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="TABACO"> Ex fumador (menos de 1 año)
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="TABACO"> Ex fumador (más de 1 año)
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="TABACOFORMA"> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="TABACOFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="TABACOFORMA" checked> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="TABACOFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="TABACOFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="TABACOFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="TABACOFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="TABACOFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="TABACOFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="TABACOFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="TABACOFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="TABACOFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="TABACOCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="TABACOEDAD" value="12" class="form-control"></td>
      </tr>
      <tr>
        <td>Otros</td>
        <td>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="0" type="radio" name="OTROS" checked> No
	    		</label>
  	  		</div>
        	<div class="form-check form-check-inline">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" id="OTROS" onchange="Enable(this.id,this.value)" name="OTROS"> Sí
	   		 	</label>
  	  		</div>
  		</td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="OTROSFORMA" checked> Ingerida
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="OTROSFORMA"> Inyectada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="OTROSFORMA"> Fumada
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="OTROSFORMA"> Inhalada
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="OTROSFORMA"> Otras
	   		 	</label>
  	  		</div>
        </td>
        <td>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="1" type="radio" name="OTROSFRECUENCIA" checked> 1 día
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="2" type="radio" name="OTROSFRECUENCIA"> 2 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="3" type="radio" name="OTROSFRECUENCIA"> 3 días
	    		</label>
  	  		</div>
        	<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="4" type="radio" name="OTROSFRECUENCIA"> 4 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="5" type="radio" name="OTROSFRECUENCIA"> 5 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="6" type="radio" name="OTROSFRECUENCIA"> 6 días
	   		 	</label>
  	  		</div>
  	  		<div class="form-check form-check">
	    		<label class="form-check-label">
	      		<input class="form-check-input" value="7" type="radio" name="OTROSFRECUENCIA"> 7 días
	   		 	</label>
  	  		</div>
        </td>
        <td><input type="number" min="0" max="50" name="OTROSCANTIDAD" value="0" class="form-control"></td>
        <td><input type="number" min="7" max="50" name="OTROSEDAD" value="12" class="form-control"></td>
      </tr>
    </tbody>
  </table>

 <div class="form-row">
   
    <div class="form-group col-md-12">
      <label>2. Principal sustancia de consumo (marque solo una):</label><br>
      <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="ALCOHOLPRINCIPAL" class="form-check-input" type="radio" value="1" name="PRINCIPALCONSUMO" required disabled>1) Alcohol
  		</label>
	  </div>
      <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="MARIHUANAPRINCIPAL" class="form-check-input" type="radio" value="2" name="PRINCIPALCONSUMO"  required disabled>2) Marihuana
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="COCAINAPRINCIPAL" class="form-check-input" type="radio" value="3" name="PRINCIPALCONSUMO"  required disabled>3) Cocaína
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="HEROINAPRINCIPAL" class="form-check-input" type="radio" value="4" name="PRINCIPALCONSUMO"  required disabled>4) Heroína
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="METANFETAMINAPRINCIPAL" class="form-check-input" type="radio" value="5" name="PRINCIPALCONSUMO"  required disabled>5) Metanfetaminas/Anfetaminas
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="INHALABLESPRINCIPAL" class="form-check-input" type="radio" value="6" name="PRINCIPALCONSUMO"  required disabled>6) Inhalables
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="ALUCINOGENOSPRINCIPAL" class="form-check-input" type="radio" value="7" name="PRINCIPALCONSUMO"  required disabled>7) Alucinogenos
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="DISENOPRINCIPAL" class="form-check-input" type="radio" value="8" name="PRINCIPALCONSUMO"  required disabled>8) Drogas de diseño
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="ESTIMULANTESPRINCIPAL" class="form-check-input" type="radio" value="9" name="PRINCIPALCONSUMO"  required disabled>9) Medicamentos estimulantes
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="DEPRESORESPRINCIPAL" class="form-check-input" type="radio" value="10" name="PRINCIPALCONSUMO"  required disabled>10) Medicamentos depresores
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="TABACOPRINCIPAL" class="form-check-input" type="radio" value="11" name="PRINCIPALCONSUMO"  required disabled>11) Tabaco
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input id="OTROSPRINCIPAL" class="form-check-input" type="radio" value="12" name="PRINCIPALCONSUMO"  required disabled>12) Otras
 		 </label>
	  </div>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label>3. En caso de consumo de alcohol, ¿qué tipo de bebida consume?</label><br>
      <div class="form-check form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="0" name="TIPOALCOHOL" required checked disabled> No aplica
  		</label>
	  </div>
      <div class="form-check form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" id="CERVEZA" type="radio" value="1" name="TIPOALCOHOL" required disabled>1) Cerveza
  		</label>
	  </div>
      <div class="form-check form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" id="VINO" type="radio" value="2" name="TIPOALCOHOL"  required disabled>2) Vino
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" id="PULQUE" type="radio" value="3" name="TIPOALCOHOL"  required disabled>3) Pulque
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" id="COOLERS" type="radio" value="4" name="TIPOALCOHOL"  required disabled>4) Coolers
 		 </label>
	  </div>
	  <div class="form-check form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" id="DESTILADO" type="radio" value="5" name="TIPOALCOHOL"  required disabled>5) Destilado
 		 </label>
	  </div>
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label>4. ¿Desde hace cuánto consume en forma excesiva alcohol/drogas? (años)</label>
      <input type="number" min="0" max="60" value="0" class="form-control" name="TIEMPOCONSUMO" required>
    </div>
    <div class="form-group col-md-3">
      <label>5. Normalmente consume:</label><br>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="SOLO" required>1) Solo
  		</label>
	  </div>

	  <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="SOLO" required checked>2) Acompañado
  		</label>
	  </div>
    </div>
      <div class="form-group col-md-3">
      <label>6. El lugar donde consume es:</label><br>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="LUGARCONSUMO" required>1) Público
  		</label>
	  </div>

	  <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="LUGARCONSUMO" required checked>2) Privado
  		</label>
	  </div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>7. ¿En qué lugares consume con más frecuencia?</label>
      <textarea class="form-control" rows="3" maxlength="255" name="LUGARESDECONSUMO" required></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>8. Una vez que empieza a consumir alcohol/drogas, ¿puede detener su consumo voluntariamente?</label>
      <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="1" name="DETENERCONSUMO" required>Sí
  		</label>
	  </div>

	  <div class="form-check form-check-inline">
  		<label class="form-check-label">
    		<input class="form-check-input" type="radio" value="2" name="DETENERCONSUMO" required checked>No
  		</label>
	  </div>
    </div>
  </div>

  <label>9. Mensualmente, ¿qué cantidad de dinero utiliza en comprar lo siguiente?</label>
  <div class="form-inline">

  <div class="form-group">
    <label>Alcohol:</label>
    <input type="number" min="0" class="form-control" value="0" name="DINEROALCOHOL" required>
  </div>
  <div class="form-group">
    <label>Tabaco:</label>
    <input type="number" min="0" class="form-control" value="0" name="DINEROTABACO" required>
  </div>
    <div class="form-group">
    <label>Drogas:</label>
    <input type="number" min="0" class="form-control" value="0" name="DINERODROGA" required>
  </div>

  </div>

  <br>
  <label>10. De las siguiente situaciones de la vida diaria, ¿cuáles son las que más lo llevan a consumir?Ordénelas del 1 al 8, de acuerdo al tipo de situación que con más frecuencia se ocasiona consumir, siendo 1 la más frecuente y 8 la menos frecuente</label>
  <table class="table">
    <thead>
      <tr>
        <th style="vertical-align: top;text-align: center;">Situación que <b>CON MÁS FRECUENCIA</b> le ocasiona consumir
        </th>
        <th style="vertical-align: top;text-align: center;">Numero (1 a 8)<br><div style="font-size:10px;text-align: center;">1 = Más frecuente<br>8 = Menos frecuente</div>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1. Emociones desagradables (triste, ansioso, preocupado, etc)</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="EMOCIONNEGATIVA" class="form-control"></td>
        
      </tr>
      <tr>
        <td>2. Por alguna enfermedad</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="ENFERMEDAD" class="form-control"></td>
        
      </tr>
      <tr>
        <td>3. Emociones agradables (feliz, contento, satisfecho,etc.)</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="EMOCIONPOSITIVA" class="form-control"></td>
        
      </tr>
      <tr>
        <td>4. Necesidad física (síndrome de abstinencia, que su cuerpo necesite la sustancia)</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="NECESIDAD" class="form-control"></td>
        
      </tr>
      <tr>
        <td>5. Probando autocontrol (ponerse a prueba, sentir que puede controlar y parar su consumo)</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="AUTOCONTROL" class="form-control"></td>
      </tr>
      <tr>
        <td>6. Conflictos con otros (pleitos o problemas con algunas personas)</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="CONFLICTOS" class="form-control"></td>
      </tr>
      <tr>
        <td>7. Momentos agradables con otros (disfrutar de la compañía de otras personas)</td>
       <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="AGRADABLES" class="form-control"></td>
      </tr>
      <tr>
        <td>8. Presión social (cuando otras personas lo invitan a consumir)</td>
        <td><input  maxlength="1" type="number" min="1" max="8" value="8" name="PRESION" class="form-control"></td>
      </tr>
      
    </tbody>
  </table>


  <label>11. De acuerdo con la siguiente escala, señale la opción que mejor describa su consumo de alcohol/drogas durante los últimos 12 meses (marque solo una opción)</label>

  <table class="table">
    <thead>
      <tr>
        <th style="vertical-align: top;text-align: center;">Tipo de problema</th>
        <th style="vertical-align: top;text-align: center;">Alcohol</div></th>
        <th style="vertical-align: top;text-align: center;">Drogas</div></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>1. Sin problema</strong></td>
        <td><input type="radio" value="1" name="PROBLEMAALCOHOL" class="form-control" required></td>
        <td><input type="radio" value="1" name="PROBLEMADROGAS" class="form-control" required></td>
      </tr>
      <tr>
        <td><strong>2. Un pequeño problema </strong>(estoy preocupado al respecto, pero no he tenido ninguna consecuencia negativa)</td>
        <td><input type="radio" value="2" name="PROBLEMAALCOHOL" class="form-control" required></td>
        <td><input type="radio" value="2" name="PROBLEMADROGAS" class="form-control" required></td>
      </tr>
      <tr>
        <td><strong>3. Un problema </strong>(he tenido algunas consecuencias negativas, pero ninguna que pueda considerarse seria)</td>
        <td><input type="radio" value="3" name="PROBLEMAALCOHOL" class="form-control" required></td>
        <td><input type="radio" value="3" name="PROBLEMADROGAS" class="form-control" required></td>
      </tr>
      <tr>
        <td><strong>4. Un gran problema </strong>(he tenido algunas consecuencias negativas serias)</td>
        <td><input type="radio" value="4" name="PROBLEMAALCOHOL" class="form-control" required checked></td>
        <td><input type="radio" value="4" name="PROBLEMADROGAS" class="form-control" required checked></td>
      </tr>
    </tbody>
  </table>
  </div>
  	<div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <input type="hidden" name="PARTE" value="2">
		    <button type="submit" id="ENVIAR" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>
<script>
function Enable(id,value)
{
  if(value == '1')
  {
      document.getElementById(id+'PRINCIPAL').disabled = false;
      if(id == 'ALCOHOL')
      {
		  var tipos = ['CERVEZA','VINO','PULQUE','COOLERS','DESTILADO'];
	      tipos.forEach(function(element)
	      {
	        document.getElementById(element).disabled = false;
	      });
      }
  }
  else
  {
      document.getElementById(id+'PRINCIPAL').disabled = true;
      document.getElementById(id+'PRINCIPAL').value = false;
  }
  
}
$(document).on('click','#ENVIAR',function()
{
  $("form :input").prop("disabled", false);
});
</script>