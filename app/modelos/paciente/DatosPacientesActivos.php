<?php
namespace app\modelos\paciente;
use \app\modelos\sql\{DBJoin,DBGet,DBResultCount,DBResultObj};
/**
 * 
 */
class DatosPacientesActivos
{
	private $_join,
			$_db,
			$_count,
			$_result;
	
	public function __construct
	(
		DBJoin $DBJoin,
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj
	)
	{
		$this->_join = $DBJoin;		
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;	
	}
 /**
   * @return \stdClass|false
*/
	public function obtener()
	{
		$datos = $this->_join->obtener(
			array
			(
				'datos' => array(
					'EXPEDIENTE' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
						'USU_ID',
					),
					'SEXO' => array(
						'*',
					),
					'ENTIDADES' => array(
						'*',
					),
					'NACIONALIDAD' => array(
						'*',
					),
					'SEXO2' => array(
						'*',
					),
					'ENTIDADES2' => array(
						'*',
					),
					'NACIONALIDAD2' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'TIPOINGRESO' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'COP_ID',
						'd_codigo',
						'd_asenta',
						'd_tipo_asenta',
						'D_mnpio',
						'd_estado',
						'd_ciudad',
					),
					'ESCOLARIDAD' => array(
						'*',
					),
					'ESTADOCIVIL' => array(
						'*',
					),
					'OCUPACION' => array(
						'*',
					),
					'FAMILIAR' => array(
						'*',
					),
				),
				'desde' => array(
					'DAT_NINGRESO_NING' => 'EXPEDIENTE'
				),
				'join' => array(
					'CAT_TIPOINGRESO_TII' => array(
						'ALIAS' => 'TIPOINGRESO',
						'ON' => 'TII_ID'
					),
					'CAT_CODIGOPOSTAL_COP' => array(
						'ALIAS' => 'CODIGOPOSTAL',
						'ON' => 'COP_ID'
					),											
					'CAT_ESCOLARIDAD_ESO' => array(
						'ALIAS' => 'ESCOLARIDAD',
						'ON' => 'ESO_ID'
					),
					'CAT_ESTADOCIVIL_ESC' => array(
						'ALIAS' => 'ESTADOCIVIL',
						'ON' => 'ESC_ID'
					),
					'CAT_OCUPACION_OCU' => array(
						'ALIAS' => 'OCUPACION',
						'ON' => 'OCU_ID'
					),
					'DAT_USUARIO_USU' => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
					'DAT_PACIENTE_PAC' => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					'DAT_FAMILIAR_FAM' => array(
						'ALIAS' => 'FAMILIAR',
						'ON' => 'PAC_ID'
					),
				),
				//'where' => array('EXPEDIENTE.NING_ID','=',$id),
				//'and' => array('FAMILIAR.RPR_ID','=',1),
				'repetir' => array(
					array
					(
						'desde' => array(
						'DAT_PACIENTE_PAC' => 'PACIENTE'
						),
						'join' => array(
							'CAT_SEXO_SEX' => array(
								'ALIAS' => 'SEXO',
								'ON' => 'SEX_ID'
							),
							'CAT_ENTIDADFEDERATIVA_ENF' => array(
								'ALIAS' => 'ENTIDADES',
								'ON' => 'ENF_ID'
							),											
							'CAT_NACIONALIDAD_NAC' => array(
								'ALIAS' => 'NACIONALIDAD',
								'ON' => 'NAC_ID'
							),
						),
					),
					array
					(
						'desde' => array(
						'DAT_FAMILIAR_FAM' => 'FAMILIAR'
						),
						'join' => array(
							'CAT_SEXO_SEX' => array(
								'ALIAS' => 'SEXO2',
								'ON' => 'SEX_ID'
							),
							'CAT_ENTIDADFEDERATIVA_ENF' => array(
								'ALIAS' => 'ENTIDADES2',
								'ON' => 'ENF_ID'
							),											
							'CAT_NACIONALIDAD_NAC' => array(
								'ALIAS' => 'NACIONALIDAD2',
								'ON' => 'NAC_ID'
							),
						),
					),
				)
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			
			$resultados = array();

			foreach ($this->_result->getObj($datos) as $value)
			{
				//REVISAR LOS CERRADOS
				$egreso = $this->_db->get(
					array(
					'table' => 'DAT_NEGRESO_NEGR', 
					//'limit' => '', 
					//'orderby' => '', 
					//'order' => '', 
					'where' => array('NING_ID','=',$value->NING_ID),
					//'and' => array('', '', '')
					), 
					array(
					'*'
					)
				);

				if($this->_count->getCount($egreso) == 0)
				{
					$resultados[$value->NING_ID] = $value;
				}
			}

			if(!empty($resultados))
			{
				return (object) $resultados;
			}
				
		}

		return false;
	}
}