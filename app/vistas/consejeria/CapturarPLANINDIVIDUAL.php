<div class="form-row">
    <div class="form-group col-md-6">
      <label>Reporte de valoración que se tomará en cuenta:</label><br>
      <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="<?php echo $datos->RVA_ID; ?>" type="radio" name="RVA_ID" checked required>Fecha: <?php echo $datos->FECHA_REGISTRO; ?>
    		</label>
  	  </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
      <label>Recomendaciones realizadas por el psiquiatra:</label><br>
      <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="0" type="radio" name="RECOMENDACIONPSIQ" checked required> Ninguna
    		</label>
  	  </div>
  	  <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="1" type="radio" name="RECOMENDACIONPSIQ" required> Participación limitada en actividades de grupo
    		</label>
  	  </div>
  	  <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="2" type="radio" name="RECOMENDACIONPSIQ" required> Ninguna participación en actividades grupales hasta nuevo aviso (se diseña el plan pero se contemplan actividades grupales hasta que el psiquiatra recomiende)
    		</label>
  	  </div>
    </div>
</div>    
<div class="form-row">
    <div class="form-group col-md-12">
      <label>Etapa en la que inicia el proceso de tratamiento: (Recomendación según el modelo y las instrucciones del equipo)</label><br>
      <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="1" type="radio" name="ETAPA" checked required> Adaptación
    		</label>
  	  </div>
  	  <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="2" type="radio" name="ETAPA" required> Identificación
    		</label>
  	  </div>
  	  <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="3" type="radio" name="ETAPA" required> Elaboración
    		</label>
  	  </div>
  	  <div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" value="4" type="radio" name="ETAPA" required> Consolidación
    		</label>
  	  </div>
    </div>
</div>
<div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Pregunte al paciente 3 metas que desee lograr al concluir el proceso de tratamiento en las áreas propuestas.</a>
                        </h6>
                    </div>
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">  
                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-left">#</th>
                                                <th scope="col" class="text-center">Meta</th>
                                                <th scope="col" class="text-center">Área de vida</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1</td>
                                                <td class="text-left">
                                                  <input class="form-control" type="text" maxlength="255" name="META1" required>
                                                </td>
                                                <td class="text-left">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA1" id="AREAVIDA1" value="1" checked required> Consumo de drogas o alcohol
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">2</td>
                                                <td class="text-left">
                                                  <input class="form-control" type="text" maxlength="255" name="META2" required>
                                                </td>
                                                <td class="text-left">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA2" id="AREAVIDA2" value="2" required> Escuela
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA2" id="AREAVIDA2" value="3" checked required> Trabajo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA2" id="AREAVIDA2" value="4" required> Relaciones familiares o de pareja
                                                        </label>
                                                    </div>
                                                   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">3</td>
                                                <td class="text-left">
                                                  <input class="form-control" type="text" maxlength="255" name="META3" required>
                                                </td>
                                                <td class="text-left">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA3" id="AREAVIDA3" value="2" required> Escuela
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA3" id="AREAVIDA3" value="3" required> Trabajo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AREAVIDA3" id="AREAVIDA3" value="4" checked required> Relaciones familiares o de pareja
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <br>
                                    <div class="card">
                                        <div class="card-body">                   
                                            <p class="text-left">Las metas son el resultado final (regularmente a largo plazo) que se desea alcanzar; deben ser alcanzables y claras.</p>
                                            <p class="text-left">Ejemplos:</p>
                                            <p class="text-left">
                                              Consumo:
                                              <br>"Mantener mi abstinencia al terminar el proceso"
                                              <br>"Lograr la sobriedad"
                                              <br>"Concluir el tratamiento y no consumir"
                                            </p>
                                            <p class="text-left">
                                              Escuela:
                                              <br>"Concluir mis estudios de ..."
                                              <br>"Entrar a estudiar a ..."
                                            </p>
                                            <p class="text-left">
                                              Trabajo:
                                              <br>"Encontrar un empleo en ..."
                                              <br>"Trabajar en ..."
                                              <br>"Poner me negocio de..."
                                            </p>
                                            <p class="text-left">
                                              Familia:
                                              <br>"Recuperar el contacto con mi familia"
                                              <br>"Recuperar a mis hijos"
                                              <br>"Recuperar la confianza de mi pareja"
                                            </p>
                                            <p class="text-left">
                                              Tal vez el paciente desee otras metas como "Mejorar su salud física", "Comprar un auto", "Rentar un departamento", "Ganar dinero", sin embargo para lograr cualquier meta primero se tiene que lograr y sostener la sobriedad. Se debe de motivar al paciente a que establezca metas alcanzables en 2 áreas además del consumo.
                                            </p>
                                            <p class="text-left">
                                              En cuanto al resto de áreas de vida se tomará en cuenta el Cuestionario de "Satisfacción de Vida" para el trabajo en cada área en la que el paciente se sienta más insatisfecho.
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>
<hr>                
<div class="form-row">
	<div class="form-group col-md-12">
	  <label>Observaciones generales para el desarrollo del plan:</label>
	  <textarea class="form-control" placeholder="Máximo 255 caracteres" maxlength="255" rows="3" name="OBSERVACIONES" required></textarea>
	</div>
</div>
<div class="row">
		<div class="col-md-12 text-center">
		    <br>
		    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
		</div>
	</div>
</form>