<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBJoin, DBResultCount, DBResultFirst};
use \app\nucleo\Config;
class ObtenerPacienteporID
{
	private $_db,
			$_count,
			$_result,
			$_config;

	public function __construct
	(
		Config $Config,
		DBJoin $DBJoin, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst
	)
	{
		$this->_config = $Config;
		$this->_db = $DBJoin;
		$this->_count = $DBResultCount;
		$this->_result =$DBResultFirst;
	}

	public function obtener(INT $PAC_ID)
	{
		$datos = $this->_db->obtener(
			array
			(
				'datos' => array(
					'PACIENTE' => array(
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
				),
				'desde' => array(
					$this->_config->obtener('dbnombres/pacientes') => 'PACIENTE'
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
				),
				'where' => array('PAC_ID','=',$PAC_ID),
				//'and' => array('TIC_TIPO','=',1)
			)
		);

		if($this->_count->getCount($datos) !== 0)
		{
			return $this->_result->getFirstObj($datos);
		}

		return false;
	}
}