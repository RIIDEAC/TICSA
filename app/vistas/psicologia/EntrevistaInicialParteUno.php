<h1>Sección 1</h1>
<div class="row">
  <div class="form-group col-md-12">
    <label>Motivo por el que acude a consulta explicitado por el paciente:</label>
    <textarea class="form-control" maxlength="255" rows="3" name="MOTIVO" required></textarea>
  </div>
  <div class="form-group col-md-12">
    <label>Circunstancias actuales especiales:</label>
    <textarea class="form-control" maxlength="255" rows="3" name="ESPECIALES" required></textarea>
  </div>
  <div class="form-group col-md-12">
    <label>Definición del problema (¿Qué, cómo, cuándo, dónde?) evolución explicitado por el paciente:</label>
    <textarea class="form-control" maxlength="255" rows="3" name="PROBLEMA" required></textarea>
  </div>
</div>
<div id="accordion" role="tablist">
  <div class="card">
                      <div class="card-header" role="tab" id="headingOne">
                          <h6 class="mb-0">
                              <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Motivación para el consumo</a>
                          </h6>
                      </div>
                      <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12">  
                                      <br>
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th scope="col" class="text-left"></th>
                                                  <th scope="col" class="text-center">No</th>
                                                  <th scope="col" class="text-center">Sí</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td class="text-left">1. Conflictos personales</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="CONFLICTOS" id="CONFLICTOS" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="CONFLICTOS" id="CONFLICTOS" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">2. Presión social</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="PRESION" id="PRESION" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="PRESION" id="PRESION" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">3. Ambientes propicios</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="AMBIENTES" id="AMBIENTES" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="AMBIENTES" id="AMBIENTES" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">4. Estados emocionales negativos</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="NEGATIVOS" id="NEGATIVOS" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="NEGATIVOS" id="NEGATIVOS" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">5. Estados físicos negativos</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="FISICOS" id="FISICOS" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="FISICOS" id="FISICOS" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">6. Deseos y tentaciones</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="DESEOS" id="DESEOS" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="DESEOS" id="DESEOS" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">7. Prueba de control personal</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="CONTROL" id="CONTROL" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="CONTROL" id="CONTROL" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td class="text-left">8. Estados emocionales positivos</td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="POSITIVOS" id="POSITIVOS" value="1" checked>
                                                          </label>
                                                      </div>
                                                  </td>
                                                  <td class="text-center">
                                                      <div class="form-check">
                                                          <label class="form-check-label">
                                                              <input class="form-check-input position-static" type="radio" name="POSITIVOS" id="POSITIVOS" value="2">
                                                          </label>
                                                      </div>                            
                                                  </td>
                                              </tr>  
                                          </tbody>
                                      </table> 
                                  </div> 
                              </div>   
                          </div>
                      </div>
  </div>

  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
        <h6 class="mb-0">
            <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">Acontecimientos significativos en la vida del paciente</a>
        </h6>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">  
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-left"></th>
                                <th scope="col" class="text-center">Antes</th>
                                <th scope="col" class="text-center">Durante</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">Pérdidas o duelos importantes</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="PERDIDAANTES" id="PERDIDA" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="PERDIDAANTES" id="PERDIDA" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="PERDIDADURANTE" id="PERDIDA" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="PERDIDADURANTE" id="PERDIDA" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Rupturas o abandonos</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="RUPTURAANTES" id="RUPTURA" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="RUPTURAANTES" id="RUPTURA" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="RUPTURADURANTE" id="RUPTURA" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="RUPTURADURANTE" id="RUPTURA" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Enfermedades importantes</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ENFERMEDADANTES" id="ENFERMEDAD" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ENFERMEDADANTES" id="ENFERMEDAD" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ENFERMEDADDURANTE" id="ENFERMEDAD" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ENFERMEDADDURANTE" id="ENFERMEDAD" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Intervenciones quirúrgicas o ingresos</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="QUIRURGICOANTES" id="QUIRURGICO" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="QUIRURGICOANTES" id="QUIRURGICO" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="QUIRURGICODURANTE" id="QUIRURGICO" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="QUIRURGICODURANTE" id="QUIRURGICO" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Hospitalarios con importante capacidad de influencia para el paciente</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="HOSPITALARIOSANTES" id="HOSPITALARIOS" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="HOSPITALARIOSANTES" id="HOSPITALARIOS" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="HOSPITALARIOSDURANTE" id="HOSPITALARIOS" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="HOSPITALARIOSDURANTE" id="HOSPITALARIOS" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Violencia familiar o maltrato</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="VIOLENCIAANTES" id="VIOLENCIA" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="VIOLENCIAANTES" id="VIOLENCIA" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="VIOLENCIADURANTE" id="VIOLENCIA" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="VIOLENCIADURANTE" id="VIOLENCIA" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Abuso sexual</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ABUSOANTES" id="ABUSO" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ABUSOANTES" id="ABUSO" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ABUSODURANTE" id="ABUSO" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="ABUSODURANTE" id="ABUSO" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">Desarraigo (por migración u otros motivos</td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="DESARRAIGOANTES" id="DESARRAIGO" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="DESARRAIGOANTES" id="DESARRAIGO" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="DESARRAIGODURANTE" id="DESARRAIGO" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="DESARRAIGODURANTE" id="DESARRAIGO" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left">
                                  <div class="form-group">
                                    <label id="OTRAS">Otras: (especifique)</label>
                                    <input type="text" class="form-control" name="OTRAS">
                                  </div>
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="OTRASANTES" id="OTRAS" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="OTRASANTES" id="OTRAS" value="1" required checked> No
                                        </label>
                                    </div>                                          
                                </td>
                                <td class="text-left">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="OTRASDURANTE" id="OTRAS" value="2" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input position-static" type="radio" name="OTRASDURANTE" id="OTRAS" value="1" required checked> No
                                        </label>
                                    </div>                             
                                </td>
                            </tr>  
                        </tbody>
                    </table> 
                </div> 
            </div>   
        </div>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-12 text-center">
        <br>
        <input type="hidden" name="PARTE" value="1">
        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
    </div>
  </div>
</form>