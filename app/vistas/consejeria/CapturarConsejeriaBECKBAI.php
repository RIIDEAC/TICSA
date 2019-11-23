<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">BECK:BAI</h1>
        <p class="text-justify"><strong>INSTRUCCIONES:</strong> En el recuadro de abajo hay una lista que contiene los síntomas más comunes de la ansiedad. Lea cuidadosamente cada afirmación e indique cuánto le ha molestado cada síntoma durante la última semana, inclusive hoy, marcando con una x según la intensidad de la molestia..</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarConsejeriaBECKBAI/">
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="NING_ID"><h3>Paciente</h3></label>
            <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
              <?php foreach ($datos as $value) { ?>
                <option value="<?php echo $value->NING_ID; ?>"><?php echo $value->PAC_PATERNO.' '.$value->PAC_MATERNO.' '.$value->PAC_NOMBRE; ?></option>
              <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-6">
                <label for="FECHA_CAPTURA"><h3>Fecha de realización</h3></label>
                <input type="date" name="FECHA_CAPTURA" value="<?php echo date("Y-m-d"); ?>" class="form-control" id="FECHA_CAPTURA" required>
        </div>
      </div>    
        <!--Pregunta 1-->
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Inventario de síntomas de ansiedad (BECK:BAI)</a>
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
                                                <th scope="col" class="text-left">Reactivo</th>
                                                <th scope="col" class="text-center">Poco o nada</th>
                                                <th scope="col" class="text-center">Más o menos</th>
                                                <th scope="col" class="text-center">Moderadamente</th>
                                                <th scope="col" class="text-center">Severamente</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1. Entumecimiento, hormigueo de una o varias partes de su cuerpo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="HORMIGUEO" id="HORMIGUEO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="HORMIGUEO" id="HORMIGUEO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="HORMIGUEO" id="HORMIGUEO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="HORMIGUEO" id="HORMIGUEO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">2. Sentir oleadas de calor (bochorno)</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="BOCHORNO" id="BOCHORNO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="BOCHORNO" id="BOCHORNO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="BOCHORNO" id="BOCHORNO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="BOCHORNO" id="BOCHORNO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">3. Debilitamiento de las piernas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PIERNAS" id="PIERNAS" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PIERNAS" id="PIERNAS" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PIERNAS" id="PIERNAS" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PIERNAS" id="PIERNAS" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">4. Dificultad para relajarse</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELAJARSE" id="RELAJARSE" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELAJARSE" id="RELAJARSE" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELAJARSE" id="RELAJARSE" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELAJARSE" id="RELAJARSE" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">5. Miedo a que pase lo peor</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">6. Sensación de mareo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MAREO" id="MAREO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MAREO" id="MAREO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MAREO" id="MAREO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MAREO" id="MAREO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">7. Opresión en el pecho o latidos acelerados</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="OPRESION" id="OPRESION" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="OPRESION" id="OPRESION" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="OPRESION" id="OPRESION" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="OPRESION" id="OPRESION" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">8. Inseguridad</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INSEGURIDAD" id="INSEGURIDAD" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INSEGURIDAD" id="INSEGURIDAD" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INSEGURIDAD" id="INSEGURIDAD" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INSEGURIDAD" id="INSEGURIDAD" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">9. Terror</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TERROR" id="TERROR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TERROR" id="TERROR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TERROR" id="TERROR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TERROR" id="TERROR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">10. Nerviosismo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="NERVIOSISMO" id="NERVIOSISMO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="NERVIOSISMO" id="NERVIOSISMO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="NERVIOSISMO" id="NERVIOSISMO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="NERVIOSISMO" id="NERVIOSISMO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">11. Sensación de ahogo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AHOGO" id="AHOGO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AHOGO" id="AHOGO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AHOGO" id="AHOGO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="AHOGO" id="AHOGO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">12. Manos temblorosas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MANOS" id="MANOS" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MANOS" id="MANOS" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MANOS" id="MANOS" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MANOS" id="MANOS" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">13. Cuerpo tembloroso</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CUERPO" id="CUERPO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CUERPO" id="CUERPO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CUERPO" id="CUERPO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CUERPO" id="CUERPO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">14. Miedo a perder el control</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROL" id="CONTROL" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROL" id="CONTROL" value="1">
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
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROL" id="CONTROL" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">15. Dificultad para respirar</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RESPIRAR" id="RESPIRAR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RESPIRAR" id="RESPIRAR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RESPIRAR" id="RESPIRAR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RESPIRAR" id="RESPIRAR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">16. Miedo a morir</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MORIR" id="MORIR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MORIR" id="MORIR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MORIR" id="MORIR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MORIR" id="MORIR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">17. Asustado</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ASUSTADO" id="ASUSTADO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ASUSTADO" id="ASUSTADO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ASUSTADO" id="ASUSTADO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ASUSTADO" id="ASUSTADO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">18. Indigestión o malestar estomacal</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INDIGESTION" id="INDIGESTION" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INDIGESTION" id="INDIGESTION" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INDIGESTION" id="INDIGESTION" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INDIGESTION" id="INDIGESTION" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">19. Debilidad</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DEBILIDAD" id="DEBILIDAD" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DEBILIDAD" id="DEBILIDAD" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DEBILIDAD" id="DEBILIDAD" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DEBILIDAD" id="DEBILIDAD" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">20. Ruborizarse</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RUBORIZARSE" id="RUBORIZARSE" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RUBORIZARSE" id="RUBORIZARSE" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RUBORIZARSE" id="RUBORIZARSE" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RUBORIZARSE" id="RUBORIZARSE" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">21. Sudoración (no debida al calor)</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUDORACION" id="SUDORACION" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUDORACION" id="SUDORACION" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUDORACION" id="SUDORACION" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUDORACION" id="SUDORACION" value="3">
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
                                            <p class="text-left">A partir de un nivel de ansiedad “Moderado” (punta de 16 – 30), es necesario referir al/la usuario/a a valoración psiquiátrica.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>   
                        </div>
                    </div>
                </div>                
                    <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <input type="hidden" name="TOKEN" value="<?php echo $this->_token->generar(); ?>">
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </div>
                    </div> 
            </form>
    </div>
</div>      