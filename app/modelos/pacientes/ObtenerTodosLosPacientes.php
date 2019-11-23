<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultObj};
use \app\nucleo\{Config};

class ObtenerTodosLosPacientes
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
					'PACIENTE' => array(
						'*',
					),
					'USUARIO' => array(
						'USU_CORREO',
						'USU_NOMBRE',
						'USU_PATERNO',
						'USU_MATERNO',
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
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/pacientes') => 'PACIENTE'
				),
				'join' => array(
					$this->_config->obtener('dbnombres/usuarios') => array(
						'ALIAS' => 'USUARIO',
						'ON' => 'USU_ID'
					),
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
				),
				//'where' => array('NING_ID','=',$ning_id),
				//'and' => array('TIC_TIPO','=',1)
			)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return (object) $this->_result->getObj($datos);
		}

		return false;
	}
}