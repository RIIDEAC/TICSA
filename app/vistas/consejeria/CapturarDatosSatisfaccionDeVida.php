    <div class="container">
        <h1 class="display-3">SATISFACCIÓN DE VIDA</h1>
        <p class="text-justify"><strong>INSTRUCCIONES:</strong> Este instrumento tiene como objetivo conocer su nivel de satisfacción con respecto a once diferentes áreas de su vida y con su vida en general. Por favor, anote un tache o una paloma en el número que corresponda del 1 al 10, a su nivel de satisfacción que siente tener en ese momento en cada una de las áreas de su vida. Tome en cuenta que el número uno indica completamente insatisfecho y el 10 completamente satisfecho.</p>
    <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosSatisfaccionDeVida/">
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="NING_ID"><h3>Paciente</h3></label>
             <select data-live-search="true" id="NING_ID" name="NING_ID" class="form-control" required>
                  <?php foreach ($datos->PACIENTES as $value) { ?>
                    <option value="<?php echo $value->NING_ID; ?>">Exp. <?php echo $value->NING_ID; ?> <?php echo $value->PAC_NOMBRE.' '.$value->PAC_PATERNO.' '.$value->PAC_MATERNO; ?></option>
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
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Satisfacción de vida: Azrin, Naster y Jones (1973)</a>
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
                                                <th scope="col" class="text-left">Área</th>
                                                <th scope="col" class="text-center">Completamente insatisfecho</th>
                                                <th scope="col" class="text-center">Insatisfecho</th>
                                                <th scope="col" class="text-center">Satisfecho</th>
                                                <th scope="col" class="text-center">Completamente satisfecho</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1. Consumo de drogas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONSUMO" id="CONSUMO" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">2. Progreso en el trabajo o en la escuela</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">3. Manejo del dinero</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DINERO" id="DINERO" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">4. Vida social / recreativa</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOCIAL" id="SOCIAL" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">5. Salud física</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">6. Relaciones familiares o matrimoniales</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="RELACIONES" id="RELACIONES" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">7. Situación legal</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LEGAL" id="LEGAL" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">8. Vida emocional</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EMOCIONAL" id="EMOCIONAL" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">9. Comunicación</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="COMUNICACION" id="COMUNICACION" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">10. Ejercicio físico</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="EJERCICIO" id="EJERCICIO" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">11. Vida espiritual y moral</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPIRITUAL" id="ESPIRITUAL" value="10" required> 10
                                                        </label>
                                                    </div>                           
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">12. Satisfacción general</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="1" required checked> 1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="2" required> 2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="3" required> 3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="4" required> 4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="5" required> 5
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="6" required> 6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="7" required> 7
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="8" required> 8
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="9" required> 9
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="GENERAL" id="GENERAL" value="10" required> 10
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
                                            <p class="text-left">De acuerdo a este puntaje es posible detectar las áreas que deben trabajarse prioritariamente en el curso de la consejería para favorecer que el/la usuario/a pueda sentirse más satisfecho en las mismas. </p>
                                            <p class="text-left">
                                            Por ejemplo, el/la usuario/a puede reportar sentirse menos satisfecho/a en aspectos de su vida referentes a: consumir droga (3 puntos), su vida espiritual y moral (2 puntos), vida emocional (4 puntos) y sus relaciones familiares o matrimoniales (5 puntos); y sentirse satisfecho con su situación legal (8 puntos), y en general reporta sentirse insatisfecho con su vida (5 puntos).</p>
                                            <p class="text-left">
                                            Es importante que el/la usuario/a responda la prueba preferentemente antes de que inicien las actividades terapéuticas y la consejería, ya que esta situación puede afectar sus respuestas, sobre todo, la que se relaciona con el consumo de drogas, ya que al ingresar al establecimiento puede modificarse de manera importante su relación con el alcohol y otras drogas y, por tanto, el/la usuario/a puede responder que ya se siente “más satisfecho/a” en esa área de su vida. Invite al/la usuario/a a responder con la mayor honestidad posible.</p>
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
                        <input type="hidden" name="TOKEN" value="<?php echo $this->_token->crear(); ?>">
                        <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                    </div>
                    </div> 
            </form>
    </div>