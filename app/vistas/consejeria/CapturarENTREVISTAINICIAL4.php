<!--Situación social-familiar -->
<h1>Situación social-familiar - Parte 4</h1>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="FECHA_CAPTURA">Fecha de realización</label>
      <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
  </div>
</div>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label>23. ¿Quiénes integran su familia (con la que se tiene mayor contacto)?</label>
      <label class="form-check-label">¿Quién o quienes?</label>
      <p>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="INTEGRAPAREJA" type="checkbox" id="INTEGRAPAREJA" value="1">
        <label class="form-check-label" for="INTEGRAPAREJA">Pareja</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="INTEGRAHIJOS" type="checkbox" id="INTEGRAHIJOS" value="1">
        <label class="form-check-label" for="INTEGRAHIJOS">Hijos o hijas</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="INTEGRAPADRES" type="checkbox" id="INTEGRAPADRES" value="1">
        <label class="form-check-label" for="INTEGRAPADRES">Padres</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="INTEGRAFAMILIARES" type="checkbox" id="INTEGRAFAMILIARES" value="1">
        <label class="form-check-label" for="INTEGRAFAMILIARES">Otros familiares o amigos</label>
      </div>
  	  </p>
    </div>
   </div>

     <label>24. A continuación le voy a mencionar una serie de oraciones que se refieren a aspectos relacionados con su familia, indique qué tan de acuerdo está con cada una de estas:</label>
  
  		<table class="table">
  			<thead>
  				<tr>
  					<th></th>
  					<th>Totalmente de acuerdo</th>
  					<th>De acuerdo</th>
  					<th>Neutral</th>
  					<th>En desacuerdo</th>
  					<th>Totalmente en desacuerdo</th>
  				</tr>
  			</thead>
  			<tbody>
  				<tr>
  					<td>1. Los miembros de mi familia acostumbramos hacer cosas juntos</td>
  					<td><input type="radio" value="1" name="JUNTOS" required></td>
  					<td><input type="radio" value="2" name="JUNTOS" required></td>
  					<td><input type="radio" value="3" name="JUNTOS" required></td>
  					<td><input type="radio" value="4" name="JUNTOS" required></td>
  					<td><input type="radio" value="5" name="JUNTOS" required></td>
  				</tr>
  				<tr>
  					<td>2. En mi familia, nadie se preocupa por los sentimientos de los demás</td>
  					<td><input type="radio" value="1" name="SENTIMIENTOS" required></td>
  					<td><input type="radio" value="2" name="SENTIMIENTOS" required></td>
  					<td><input type="radio" value="3" name="SENTIMIENTOS" required></td>
  					<td><input type="radio" value="4" name="SENTIMIENTOS" required></td>
  					<td><input type="radio" value="5" name="SENTIMIENTOS" required></td>
  				</tr>
  				<tr>
  					<td>3. Mi familia es cálida y me brinda apoyo</td>
  					<td><input type="radio" value="1" name="APOYO" required></td>
  					<td><input type="radio" value="2" name="APOYO" required></td>
  					<td><input type="radio" value="3" name="APOYO" required></td>
  					<td><input type="radio" value="4" name="APOYO" required></td>
  					<td><input type="radio" value="5" name="APOYO" required></td>
  				</tr>
  				<tr>
  					<td>4. En mi familia es importante para todos expresar nuestras opiniones</td>
  					<td><input type="radio" value="1" name="OPINION" required></td>
  					<td><input type="radio" value="2" name="OPINION" required></td>
  					<td><input type="radio" value="3" name="OPINION" required></td>
  					<td><input type="radio" value="4" name="OPINION" required></td>
  					<td><input type="radio" value="5" name="OPINION" required></td>
  				</tr>
  				<tr>
  					<td>5. El ambiente en mi familia usualmente es desagradable</td>
  					<td><input type="radio" value="1" name="DESAGRADABLE" required></td>
  					<td><input type="radio" value="2" name="DESAGRADABLE" required></td>
  					<td><input type="radio" value="3" name="DESAGRADABLE" required></td>
  					<td><input type="radio" value="4" name="DESAGRADABLE" required></td>
  					<td><input type="radio" value="5" name="DESAGRADABLE" required></td>
  				</tr>
  				<tr>
  					<td>6. Mi familia acostumbra hacer actividades en conjunto</td>
  					<td><input type="radio" value="1" name="ACTIVIDADES" required></td>
  					<td><input type="radio" value="2" name="ACTIVIDADES" required></td>
  					<td><input type="radio" value="3" name="ACTIVIDADES" required></td>
  					<td><input type="radio" value="4" name="ACTIVIDADES" required></td>
  					<td><input type="radio" value="5" name="ACTIVIDADES" required></td>
  				</tr>
  				<tr>
  					<td>7. Mi familia me escucha</td>
  					<td><input type="radio" value="1" name="ESCUCHA" required></td>
  					<td><input type="radio" value="2" name="ESCUCHA" required></td>
  					<td><input type="radio" value="3" name="ESCUCHA" required></td>
  					<td><input type="radio" value="4" name="ESCUCHA" required></td>
  					<td><input type="radio" value="5" name="ESCUCHA" required></td>
  				</tr>
  				<tr>
  					<td>8. Cuando tengo algún problema no se lo platico a mi familia</td>
  					<td><input type="radio" value="1" name="PROBLEMA" required></td>
  					<td><input type="radio" value="2" name="PROBLEMA" required></td>
  					<td><input type="radio" value="3" name="PROBLEMA" required></td>
  					<td><input type="radio" value="4" name="PROBLEMA" required></td>
  					<td><input type="radio" value="5" name="PROBLEMA" required></td>
  				</tr>
  				<tr>
  					<td>9. En mi familia expresamos abiertamente nuestro cariño</td>
  					<td><input type="radio" value="1" name="EXPRESA" required></td>
  					<td><input type="radio" value="2" name="EXPRESA" required></td>
  					<td><input type="radio" value="3" name="EXPRESA" required></td>
  					<td><input type="radio" value="4" name="EXPRESA" required></td>
  					<td><input type="radio" value="5" name="EXPRESA" required></td>
  				</tr>
  				<tr>
  					<td>10. Los conflictos en mi familia nunca se resuelven</td>
  					<td><input type="radio" value="1" name="RESUELVEN" required></td>
  					<td><input type="radio" value="2" name="RESUELVEN" required></td>
  					<td><input type="radio" value="3" name="RESUELVEN" required></td>
  					<td><input type="radio" value="4" name="RESUELVEN" required></td>
  					<td><input type="radio" value="5" name="RESUELVEN" required></td>
  				</tr>
  			</tbody>
  		</table>


  	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label>25. En los últimos 12 meses ¿ha tenido algún conflicto familiar grave?</label><br>
	       <div class="form-check form-check-inline">
	  		<label class="form-check-label">
	    		<input class="form-check-input" value="1" type="radio" name="CONFLICTOGRAVE" > Sí
	  		</label>
		  </div>
		   <div class="form-check form-check-inline">
	  		<label class="form-check-label">
	    		<input class="form-check-input" value="2" type="radio" name="CONFLICTOGRAVE" checked> No
	  		</label>
		  </div>
	    </div>

        <div class="form-group col-md-6">
	      <label>¿Cuál?</label><br>
	       <textarea name="CONFLICTOCUAL" placeholder="En su caso escriba no aplica" maxlength="255" class="form-control">No aplica</textarea>
	    </div>
	  </div>

	   <label>26. ¿Alguna de las personas que se enlistan a continuación ha consumido alcohol/drogas?</label>
  
  		<table class="table">
  			<thead>
  				<tr align="center">
  					<th></th>
  					<th>Ha consumido</th>
  					<th>Tipo de sustancia</th>
  					<th>¿El consumo de esa sustancia le ha causado problemas?¿Cuál/es?</th>
  				</tr>
  			</thead>
  			<tbody>
  				<tr>
  					<td>1. Papá</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="CONSUMOPAPA" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="CONSUMOPAPA" required checked> No
					  		</label>
						</div>
  					</td>
  					<td>
  						<div class="form-group col-md-12">
					      <div class="form-check">
					        <input class="form-check-input" name="ALCOHOLPAPA" type="checkbox" id="ALCOHOLPAPA" value="1">
					        <label class="form-check-label" for="ALCOHOLPAPA">Alcohol</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="MARIHUANAPAPA" type="checkbox" id="MARIHUANAPAPA" value="1">
					        <label class="form-check-label" for="MARIHUANAPAPA">Marihuana</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="COCAINAPAPA" type="checkbox" id="COCAINAPAPA" value="1">
					        <label class="form-check-label" for="COCAINAPAPA">Cocaína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="HEROINAPAPA" type="checkbox" id="HEROINAPAPA" value="1">
					        <label class="form-check-label" for="HEROINAPAPA">Heroína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="METANFETAMINAPAPA" type="checkbox" id="METANFETAMINAPAPA" value="1">
					        <label class="form-check-label" for="METANFETAMINAPAPA">Metanfetaminas/Anfetaminas</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ALUCINOGENOSPAPA" type="checkbox" id="ALUCINOGENOSPAPA" value="1">
					        <label class="form-check-label" for="ALUCINOGENOSPAPA">Alucinogenos</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="INHALABLESPAPA" type="checkbox" id="INHALABLESPAPA" value="1">
					        <label class="form-check-label" for="INHALABLESPAPA">Inhalables</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="SEDANTESPAPA" type="checkbox" id="SEDANTESPAPA" value="1">
					        <label class="form-check-label" for="SEDANTESPAPA">Medicamentos sedantes</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ESTIMULANTESPAPA" type="checkbox" id="ESTIMULANTESPAPA" value="1">
					        <label class="form-check-label" for="ESTIMULANTESPAPA">Medicamenos estimulantes</label>
					      </div>
					  	</div>
  					</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="PROBLEMASPAPA" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="PROBLEMASPAPA" required checked> No
					  		</label>
						</div>
						<p>
  						<input type="text" maxlength="255" class="form-control" name="CUALESPAPA">
  						</p>
  					</td>
  				</tr>
  				<tr>
  					<td>2. Mamá</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="CONSUMOMAMA" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="CONSUMOMAMA" required checked> No
					  		</label>
						</div>
  					</td>
  					<td>
  						<div class="form-group col-md-12">
					      <div class="form-check">
					        <input class="form-check-input" name="ALCOHOLMAMA" type="checkbox" id="ALCOHOLMAMA" value="1">
					        <label class="form-check-label" for="ALCOHOLMAMA">Alcohol</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="MARIHUANAMAMA" type="checkbox" id="MARIHUANAMAMA" value="1">
					        <label class="form-check-label" for="MARIHUANAMAMA">Marihuana</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="COCAINAMAMA" type="checkbox" id="COCAINAMAMA" value="1">
					        <label class="form-check-label" for="COCAINAMAMA">Cocaína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="HEROINAMAMA" type="checkbox" id="HEROINAMAMA" value="1">
					        <label class="form-check-label" for="HEROINAMAMA">Heroína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="METANFETAMINAMAMA" type="checkbox" id="METANFETAMINAMAMA" value="1">
					        <label class="form-check-label" for="METANFETAMINAMAMA">Metanfetaminas/Anfetaminas</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ALUCINOGENOSMAMA" type="checkbox" id="ALUCINOGENOSMAMA" value="1">
					        <label class="form-check-label" for="ALUCINOGENOSMAMA">Alucinogenos</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="INHALABLESMAMA" type="checkbox" id="INHALABLESMAMA" value="1">
					        <label class="form-check-label" for="INHALABLESMAMA">Inhalables</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="SEDANTESMAMA" type="checkbox" id="SEDANTESMAMA" value="1">
					        <label class="form-check-label" for="SEDANTESMAMA">Medicamentos sedantes</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ESTIMULANTESMAMA" type="checkbox" id="ESTIMULANTESMAMA" value="1">
					        <label class="form-check-label" for="ESTIMULANTESMAMA">Medicamenos estimulantes</label>
					      </div>
					  	</div>
  					</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="PROBLEMASMAMA" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="PROBLEMASMAMA" required checked> No
					  		</label>
						</div>
						<p>
  						<input type="text" maxlength="255" class="form-control" name="CUALESMAMA">
  						</p>
  					</td>
  				</tr>
  				<tr>
  					<td>3. Hermano (a)</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="CONSUMOHERMANO" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="CONSUMOHERMANO" required checked> No
					  		</label>
						</div>
  					</td>
  					<td>
  						<div class="form-group col-md-12">
					      <div class="form-check">
					        <input class="form-check-input" name="ALCOHOLHERMANO" type="checkbox" id="ALCOHOLHERMANO" value="1">
					        <label class="form-check-label" for="ALCOHOLHERMANO">Alcohol</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="MARIHUANAHERMANO" type="checkbox" id="MARIHUANAHERMANO" value="1">
					        <label class="form-check-label" for="MARIHUANAHERMANO">Marihuana</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="COCAINAHERMANO" type="checkbox" id="COCAINAHERMANO" value="1">
					        <label class="form-check-label" for="COCAINAHERMANO">Cocaína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="HEROINAHERMANO" type="checkbox" id="HEROINAHERMANO" value="1">
					        <label class="form-check-label" for="HEROINAHERMANO">Heroína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="METANFETAMINAHERMANO" type="checkbox" id="METANFETAMINAHERMANO" value="1">
					        <label class="form-check-label" for="METANFETAMINAHERMANO">Metanfetaminas/Anfetaminas</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ALUCINOGENOSHERMANO" type="checkbox" id="ALUCINOGENOSHERMANO" value="1">
					        <label class="form-check-label" for="ALUCINOGENOSHERMANO">Alucinogenos</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="INHALABLESHERMANO" type="checkbox" id="INHALABLESHERMANO" value="1">
					        <label class="form-check-label" for="INHALABLESHERMANO">Inhalables</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="SEDANTESHERMANO" type="checkbox" id="SEDANTESHERMANO" value="1">
					        <label class="form-check-label" for="SEDANTESHERMANO">Medicamentos sedantes</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ESTIMULANTESHERMANO" type="checkbox" id="ESTIMULANTESHERMANO" value="1">
					        <label class="form-check-label" for="ESTIMULANTESHERMANO">Medicamenos estimulantes</label>
					      </div>
					  	</div>
  					</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="PROBLEMASHERMANO" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="PROBLEMASHERMANO" required checked> No
					  		</label>
						</div>
						<p>
  						<input type="text" maxlength="255" class="form-control" name="CUALESHERMANO">
  						</p>
  					</td>
  				</tr>
  				<tr>
  					<td>4. Amigo</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="CONSUMOAMIGO" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="CONSUMOAMIGO" required checked> No
					  		</label>
						</div>
  					</td>
  					<td>
  						<div class="form-group col-md-12">
					      <div class="form-check">
					        <input class="form-check-input" name="ALCOHOLAMIGO" type="checkbox" id="ALCOHOLAMIGO" value="1">
					        <label class="form-check-label" for="ALCOHOLAMIGO">Alcohol</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="MARIHUANAAMIGO" type="checkbox" id="MARIHUANAAMIGO" value="1">
					        <label class="form-check-label" for="MARIHUANAAMIGO">Marihuana</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="COCAINAAMIGO" type="checkbox" id="COCAINAAMIGO" value="1">
					        <label class="form-check-label" for="COCAINAAMIGO">Cocaína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="HEROINAAMIGO" type="checkbox" id="HEROINAAMIGO" value="1">
					        <label class="form-check-label" for="HEROINAAMIGO">Heroína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="METANFETAMINAAMIGO" type="checkbox" id="METANFETAMINAAMIGO" value="1">
					        <label class="form-check-label" for="METANFETAMINAAMIGO">Metanfetaminas/Anfetaminas</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ALUCINOGENOSAMIGO" type="checkbox" id="ALUCINOGENOSAMIGO" value="1">
					        <label class="form-check-label" for="ALUCINOGENOSAMIGO">Alucinogenos</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="INHALABLESAMIGO" type="checkbox" id="INHALABLESAMIGO" value="1">
					        <label class="form-check-label" for="INHALABLESAMIGO">Inhalables</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="SEDANTESAMIGO" type="checkbox" id="SEDANTESAMIGO" value="1">
					        <label class="form-check-label" for="SEDANTESAMIGO">Medicamentos sedantes</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ESTIMULANTESAMIGO" type="checkbox" id="ESTIMULANTESAMIGO" value="1">
					        <label class="form-check-label" for="ESTIMULANTESAMIGO">Medicamenos estimulantes</label>
					      </div>
					  	</div>
  					</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="PROBLEMASAMIGO" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="PROBLEMASAMIGO" required checked> No
					  		</label>
						</div>
						<p>
  						<input type="text" maxlength="255" class="form-control" name="CUALESAMIGO">
  						</p>
  					</td>
  				</tr>
  				<tr>
  					<td>5. Pareja</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="CONSUMOPAREJA" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="CONSUMOPAREJA" required checked> No
					  		</label>
						</div>
  					</td>
  					<td>
  						<div class="form-group col-md-12">
					      <div class="form-check">
					        <input class="form-check-input" name="ALCOHOLPAREJA" type="checkbox" id="ALCOHOLPAREJA" value="1">
					        <label class="form-check-label" for="ALCOHOLPAREJA">Alcohol</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="MARIHUANAPAREJA" type="checkbox" id="MARIHUANAPAREJA" value="1">
					        <label class="form-check-label" for="MARIHUANAPAREJA">Marihuana</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="COCAINAPAREJA" type="checkbox" id="COCAINAPAREJA" value="1">
					        <label class="form-check-label" for="COCAINAPAREJA">Cocaína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="HEROINAPAREJA" type="checkbox" id="HEROINAPAREJA" value="1">
					        <label class="form-check-label" for="HEROINAPAREJA">Heroína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="METANFETAMINAPAREJA" type="checkbox" id="METANFETAMINAPAREJA" value="1">
					        <label class="form-check-label" for="METANFETAMINAPAREJA">Metanfetaminas/Anfetaminas</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ALUCINOGENOSPAREJA" type="checkbox" id="ALUCINOGENOSPAREJA" value="1">
					        <label class="form-check-label" for="ALUCINOGENOSPAREJA">Alucinogenos</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="INHALABLESPAREJA" type="checkbox" id="INHALABLESPAREJA" value="1">
					        <label class="form-check-label" for="INHALABLESPAREJA">Inhalables</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="SEDANTESPAREJA" type="checkbox" id="SEDANTESPAREJA" value="1">
					        <label class="form-check-label" for="SEDANTESPAREJA">Medicamentos sedantes</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ESTIMULANTESPAREJA" type="checkbox" id="ESTIMULANTESPAREJA" value="1">
					        <label class="form-check-label" for="ESTIMULANTESPAREJA">Medicamenos estimulantes</label>
					      </div>
					  	</div>
  					</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="PROBLEMASPAREJA" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="PROBLEMASPAREJA" required checked> No
					  		</label>
						</div>
						<p>
  						<input type="text" maxlength="255" class="form-control" name="CUALESPAREJA">
  						</p>
  					</td>
  				</tr>
  				<tr>
  					<td>6. Algún familiar que viva con usted</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="CONSUMOALGUIEN" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="CONSUMOALGUIEN" required checked> No
					  		</label>
						</div>
  					</td>
  					<td>
  						<div class="form-group col-md-12">
					      <div class="form-check">
					        <input class="form-check-input" name="ALCOHOLALGUIEN" type="checkbox" id="ALCOHOLALGUIEN" value="1">
					        <label class="form-check-label" for="ALCOHOLALGUIEN">Alcohol</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="MARIHUANAALGUIEN" type="checkbox" id="MARIHUANAALGUIEN" value="1">
					        <label class="form-check-label" for="MARIHUANAALGUIEN">Marihuana</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="COCAINAALGUIEN" type="checkbox" id="COCAINAALGUIEN" value="1">
					        <label class="form-check-label" for="COCAINAALGUIEN">Cocaína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="HEROINAALGUIEN" type="checkbox" id="HEROINAALGUIEN" value="1">
					        <label class="form-check-label" for="HEROINAALGUIEN">Heroína</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="METANFETAMINAALGUIEN" type="checkbox" id="METANFETAMINAALGUIEN" value="1">
					        <label class="form-check-label" for="METANFETAMINAALGUIEN">Metanfetaminas/Anfetaminas</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ALUCINOGENOSALGUIEN" type="checkbox" id="ALUCINOGENOSALGUIEN" value="1">
					        <label class="form-check-label" for="ALUCINOGENOSALGUIEN">Alucinogenos</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="INHALABLESALGUIEN" type="checkbox" id="INHALABLESALGUIEN" value="1">
					        <label class="form-check-label" for="INHALABLESALGUIEN">Inhalables</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="SEDANTESALGUIEN" type="checkbox" id="SEDANTESALGUIEN" value="1">
					        <label class="form-check-label" for="SEDANTESALGUIEN">Medicamentos sedantes</label>
					      </div>
					      <div class="form-check">
					        <input class="form-check-input" name="ESTIMULANTESALGUIEN" type="checkbox" id="ESTIMULANTESALGUIEN" value="1">
					        <label class="form-check-label" for="ESTIMULANTESALGUIEN">Medicamenos estimulantes</label>
					      </div>
					  	</div>
  					</td>
  					<td>
  						<div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="1" type="radio" name="PROBLEMASALGUIEN" required> Sí
					  		</label>
						  </div>
						   <div class="form-check form-check-inline">
					  		<label class="form-check-label">
					    		<input class="form-check-input" value="2" type="radio" name="PROBLEMASALGUIEN" required checked> No
					  		</label>
						</div>
						<p>
  						<input type="text" maxlength="255" class="form-control" name="CUALESALGUIEN">
  						</p>
  					</td>
  				</tr>
  				
  			</tbody>
  		</table>

  	<label>27. Cuándo está con amigos o familiares, ¿éstos lo presionan a consumir alcohol/drogas?</label>
     <div class="form-group">
     	<div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" value="1" type="radio" name="PRESIONCONSUMO" required> 1) No.
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" value="2" type="radio" name="PRESIONCONSUMO" required> 2) Sí, pero solo mi familia.
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" value="3" type="radio" name="PRESIONCONSUMO" required> 3) Sí, pero solo mis amigos.
  		</label>
	  </div>
	  <div class="form-check">
  		<label class="form-check-label">
    		<input class="form-check-input" value="4" type="radio" name="PRESIONCONSUMO" required> 4) Sí, tanto mis amigos como mi familia.
  		</label>
	  </div>
     </div>


	   <div class="form-row">
	    <div class="form-group col-md-12">
	      <label>28. Entre sus amigos o familiares, ¿quiénes lo ayudarían a cambiar su consumo de alcohol/ drogas?</label>
	      <input type="text" maxlength="255" class="form-control" name="AYUDA" required>
	    </div>
	  </div>
	  <div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <input type="hidden" name="PARTE" value="4">
		    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>
    