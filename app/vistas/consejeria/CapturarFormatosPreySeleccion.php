                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">A continuación elija las pruebas de preselección y valoración que desea integrar al Reporte de Valoración</a>
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
                                                <th scope="col" class="text-left">Instrumento</th>
                                                <th scope="col" class="text-center">Fecha y hora de registro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">Prueba de ASSIST</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ASSIST'] as $value) { ?>                      
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="ASS_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->ASS_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>                                                
                                            	<?php } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">Prueba SCL-90R</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['SCL90'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="SCL_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->SCL_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                            	<?php } ?>
                                                </td>                                               
                                            </tr>
                                            <tr>
                                                <td class="text-left">Prueba BECK:BAI</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['BAIBECK'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="BAI_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->BAI_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>                                                
                                            	<?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Prueba BECK:BDI</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['BDIBECK'] as $value) { ?>              
                                                     <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="BDI_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->BDI_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 1</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['1'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINI_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINI_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 2</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['2'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINII_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINII_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 3</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['3'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINIII_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINIII_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 4</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['4'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINIV_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINIV_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 5</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['5'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINV_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINV_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 6</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['6'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINVI_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINVI_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 7</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['7'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINVII_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINVII_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Entrevista inicial - Parte 8</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['ENTREVISTA']['8'] as $value) { ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="EINVIII_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->EINVIII_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <tr>
                                                <td class="text-left">Prueba Satisfacción de vida</td>
                                                <td class="text-center">
                                                <?php foreach ($datos['SATISFACCION'] as $value) { ?>         
                                                    <div class="form-check">
                                                        <label class="form-check-label" for="<?php echo $value->FECHA_REGISTRO; ?>">
                                                            <input class="form-check-input position-static" type="radio" name="SAT_ID" id="<?php echo $value->FECHA_REGISTRO; ?>" value="<?php echo $value->SAT_ID; ?>" required checked> <?php echo $value->FECHA_REGISTRO; ?>
                                                        </label>
                                                    </div>
                                                <?php } ?>
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
                                            <p class="text-center">En caso de que exista más de una prueba realizada  del mismo instrumento, por favor elija la que considere conveniente.</p>
                                            <p class="text-center">Las pruebas se encuentran ordenadas por fecha y hora en la que se registraron.</p>
                                        </div>
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
				      <label>Observaciones con relación a la valoración médica: </label>
				      <textarea maxlength="255" name="OBSERVACIONESMEDICO" rows="5" class="form-control" required></textarea>
				    </div>
				    <div class="form-group col-md-12">
				      <label>Observaciones con relación a la valoración psiquiátrica: </label>
				      <textarea maxlength="255" name="OBSERVACIONESPSIQ" rows="5" class="form-control" required></textarea>
				    </div>
				    <div class="form-group col-md-12">
				      <label>Observaciones con relación a la valoración psicológica: </label>
				      <textarea maxlength="255" name="OBSERVACIONESPSIC" rows="5" class="form-control" required></textarea>
				    </div>
			   	</div>                
                <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                </div>
                </div> 
            </form>
    
</div>      