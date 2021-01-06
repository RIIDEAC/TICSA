<?php 
namespace app\modelos\formatos;
use \app\modelos\sql\{DBGet,DBResultObj,DBResultCount};
/**
 * 
 */
class ObtenerTodosLosFormatosDeUnExpediente
{
	private $_db,
			$_count,
			$_result,
			$_tablas = array(
				'DAT_NINGRESO_NING' => array(
					'ID' => 'NING_ID',
					'NOMBRE' => 'Nota de ingreso',
					'CONTROLADOR' => 'VerNotaDeIngreso',
					'EDITAR' => 'EditarDatosNotaDeIngreso',
					'CAMPOS' => ['NING_ID','FECHA_REGISTRO','TII_ID']
				),				
				'DAT_NEGRESO_NEGR' => array(
					'ID' => 'NEGR_ID',
					'NOMBRE' => 'Nota de egreso',
					'CONTROLADOR' => 'VerNotaDeEgreso',
					'EDITAR' => 'EditarDatosNotaDeEgreso',
					'CAMPOS' => ['NEGR_ID','FECHA_REGISTRO']
				),
				'DAT_ASSIST_ASS' => array(
					'ID' => 'ASS_ID',
					'NOMBRE' => 'Prueba de ASSIST (Riesgo de consumo)',
					'CONTROLADOR' => 'VerAssist',
					'CAMPOS' => ['ASS_ID','FECHA_REGISTRO']
				),
				'DAT_SCL90_SCL' => array(
					'ID' => 'SCL_ID',
					'NOMBRE' => 'Prueba SCL90-R (Psicosis)',
					'CONTROLADOR' => 'VerScl',
					'CAMPOS' => ['SCL_ID','FECHA_REGISTRO']
				),
				'DAT_BAIBECK_BAI' => array(
					'ID' => 'BAI_ID',
					'NOMBRE' => 'Prueba BECK:BAI (Ansiedad)',
					'CONTROLADOR' => 'VerBaiBeck',
					'CAMPOS' => ['BAI_ID','FECHA_REGISTRO']
				),
				'DAT_BDIBECK_BDI' => array(
					'ID' => 'BDI_ID',
					'NOMBRE' => 'Prueba BECK:BDI (Depresión)',
					'CONTROLADOR' => 'VerBdiBeck',
					'CAMPOS' => ['BDI_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALI_EINI' => array(
					'ID' => 'EINI_ID',
					'NOMBRE' => 'Entrevista inicial - Datos generales',
					'CONTROLADOR' => 'VerEntrevistaInicial/1',
					'CAMPOS' => ['EINI_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALII_EINII' => array(
					'ID' => 'EINII_ID',
					'NOMBRE' => 'Entrevista inicial - Consumo de sustancias',
					'CONTROLADOR' => 'VerEntrevistaInicial/2',
					'CAMPOS' => ['EINII_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALIII_EINIII' => array(
					'ID' => 'EINIII_ID',
					'NOMBRE' => 'Entrevista inicial - Disposición al cambio',
					'CONTROLADOR' => 'VerEntrevistaInicial/3',
					'CAMPOS' => ['EINIII_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALIV_EINIV' => array(
					'ID' => 'EINIV_ID',
					'NOMBRE' => 'Entrevista inicial - Situación social - familiar',
					'CONTROLADOR' => 'VerEntrevistaInicial/4',
					'CAMPOS' => ['EINIV_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALV_EINV' => array(
					'ID' => 'EINV_ID',
					'NOMBRE' => 'Entrevista inicial - Administración del tiempo libre',
					'CONTROLADOR' => 'VerEntrevistaInicial/5',
					'CAMPOS' => ['EINV_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALVI_EINVI' => array(
					'ID' => 'EINVI_ID',
					'NOMBRE' => 'Entrevista inicial - Situación laboral',
					'CONTROLADOR' => 'VerEntrevistaInicial/6',
					'CAMPOS' => ['EINVI_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALVII_EINVII' => array(
					'ID' => 'EINVII_ID',
					'NOMBRE' => 'Entrevista inicial - Salud mental y física',
					'CONTROLADOR' => 'VerEntrevistaInicial/7',
					'CAMPOS' => ['EINVII_ID','FECHA_REGISTRO']
				),
				'DAT_EINICIALVIII_EINVIII' => array(
					'ID' => 'EINVIII_ID',
					'NOMBRE' => 'Entrevista inicial - Consecuencias adversas al consumo de sustancias',
					'CONTROLADOR' => 'VerEntrevistaInicial/8',
					'CAMPOS' => ['EINVIII_ID','FECHA_REGISTRO']
				),
				'DAT_SATISFACCIONVIDA_SAT' => array(
					'ID' => 'SAT_ID',
					'NOMBRE' => 'Cuestionario de satisfacción de vida',
					'CONTROLADOR' => 'VerSatisfaccionDeVida',
					'CAMPOS' => ['SAT_ID','FECHA_REGISTRO']
				),
				'DAT_REPORTEVALORACION_RVA' => array(
					'ID' => 'RVA_ID',
					'NOMBRE' => 'Reporte de valoración - Consejería',
					'CONTROLADOR' => 'VerReporteDeConsejeria',
					'CAMPOS' => ['RVA_ID','FECHA_REGISTRO']
				),
				'DAT_PLANCONSIND_PCI' => array(
					'ID' => 'PCI_ID',
					'NOMBRE' => 'Plan de consejería individual',
					'CONTROLADOR' => 'VerPlanDeConsejeriaIndividual',
					'CAMPOS' => ['PCI_ID','FECHA_REGISTRO']
				),
				'DAT_NOTACONIND_NCI' => array(
					'ID' => 'NCI_ID',
					'NOMBRE' => 'Nota de evolución consejería individual',
					'CONTROLADOR' => 'VerNotaDeEvolucionConsejeriaIndividual',
					'CAMPOS' => ['NCI_ID','FECHA_REGISTRO']
				),
				'DAT_CONSEJERIAGRUPALPAC_CGP' => array(
					'ID' => 'CGP_ID',
					'NOMBRE' => 'Nota de evolución consejería grupal',
					'CONTROLADOR' => 'VerNotaDeEvolucionConsejeriaGrupal',
					'CAMPOS' => ['CGP_ID','FECHA_REGISTRO']
				),
				'DAT_ENTPSIINI_EPI' => array(
					'ID' => 'EPI_ID',
					'NOMBRE' => 'Entrevista inicial psicológica - Sección 1',
					'CONTROLADOR' => 'VerEntrevistaPsicologicaParteUno',
					'CAMPOS' => ['EPI_ID','FECHA_REGISTRO']
				),
				'DAT_ENTPSIINII_EPII' => array(
					'ID' => 'EPII_ID',
					'NOMBRE' => 'Entrevista inicial psicológica - Sección 2',
					'CONTROLADOR' => 'VerEntrevistaPsicologicaParteDos',
					'CAMPOS' => ['EPII_ID','FECHA_REGISTRO']
				),
				'DAT_NOTAPSIIND_NPI' => array(
					'ID' => 'NPI_ID',
					'NOMBRE' => 'Nota de evolución psicológica individual',
					'CONTROLADOR' => 'VerNotaPsicologicaIndividual',
					'CAMPOS' => ['NPI_ID','FECHA_REGISTRO']
				),

			);
	
	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj
	)
	{
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
	}

	/**
	 * @return \stdClass|false
	 */
	public function obtener($id = null)
	{
		$resultados = [];

		foreach ($this->_tablas as $key => $value)
		{
			$datos = $this->_db->get(
			array(
				'table' => $key, 
				//'limit' =>  1, 
				//'orderby' => 'PAC_PATERNO', 
				//'order' => '', 
				'where' => array('NING_ID','=', $id),
				//'and' => array('', '', '')
				), 
				$this->_tablas[$key]['CAMPOS']
			);

			if($this->_count->getCount($datos) !== 0)
			{
				$resultados[$key] = $this->_tablas[$key];
				$resultados[$key]['DATOS'] =  $this->_result->getObj($datos);
				
				if($key == 'DAT_NINGRESO_NING')
				{
					//SI ES VOLUNTARIO O INVOLUNTARIO
					if($resultados['DAT_NINGRESO_NING']['DATOS'][0]->TII_ID == '3')
					{
						$resultados['NOTIFICACION'] = array(
						'ID' => 'NING_ID',
						'NOMBRE' => 'Notificación al M.P.',
						'CONTROLADOR' => 'VerNotificacionAlMP',
						'EDITAR' => 'EditarDatosNotaDeIngreso',
						'CAMPOS' => array(
		                    '0' => 'NING_ID',
		                    '1' => 'FECHA_REGISTRO'
		                ),
						'DATOS' => array(
							(object) array(
								'NING_ID' => $id,
								'FECHA_REGISTRO' => $resultados['DAT_NINGRESO_NING']['DATOS'][0]->FECHA_REGISTRO
							)
						)
						);

					}

					$resultados['CONSENTIMIENTO'] = array(
						'ID' => 'NING_ID',
						'NOMBRE' => 'Consentimiento informado',
						'CONTROLADOR' => 'VerConsentimientoInformado',
						'EDITAR' => 'EditarDatosNotaDeIngreso',
						'CAMPOS' => array(
		                    '0' => 'NING_ID',
		                    '1' => 'FECHA_REGISTRO'
		                ),
						'DATOS' => array(
							(object) array(
								'NING_ID' => $id,
								'FECHA_REGISTRO' => $resultados['DAT_NINGRESO_NING']['DATOS'][0]->FECHA_REGISTRO
							)
						)
					);	
				}
			}
		}

		if(count($resultados))
		{
			return (object) $resultados;
		}

		return false;
	}
}