<?php //echo '<pre>'; print_r($datos); echo '</pre>'; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Consentimiento Informado</h1>
</div>
<textarea name="Editor">
<table border="1" cellpadding="1" cellspacing="1" style="height:100%; width:100%">
	<tbody>
		<tr>
			<td rowspan="4" style="text-align:center; vertical-align:middle"><img alt="" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/<?php echo $datos->CENTRO->CEN_ABRE; ?>.png" style="height:100px; width:100px" /></td>
			<td colspan="1" rowspan="2">
				<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br />
				<?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?><br />
				<?php echo $datos->CENTRO->CEN_TELEFONO. ', ' .$datos->CENTRO->CEN_CORREO. ', ' .$datos->CENTRO->CEN_WEB; ?><br />
			</td>
			<td>Revisión: <?php echo $this->fechaMx($datos->FORMATO->FOR_REVISION); ?></td>
		</tr>
		<tr>
			<td>Versión: 01</td>
		</tr>
		<tr>
			<td rowspan="2" style="text-align:center">
			<h3><strong><?php echo $datos->FORMATO->FOR_MIN; ?></strong></h3>
			</td>
			<td>Código: <?php echo $datos->FORMATO->FOR_CODIGO; ?></td>
		</tr>
		<tr>
			<td>Página: 1 de 2</td>
		</tr>
	</tbody>
</table>
<div style="text-align:justify">
<h3>Por parte del usuario:</h3>

Por medio de la presente, yo <b><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></b> de sexo <?php echo $datos->DATOS->SEX_MAY; ?> con <?php echo $datos->DATOS->PAC_EDAD; ?> años de edad, declaro haber sido informado(a) que el establecimiento <b><?php echo $datos->CENTRO->CEN_NOMBRE; ?></b> ubicado en <b><?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?></b>, ofrece un tratamiento residencial por un tiempo de <b><?php echo $datos->CENTRO->TRO_DURACION; ?></b>, que tiene la finalidad de brindar atención para mi consumo de alcohol y/o drogas. Dicho tratamiento se basa en un modelo de tratamiento <b>MIXTO</b> cuyo objetivo consiste en lograr la abstinencia y la reinserción social. El programa está estructurado en 3 fases (INGRESO, PROGRESO Y EGRESO) con sus etapas y actividades complementarias.
<br>

Estoy de acuerdo en participar activamente durante todo el proceso de tratamiento, lo que implica proporcionar información veraz y fidedigna al momento de las evaluaciones, realizar las actividades planificadas por el equipo de <?php echo $datos->CENTRO->CEN_NOMBRE; ?> Consejero, médico y/o psicólogo. Cumplir el reglamento interno, asistir a las sesiones de seguimiento una vez terminado el tratamiento, todo ello en beneficio de lograr mi abstinencia y facilitar mi reinserción social. Acepto de que en caso necesario y al no obtener los resultados esperados, se me proporcione información por escrito o verbal respecto a otro tipo de alternativas de atención. Tengo conocimiento de que la relación de mi persona con el personal del establecimiento, será únicamente profesional.
<br>

Por otra parte, me comprometo a cumplir con las siguientes aportaciones monetarias: Aportación monetaria de ingreso de <?php echo $datos->INGRESO->CANTIDAD.' '.$datos->INGRESO->TIM_MIN; ?></b>, misma que liquidaré al ingreso. Aportaciones monetarias con una periodicidad <?php echo $datos->PERIODICO[0]->PER_MIN; ?> de <?php echo $datos->PERIODICO[0]->CANTIDAD; ?>.00 <?php echo $datos->PERIODICO[0]->TIM_MIN; ?> las cuales comenzarán desde el día de mi ingreso y finalizarán hasta que egrese del establecimiento.
<br>
En caso de necesitar atención médica, previo aviso, cubriré los gastos que generen los honorarios médicos, los medicamentos que necesite y los servicios de traslado y hospitalización si es necesaria, todo en beneficio de tener acceso a servicios dignos y apropiados durante mi estancia. En el caso de cancelar mi permanencia antes de haber cumplido con el período de tratamiento, estoy de acuerdo en cubrir los atrasos en mis aportaciones hasta el momento de mi egreso y no reclamar devolución alguna de las aportaciones monetarias y/o aportaciones en especie dadas por mi persona, amigos, conocidos y/o familiares en mi nombre a <?php echo $datos->CENTRO->CEN_NOMBRE; ?> En caso de no contar con los recursos económicos necesarios para pagar las aportaciones antes mencionadas, estoy de acuerdo en prestar servicio social en el <?php echo $datos->CENTRO->CEN_NOMBRE; ?> durante mi estancia o posterior a esta en este establecimiento.

<br>
Estoy de acuerdo en recibir visitas de mis familiares, representante legal y/o amigos en los términos y condiciones que el equipo de <?php echo $datos->CENTRO->CEN_NOMBRE; ?> Considere adecuados para promover mi rehabilitación y reinserción social, respetando mi integridad y derechos en todo momento.
<br>
Estoy de acuerdo en que el equipo de <?php echo $datos->CENTRO->CEN_NOMBRE; ?> recabe mis datos, imágenes y/o videos de mi persona para mi seguridad y expediente electrónico e impreso, estoy de acuerdo en que todos los datos que se recaben sobre mi persona en evaluaciones, test, dinámicas y reportes se utilicen con fines estadísticos, de investigación , control de calidad y cualquier otra forma que <?php echo $datos->CENTRO->CEN_NOMBRE; ?> considere pertinente, sin que se revele y/o publique mi identidad personal, fotografías y/o videos de mi persona con excepción de las que indique la ley.
<br>
Ratifico que he sido informado respecto a las características del tratamiento, los procedimientos, los riesgos que implica, los costos, así como los beneficios esperados y estoy de acuerdo en los requerimientos necesarios para su aplicación.
</div>
<div style="page-break-after:always"><span style="display:none">&nbsp;</span></div>
<p></p>
<table border="1" cellpadding="1" cellspacing="1" style="height:100%; width:100%">
	<tbody>
		<tr>
			<td rowspan="4" style="text-align:center; vertical-align:middle"><img alt="" src="<?php echo $this->_config->obtener('app/webbase'); ?>img/<?php echo $datos->CENTRO->CEN_ABRE; ?>.png" style="height:100px; width:100px" /></td>
			<td colspan="1" rowspan="2">
				<?php echo $datos->CENTRO->CEN_NOMBRE; ?><br />
				<?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?><br />
				<?php echo $datos->CENTRO->CEN_TELEFONO. ', ' .$datos->CENTRO->CEN_CORREO. ', ' .$datos->CENTRO->CEN_WEB; ?><br />
			</td>
			<td>Revisión: <?php echo $this->fechaMx($datos->FORMATO->FOR_REVISION); ?></td>
		</tr>
		<tr>
			<td>Versión: 01</td>
		</tr>
		<tr>
			<td rowspan="2" style="text-align:center">
			<h3><strong><?php echo $datos->FORMATO->FOR_MIN; ?></strong></h3>
			</td>
			<td>Código: <?php echo $datos->FORMATO->FOR_CODIGO; ?></td>
		</tr>
		<tr>
			<td>Página: 2 de 2</td>
		</tr>
	</tbody>
</table>
<div style="text-align:justify">
<h3>Por parte del establecimiento:</h3>
<?php echo $datos->CENTRO->CEN_NOMBRE; ?> se compromete a brindar un servicio de atención de calidad que facilite la recuperación y la reinserción del usuario a una vida productiva, garantizando en todo momento el respeto a la integridad del usuario y haciendo valer sus derechos. 
Se pone de manifiesto que los datos personales del usuario o datos que hagan posible su identificación son de carácter confidencial y sólo tendrán acceso a éstos el equipo involucrado en el proceso terapéutico, por lo que no se revelarán a ningún otro individuo, si no es bajo el consentimiento escrito del usuario, exceptuando los casos previstos por la ley y autoridades sanitarias. En el caso de que el usuario presente una condición médica previa al ingreso, el establecimiento dará continuidad al tratamiento médico o farmacológico, suministrando los medicamentos en las dosis y horarios indicados, siempre y cuando éstos sean proporcionados por prescripción médica y existan los estudios y recetas avaladas por un médico certificado y no se contraindique con el tratamiento recibido durante la estancia. En caso de que el usuario requiera estudios complementarios o el servicio de un médico especializado, se le informará al respecto y se dará aviso a los familiares. En el caso de que el usuario requiera atención médica urgente, se dará aviso inmediato a los familiares y se trasladará a algún hospital del siguiente nivel de atención. En caso de que el usuario tenga que ser referido a otra institución, ya sea por el consejero, médico y/o psicólogo se le notificará al usuario, a la familia y/o representante legal. 
Por otro lado, el establecimiento se exime de toda responsabilidad por los actos en contra de la ley en que el usuario se haya visto involucrado, previo y posterior al tratamiento. En caso de que el usuario abandone las instalaciones sin autorización del responsable, se le notificará a su familia, el <?php echo $datos->CENTRO->CEN_NOMBRE; ?> se exime de toda responsabilidad en caso de que el usuario abandone las instalaciones sin autorización del responsable. En el caso de que el usuario o sus familiares presenten alguna duda respecto al proceso de rehabilitación o a cualquier otro asunto relacionado con el mismo, <?php echo $datos->CENTRO->CEN_NOMBRE; ?> se compromete a aclararla y a proporcionar información relativa al estado de salud del usuario y evolución del tratamiento cada que el familiar directo o representante legal lo solicite. Finalmente, <?php echo $datos->CENTRO->CEN_NOMBRE; ?> se compromete a proporcionar y a dar lectura del reglamento interno del establecimiento al usuario, familiar y/o responsable legal.
<p>
Siendo el <?php echo $this->fechaMx($datos->DATOS->PAC_FINGRESO); ?>, en Tijuana, Baja California, México y habiendo sido informado y aceptando los compromisos anteriormente expuestos. Firman el presente consentimiento.
</p>
<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td style="text-align:center; width:25%">Usuario</td>
			<td style="text-align:center; width:25%">Director del establecimiento</td>
			<td style="text-align:center; width:25%">Testigo</td>
			<td style="text-align:center; width:25%">Testigo</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:10px"><?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:10px"><?php echo $datos->CENTRO->CEN_DIRECTOR; ?></span></p>
			</td>
			<td>
			<p><span style="font-size:10px"></span></p>
			</td>
			<td>
			<p><span style="font-size:10px"></span></p>
			</td>
		</tr>
		<tr>
			<td style="vertical-align:baseline; white-space:nowrap">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p><span style="font-size:10px">Firma:</span></p>
			</td>
			<td style="vertical-align:baseline">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p><span style="font-size:10px">Firma:</span></p>
			</td>
			<td style="vertical-align:baseline">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p><span style="font-size:10px">Firma:</span></p>
			</td>
			<td style="vertical-align:baseline">
			<p>&nbsp;</p>

			<p>&nbsp;</p>

			<p><span style="font-size:10px">Firma:</span></p>
			</td>
		</tr>
	</tbody>
</table>
</div>
</textarea>
<?php //echo '<pre>'; print_r($datos); ?>