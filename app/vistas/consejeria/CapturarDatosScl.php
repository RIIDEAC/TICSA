    <div class="container">
        <h1 class="display-3">SCL-90R</h1>
        <p class="text-justify"><strong>INSTRUCCIONES:</strong> A continuación se presenta una lista de malestares o molestias que las personas pueden llegar a tener, lea cada una de éstas y marque la opción que describa si en las últimas semanas se le han presentado y qué tanto le afectaron; elija para cada frase una de las cinco posibilidades de respuesta: Nada, Muy poco, Poco, Bastante y Mucho. Si no se le presentaron o se le presentaron pero no le afectaron seleccione la opción “Nada”.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>VerificarDatosScl/">
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
      </div>    
        <!--Pregunta 1-->
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Síntomas de psicosis: SCL-90R</a>
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
                                                <th scope="col" class="text-left">Frases</th>
                                                <th scope="col" class="text-center">Nada</th>
                                                <th scope="col" class="text-center">Muy poco</th>
                                                <th scope="col" class="text-center">Poco</th>
                                                <th scope="col" class="text-center">Bastante</th>
                                                <th scope="col" class="text-center">Mucho</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1. Perder la confianza en la mayoría de las personas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONFIANZA" id="CONFIANZA" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONFIANZA" id="CONFIANZA" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONFIANZA" id="CONFIANZA" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONFIANZA" id="CONFIANZA" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONFIANZA" id="CONFIANZA" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">2. Sentir que me vigilan o que hablan de mí</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VIGILAN" id="VIGILAN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VIGILAN" id="VIGILAN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VIGILAN" id="VIGILAN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VIGILAN" id="VIGILAN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VIGILAN" id="VIGILAN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">3. Tener ideas o pensamientos que los demás no entienden</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ENTIENDEN" id="ENTIENDEN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ENTIENDEN" id="ENTIENDEN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ENTIENDEN" id="ENTIENDEN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ENTIENDEN" id="ENTIENDEN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ENTIENDEN" id="ENTIENDEN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">4. Sentir que los demás no me valoran como merezco</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VALORAN" id="VALORAN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VALORAN" id="VALORAN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VALORAN" id="VALORAN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VALORAN" id="VALORAN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VALORAN" id="VALORAN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">5. Sentir que se aprovechan de mí si los dejo</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APROVECHAN" id="APROVECHAN" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APROVECHAN" id="APROVECHAN" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APROVECHAN" id="APROVECHAN" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APROVECHAN" id="APROVECHAN" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APROVECHAN" id="APROVECHAN" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">6.<b> Sentir que alguien puede controlar mis pensamientos.</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROLAR" id="CONTROLAR" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROLAR" id="CONTROLAR" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROLAR" id="CONTROLAR" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROLAR" id="CONTROLAR" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CONTROLAR" id="CONTROLAR" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">7. <b>Escuchar voces que otras personas no pueden oír</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VOCES" id="VOCES" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VOCES" id="VOCES" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VOCES" id="VOCES" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VOCES" id="VOCES" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VOCES" id="VOCES" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">8. <b>Creer que la gente sabe qué estoy pensando</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSANDO" id="PENSANDO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSANDO" id="PENSANDO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSANDO" id="PENSANDO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSANDO" id="PENSANDO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSANDO" id="PENSANDO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">9. Tener ideas o pensamientos que no son los míos</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSAMIENTOS" id="PENSAMIENTOS" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSAMIENTOS" id="PENSAMIENTOS" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSAMIENTOS" id="PENSAMIENTOS" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSAMIENTOS" id="PENSAMIENTOS" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PENSAMIENTOS" id="PENSAMIENTOS" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">10. Sentirme solo/a aun estando con gente</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOLO" id="SOLO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOLO" id="SOLO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOLO" id="SOLO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOLO" id="SOLO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SOLO" id="SOLO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">11. Pensar cosas sobre el sexo que me molestan</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">12. <b>Ver cosas que otros no pueden ver</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VER" id="VER" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VER" id="VER" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VER" id="VER" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VER" id="VER" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="VER" id="VER" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">13. Sentir que debo ser castigado/a por mis pecados</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGADO" id="CASTIGADO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGADO" id="CASTIGADO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGADO" id="CASTIGADO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGADO" id="CASTIGADO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGADO" id="CASTIGADO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">14. Sentir que algo anda mal en mi cuerpo</td>
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
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CUERPO" id="CUERPO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">15. Sentirme alejado/a de las demás personas</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ALEJADO" id="ALEJADO" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ALEJADO" id="ALEJADO" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ALEJADO" id="ALEJADO" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ALEJADO" id="ALEJADO" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ALEJADO" id="ALEJADO" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">16. <b>Sentir algo caminando o moviéndose en mi cuerpo que no se pueda ver</b></td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MOVIENDOSE" id="MOVIENDOSE" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MOVIENDOSE" id="MOVIENDOSE" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MOVIENDOSE" id="MOVIENDOSE" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MOVIENDOSE" id="MOVIENDOSE" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="MOVIENDOSE" id="MOVIENDOSE" value="4">
                                                        </label>
                                                    </div>                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">17. Pensar que en mi cabeza hay algo que no funciona bien</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CABEZA" id="CABEZA" value="0" checked>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CABEZA" id="CABEZA" value="1">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CABEZA" id="CABEZA" value="2">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CABEZA" id="CABEZA" value="3">
                                                        </label>
                                                    </div>                            
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CABEZA" id="CABEZA" value="4">
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
                                            <p class="text-left">Un puntaje a partir de 37 puntos y/o la presencia de los síntomas correspondientes a las frases en negritas: 6, 7, 8, 12 y 16, que tienen asignada una puntuación de Poco (2 puntos), Bastante (3 puntos) o Mucho (4 puntos) sugieren la necesidad de referir al/la usuario/a a una valoración psiquiátrica para que el especialista determine si presenta el diagnóstico de psicosis.</p>
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