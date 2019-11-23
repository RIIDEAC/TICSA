<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">BECK:BDI</h1>
        <p class="text-justify"><strong>INSTRUCCIONES:</strong> En este cuestionario se encuentran 21 grupos de oraciones. Por favor lea cada una cuidadosamente y escoja la oración que mejor describa la manera en que se sintió la semana pasada o inclusive el día de hoy. Para ello, encierre en un círculo el número que se encuentra al lado de la oración que usted escogió. Asegúrese de leer todas las oraciones en cada grupo antes de hacer su elección.</p>
        <form method="POST" action="<?php echo $this->_config->obtener('app/webbase'); ?>RevisarConsejeriaBECKBDI/">
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
                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Inventario de síntomas de depresión (BECK:BDI)</a>
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
                                                <th scope="col" class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-left">1</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRISTE" id="TRISTE" value="0" checked> No me siento triste
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRISTE" id="TRISTE" value="1"> Me siento triste
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRISTE" id="TRISTE" value="2"> Me siento triste todo el tiempo y no puedo evitarlo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRISTE" id="TRISTE" value="3"> Estoy tan triste o infeliz que no puedo soportarlo
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">2</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGO" id="CASTIGO" value="0" checked> No siento que me estén castigando
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGO" id="CASTIGO" value="1"> Siento que me podrían castigar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGO" id="CASTIGO" value="2"> Creo que me van a castigar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CASTIGO" id="CASTIGO" value="3"> Siento que se me ha castigado
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">3</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPERANZA" id="ESPERANZA" value="0" checked> En general tengo esperanzas en mi futuro
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPERANZA" id="ESPERANZA" value="1"> Me siento sin esperanzas por mi futuro
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPERANZA" id="ESPERANZA" value="2"> Siento que no tengo nada que esperar del futuro
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ESPERANZA" id="ESPERANZA" value="3"> Siento que el futuro no tiene esperanza y que las cosas no pueden mejorar
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">4</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DESILUSIONADO" id="DESILUSIONADO" value="0" checked> No estoy desilusionado/a de mi mismo/a
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DESILUSIONADO" id="DESILUSIONADO" value="1"> Estoy desilusionado/a de mi mismo/a
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DESILUSIONADO" id="DESILUSIONADO" value="2"> Estoy disgustado/a conmigo mismo/a
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DESILUSIONADO" id="DESILUSIONADO" value="3"> Me odio
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">5</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="FRACASO" id="FRACASO" value="0" checked> No me siento como un fracasado/a
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="FRACASO" id="FRACASO" value="1"> Siento que he fracasado más que las personas en general
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="FRACASO" id="FRACASO" value="2"> Al repasar lo que he vivido, todo lo que veo son muchos fracasos
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="FRACASO" id="FRACASO" value="3"> Siento que soy un completo fracaso como persona
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">6</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="0" checked> No siento que sea peor que otras personas
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="1"> Me critico a mi mismo/a por mis debilidades o errores
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="2"> Me culpo todo el tiempo por mis fallas
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PEOR" id="PEOR" value="3"> Me culpo por todo lo malo que sucede
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">7</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SATISFECHO" id="SATISFECHO" value="0" checked> Obtengo tanta satisfacción de las cosas como solía tenerla antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SATISFECHO" id="SATISFECHO" value="1"> No disfruto de las cosas como antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SATISFECHO" id="SATISFECHO" value="2"> Ya no obtengo verdadera satisfacción de nada
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SATISFECHO" id="SATISFECHO" value="3"> Estoy insatisfecho/a o aburrido/a con todo
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">8</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUICIDIO" id="SUICIDIO" value="0" checked> No tengo pensamientos suicidas
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUICIDIO" id="SUICIDIO" value="1"> Tengo pensamientos suicidas pero no los llevaría a cabo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUICIDIO" id="SUICIDIO" value="2"> Me gustaría suicidarme
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SUICIDIO" id="SUICIDIO" value="3"> Me suicidaría si tuviera oportunidad
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">9</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CULPABLE" id="CULPABLE" value="0" checked> No me siento culpable
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CULPABLE" id="CULPABLE" value="1"> Me siento culpable gran parte del tiempo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CULPABLE" id="CULPABLE" value="2"> Me siento culpable casi todo el tiempo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CULPABLE" id="CULPABLE" value="3"> Me siento culpable todo el tiempo
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">10</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LLORAR" id="LLORAR" value="0" checked> No lloro más de lo normal
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LLORAR" id="LLORAR" value="1"> Lloro más que antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LLORAR" id="LLORAR" value="2"> Actualmente lloro todo el tiempo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="LLORAR" id="LLORAR" value="3"> Antes podía llorar, pero ahora no lo puedo hacer a pesar de que tengo ganas
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">11</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="IRRITABLE" id="IRRITABLE" value="0" checked> No me siento irritable
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="IRRITABLE" id="IRRITABLE" value="1"> Me enojo o me irrito más fácilmente que antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="IRRITABLE" id="IRRITABLE" value="2"> Me siento irritado todo el tiempo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="IRRITABLE" id="IRRITABLE" value="3"> Ya no me irrito por las cosas por las que me irritaba antes
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">12</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APETITO" id="APETITO" value="0" checked> Mi apetito es igual que siempre
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APETITO" id="APETITO" value="1"> Mi apetito no es tan bueno como antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APETITO" id="APETITO" value="2"> Mi apetito está muy mal ahora
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="APETITO" id="APETITO" value="3"> No tengo nada de apetito
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">13</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INTERES" id="INTERES" value="0" checked> No he perdido interés en la gente
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INTERES" id="INTERES" value="1"> Estoy menos interesado en la gente que antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INTERES" id="INTERES" value="2"> He perdido mucho interés en la gente
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="INTERES" id="INTERES" value="3"> He perdido todo el interés en la gente
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">14</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PESO" id="PESO" value="0" checked> No he perdido mucho peso últimamente
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PESO" id="PESO" value="1"> He perdido más de 2 kilos
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PESO" id="PESO" value="2"> He perdido más de 5 kilos
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PESO" id="PESO" value="3"> He perdido más de 8 kilos
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">14.1</td>
                                                <td class="col">
                                                ¿Estoy tratando de perder peso comiendo menos?<br> 
                                                	<div class="form-check">
                                                		
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PERDERPESO" id="PERDERPESO" value="0" checked> No <br>
                                                        </label>
                                                        <br>
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="PERDERPESO" id="PERDERPESO" value="1"> Sí
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">15</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DECISIONES" id="DECISIONES" value="0" checked> Tomo decisiones tan bien como siempre lo he hecho
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DECISIONES" id="DECISIONES" value="1"> Dejo para después varias decisiones que necesito tomar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DECISIONES" id="DECISIONES" value="2"> Ahora se me hace más difícil tomar decisiones
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DECISIONES" id="DECISIONES" value="3"> No puedo tomar decisiones
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">16</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="0" checked> No estoy más preocupado/a por mi salud que antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="1"> Estoy preocupado/a por mis problemas de salud física como dolores, malestar estomacal o dificultad para respirar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="2"> Estoy preocupado/a por problemas de mi salud física y se me hace difícil pensar en algo más
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SALUD" id="SALUD" value="3"> Estoy tan preocupado/a por mis problemas de salud física que no puedo pensar en nada más
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">17</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ATRACTIVO" id="ATRACTIVO" value="0" checked> No siento que me vea peor de cómo me veía antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ATRACTIVO" id="ATRACTIVO" value="1"> Estoy preocupado/a por verme viejo/a o poco atractivo/a
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ATRACTIVO" id="ATRACTIVO" value="2"> Siento que hay cambios definitivos en mi apariencia que me hacen ver poco atractivo/a
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="ATRACTIVO" id="ATRACTIVO" value="3"> Creo que me veo feo/a
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">18</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="0" checked> Tengo el mismo interés que siempre he tenido en el sexo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="1"> Tengo menos interés en el sexo que antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="2"> Ahora tengo mucho menos interés en el sexo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="SEXO" id="SEXO" value="3"> He perdido completamente el interés por el sexo
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">19</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="0" checked> Puedo trabajar tan bien como antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="1"> Necesito esforzarme más para empezar a hacer algo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="2"> Me tengo que obligar para hacer algo
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="TRABAJO" id="TRABAJO" value="3"> No puedo hacer ningún trabajo
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">20</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DORMIR" id="DORMIR" value="0" checked> Puedo dormir tan bien como antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DORMIR" id="DORMIR" value="1"> Ya no duermo tan bien como antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DORMIR" id="DORMIR" value="2"> Me despierto una o dos horas más temprano de lo normal y me cuesta trabajo volverme a dormir
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="DORMIR" id="DORMIR" value="3"> Me despierto muchas horas antes de lo de costumbre, y no puedo volverme a dormir
                                                        </label>
                                                    </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="text-left">21</td>
                                                <td class="col"> 
                                                	<div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CANSANCIO" id="CANSANCIO" value="0" checked> No me canso más de lo de costumbre
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CANSANCIO" id="CANSANCIO" value="1"> Me canso más fácilmente que antes
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CANSANCIO" id="CANSANCIO" value="2"> Con cualquier cosa que haga me canso
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input position-static" type="radio" name="CANSANCIO" id="CANSANCIO" value="3"> Estoy muy cansado para hacer cualquier cosa
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
                                            <p class="text-left">Si el/la usuario/a selecciona en el reactivo 8 alguna de las opciones: “Tengo pensamientos suicidas pero no los llevaría a cabo”, “Me gustaría suicidarme” o “Me suicidaría si tuviera la oportunidad”, es importante resaltarlo en el resultado de la prueba, junto con el nivel de depresión que obtuvo</p>
                                            <p class="text-left">A partir de un nivel de depresión “Moderada” o cuando el/la usuario/a reporte tener o haber tenido pensamientos de querer suicidarse, es necesario referirlo/la al servicio de psiquiatría para que reciba una valoración clínica más completa.</p>
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