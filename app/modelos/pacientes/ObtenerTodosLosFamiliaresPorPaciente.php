<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultObj};
use \app\nucleo\{Config};

class ObtenerTodosLosFamiliaresPorPaciente
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

	public function obtener($pac_id)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'FAMILIAR' => array(
						'*',
					),
					'SEXO' => array(
						'*'
					),
					'NACIMIENTO' => array(
						'*',
					),
					'NACIONALIDAD' => array(
						'*',
					),
					'PARENTESCO' => array(
						'*',
					),
					'CODIGOPOSTAL' => array(
						'*',
					),
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/familiar') => 'FAMILIAR'
				),
				'join' => array(
					$this->_config->obtener('dbcatalogos/sexo') => array(
						'ALIAS' => 'SEXO',
						'ON' => 'SEX_ID'
					),										
					$this->_config->obtener('dbcatalogos/entidades') => array(
						'ALIAS' => 'NACIMIENTO',
						'ON' => 'ENF_ID'
					),
					$this->_config->obtener('dbcatalogos/nacionalidad') => array(
						'ALIAS' => 'NACIONALIDAD',
						'ON' => 'NAC_ID'
					),
					$this->_config->obtener('dbcatalogos/parentesco') => array(
						'ALIAS' => 'PARENTESCO',
						'ON' => 'PAE_ID'
					),
					$this->_config->obtener('dbcatalogos/codigopostal') => array(
						'ALIAS' => 'CODIGOPOSTAL',
						'ON' => 'COP_ID'
					),
				),
				'where' => array('PAC_ID','=',$pac_id),
				//'and' => array('TIC_TIPO','=',1),
			)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return (object) $this->_result->getObj($datos);
		}

		return false;
	}
}