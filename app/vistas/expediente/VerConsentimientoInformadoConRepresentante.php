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
<h3>Por parte del familiar:</h3>
<?php 
if($datos->DATOS->PAE_ID == 2 && $datos->DATOS->SEX_ID == 1)
{ 
	$datos->DATOS->PAE_MIN = 'Padre';
}
if($datos->DATOS->PAE_ID == 2 && $datos->DATOS->SEX_ID == 2)
{ 
	$datos->DATOS->PAE_MIN = 'Madre';
}

if($datos->DATOS->PAE_ID == 5)
{ 
	$datos->DATOS->PAE_MIN = 'Sobrino(a)';
}
if($datos->DATOS->PAE_ID == 7)
{ 
	$datos->DATOS->PAE_MIN = 'Nieto(a)';
}
if($datos->DATOS->PAE_ID == 8)
{ 
	$datos->DATOS->PAE_MIN = 'Hijo(a)';
}
if($datos->DATOS->PAE_ID == 9)
{ 
	$datos->DATOS->PAE_MIN = 'Hijo(a)';
}    
if($datos->DATOS->PAE_ID == 10)
{ 
	$datos->DATOS->PAE_MIN = 'Abuelo(a)';
}
if($datos->DATOS->PAE_ID == 11)
{ 
	$datos->DATOS->PAE_MIN = 'Tío(a)';
}     
?>
Por medio de la presente, yo <b><?php echo $datos->DATOS->FAM_NOMBRE.' '.$datos->DATOS->FAM_PATERNO.' '.$datos->DATOS->FAM_MATERNO; ?></b> declaro haber sido informado(a) que el establecimiento <b><?php echo $datos->CENTRO->CEN_NOMBRE; ?></b> ubicado en <b><?php echo $datos->CENTRO->CEN_CALLE. ' ' .$datos->CENTRO->CEN_NUMERO. ', ' .$datos->CENTRO->CEN_COLONIA. ', C.P. ' .$datos->CENTRO->CEN_CP. ' ' .$datos->CENTRO->CEN_CIUDAD. ', ' .$datos->CENTRO->CEN_ENTIDAD; ?></b>, ofrece un tratamiento residencial por un tiempo de <b><?php echo $datos->CENTRO->TRO_DURACION; ?></b>, que tiene la finalidad de brindar atención para el consumo de alcohol o drogas de mi <b><?php echo $datos->DATOS->PAE_MIN; ?> <?php echo $datos->DATOS->PAC_NOMBRE.' '.$datos->DATOS->PAC_PATERNO.' '.$datos->DATOS->PAC_MATERNO; ?></b> de sexo <b><?php echo $datos->DATOS->SEX_MAY; ?></b> con <?php echo $datos->DATOS->PAC_EDAD; ?> años de edad. Dicho tratamiento que personalmente he solicitado se basa en un modelo de tratamiento <b>MIXTO</b> cuyo objetivo consiste en lograr la abstinencia y la reinserción social, dividido en 3 fases (INGRESO, PROGRESO Y EGRESO) con sus etapas y actividades complementarias. Estoy de acuerdo en participar activamente durante todo el proceso de tratamiento de mi familiar con la finalidad de lograr su recuperación y facilitar su reinserción, lo que implica proporcionar información veraz y fidedigna al momento de las evaluaciones, para lo cual asistiré a las sesiones que el equipo de atención me indique. En caso necesario y al no obtener los resultados esperados, acepto se me proporcione información por escrito o verbal respecto a otro tipo de alternativas de atención a donde puedo acudir yo o mi familiar. Tengo conocimiento de que la relación de mi persona y mi familiar con el personal del establecimiento será únicamente profesional. En caso de que mi familiar necesite atención médica cubriré los gastos que generen los honorarios médicos, los medicamentos que necesite y los servicios de traslado y hospitalización si es necesaria, también me han informado que se me notificará antes de realizar dichos gastos siempre y cuando no se trate de una emergencia, todo en beneficio de que mi familiar tenga acceso a servicios dignos y apropiados durante su estancia. En el caso de cancelar la permanencia de mi familiar antes de haber cumplido con el período de tratamiento, estoy de acuerdo en cubrir los atrasos en mis aportaciones hasta el momento de su egreso y no reclamar devolución alguna de las aportaciones monetarias o aportaciones en especie dadas por mi persona, amigos, conocidos o familiares en mi nombre a <?php echo $datos->CENTRO->CEN_NOMBRE; ?>. Estoy de acuerdo en que el equipo de <?php echo $datos->CENTRO->CEN_NOMBRE; ?> recabe los datos, imágenes o videos de mi familiar para su seguridad, expediente electrónico o impreso. Estoy de acuerdo en que todos los datos que se recaben de mi familiar en evaluaciones, test, dinámicas, instrumentos y reportes se utilicen con fines estadísticos, de investigación, control de calidad y cualquier otra forma que <?php echo $datos->CENTRO->CEN_NOMBRE; ?> considere pertinente, sin que se revele o publique la identidad personal, fotografías o videos de mi familiar, todo esto conforme a la La Ley Federal de Protección de Datos Personales en Posesión de Particulares. Estoy de acuerdo en visitar a mi familiar en los términos y condiciones que el equipo de <?php echo $datos->CENTRO->CEN_NOMBRE; ?> considere adecuados para para mi familiar, respetando sus derechos en todo momento. También, me comprometo a cumplir con las siguientes aportaciones monetarias: <b>Aportación monetaria de ingreso de <?php echo $datos->INGRESO->CANTIDAD.' '.$datos->INGRESO->TIM_MIN; ?></b>, misma que liquidaré al ingreso. <b>Aportaciones monetarias con una periodicidad <?php echo $datos->PERIODICO[0]->PER_MIN; ?></b> de <b><?php echo $datos->PERIODICO[0]->CANTIDAD; ?>.00 <?php echo $datos->PERIODICO[0]->TIM_MIN; ?></b> las cuales comenzarán desde el día del ingreso de mi familiar y finalizarán hasta que mi familiar egrese del establecimiento. En caso de que incumpla con el pago de las aportaciones, tanto de ingreso o periódicas a las cuales me he comprometido, acepto se me llame o requiera mi presencia por motivos de cobranza, en caso de que no acuda a las oficinas y liquide mi adeudo, estoy de acuerdo en que se suspenda el servicio que brinda este establecimiento a mi persona y el residencial a mi familiar, dando con esto por concluida la relación que tengo y tiene mi familiar con el establecimiento en cualquiera de las siguientes situaciones que se mencionan a continuación: 1. Adeudo en aportaciones periódicas o de ingreso por el equivalente a 4 semanas o más. 2. Adeudo de más de 2 semanas en medicamento, atención médica, atención psicológica, atención psiquiátrica, alimentación especial, gasolina de traslados o cualquier gasto especial que realice el establecimiento en la atención a mi familiar o mi persona.
En caso de que mi familiar abandone las instalaciones del establecimiento sin autorización del responsable por cualquier motivo, se me ha informado que se respetará la aportación de ingreso durante el tiempo que falte para concluir el periodo de tratamiento desde la fecha de ingreso. En caso de que el periodo de tratamiento de <?php echo $datos->CENTRO->TRO_DURACION; ?> haya concluido y mi familiar no cumpla con los objetivos del tratamiento, se me ha informado que se procedera con el reingreso de mi familiar, por lo cual realizare el respectivo tramite correspondiente, siempre y cuando mi familiar y yo lo solicitemos. Ratifico que he sido informado(a) respecto a las características del tratamiento en el que participará mi familiar, los procedimientos, los riesgos que implica, los costos, así como los beneficios esperados, y estoy de acuerdo en los requerimientos necesarios para su aplicación y los solicito.
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
			<td style="text-align:center; width:25%">Familiar / Representante legal</td>
			<td style="text-align:center; width:25%">Director del establecimiento</td>
			<td style="text-align:center; width:25%">Testigo</td>
			<td style="text-align:center; width:25%">Testigo</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:10px"><?php echo $datos->DATOS->FAM_NOMBRE.' '.$datos->DATOS->FAM_PATERNO.' '.$datos->DATOS->FAM_MATERNO; ?></span></p>
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