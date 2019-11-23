<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultObj};
use \app\nucleo\{Config};

class ObtenerTodosLosPacientesSinConvenioIngreso
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
					'INGRESO' => array(
						'*',
					),
					'TIPOINGRESO' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'*',
					),
					'ESTADOCIVIL' => array(
						'*',
					),
					'ESCOLARIDAD' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'*',
					),
					'OCUPACION' => array(
						'*',
					),
					'PACIENTE' => array(
						'*',
					),
					'CONVENIO' => array(
						'NING_ID',
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
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/notaingreso') => 'INGRESO'
				),
				'join' => array(
					$this->_config->obtener('dbcatalogos/tipoingreso') => array(
						'ALIAS' => 'TIPOINGRESO',
						'ON' => 'TII_ID'
					),
					$this->_config->obtener('dbnombres/convenioingreso') => array(
						'ALIAS' => 'CONVENIO',
						'ON' => 'NING_ID'
					),
					$this->_config->obtener('dbcatalogos/codigopostal') => array(
						'ALIAS' => 'CODIGOPOSTAL',
						'ON' => 'COP_ID'
					),											
					$this->_config->obtener('dbcatalogos/estadocivil') => array(
						'ALIAS' => 'ESTADOCIVIL',
						'ON' => 'ESC_ID'
					),
					$this->_config->obtener('dbcatalogos/escolaridad') => array(
						'ALIAS' => 'ESCOLARIDAD',
						'ON' => 'ESO_ID'
					),
					$this->_config->obtener('dbcatalogos/ocupacion') => array(
						'ALIAS' => 'OCUPACION',
						'ON' => 'OCU_ID'
					),
					$this->_config->obtener('dbnombres/pacientes') => array(
						'ALIAS' => 'PACIENTE',
						'ON' => 'PAC_ID'
					)
				),
				'where' => array('CONVENIO.NING_ID','IS', $null = null),
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
				),
				
			)	
		);		

		if($this->_count->getCount($datos) !== 0)
		{
			return (object) $this->_result->getObj($datos);
		}

		return false;
	}
}