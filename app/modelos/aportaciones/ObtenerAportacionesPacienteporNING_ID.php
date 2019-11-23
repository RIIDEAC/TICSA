<?php
namespace app\modelos\aportaciones;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultObj};
use \app\nucleo\{Config};

class ObtenerAportacionesPacienteporNING_ID
{
	private $_db,
			$_count,
			$_result,
			$_config;

	public function __construct
	(
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultObj $DBResultObj,
		Config $Config
	)
	{
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result = $DBResultObj;
		$this->_config = $Config;
	}

	public function obtener(int $ning_id)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'APORTACION' => array(
						'*',
						'FECHA_REGISTRO AS FECHA_APORTACION'
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
					'PACIENTE' => array(
						'*',
					),
					'MONEDA' => array(
						'*',
					),
					'TIPOAPORTACION' => array(
						'*',
					),
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/aportacionpaciente') => 'APORTACION'
				),
				'join' => array(
					$this->_config->obtener('dbnombres/pacientes') => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					$this->_config->obtener('dbcatalogos/tipomoneda') => array(
						'ALIAS' => 'MONEDA',
						'ON' => 'TIM_ID'
					),
					$this->_config->obtener('dbcatalogos/tipoaportacion') => array(
						'ALIAS' => 'TIPOAPORTACION',
						'ON' => 'TIA_ID'
					)
				),
				'where' => array('APORTACION.NING_ID','=',$ning_id),
				'repetir' => array(
					array
					(
						'desde' => array(
						$this->_config->obtener('dbnombres/pacientes') => 'PACIENTE'
						),
						'join' => array(
							$this->_config->obtener('dbcatalogos/sexo') => array(
								'ALIAS' => 'SEXO',
								'ON' => 'SEX_ID'
							),
							$this->_config->obtener('dbcatalogos/entidades') => array(
								'ALIAS' => 'ENTIDADES',
								'ON' => 'ENF_ID'
							),											
							$this->_config->obtener('dbcatalogos/nacionalidad') => array(
								'ALIAS' => 'NACIONALIDAD',
								'ON' => 'NAC_ID'
							),
						),
					)		
				)
			)	
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return (object) $this->_result->getObj($datos);
		}

		return false;
	}
}