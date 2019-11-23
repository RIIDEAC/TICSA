<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultObj};
use \app\nucleo\{Config};

class ObtenerTodosLosPacientesConEgreso
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

	public function obtener()
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'TIPOEGRESO' => array(
						'*',
					),
					'EGRESO' => array(
						'*',
					),
					'INGRESO' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'SEXO' => array(
						'*',
					),
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/notaegreso') => 'EGRESO'
				),
				'join' => array(
					$this->_config->obtener('dbnombres/pacientes') => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					),
					$this->_config->obtener('dbnombres/notaingreso') => array(
						'ALIAS' => 'INGRESO',
						'ON' => 'NING_ID'
					),
				),
				'repetir' => array(
					array
					(
						'desde' => array(
						$this->_config->obtener('dbnombres/notaegreso') => 'EGRESO'
						),
						'join' => array(
							$this->_config->obtener('dbcatalogos/tipoegreso') => array(
								'ALIAS' => 'TIPOEGRESO',
								'ON' => 'TIE_ID'
							),
						),
					),
					array
					(
						'desde' => array(
						$this->_config->obtener('dbnombres/notaegreso') => 'PACIENTE'
						),
						'join' => array(
							$this->_config->obtener('dbcatalogos/sexo') => array(
								'ALIAS' => 'SEXO',
								'ON' => 'SEX_ID'
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