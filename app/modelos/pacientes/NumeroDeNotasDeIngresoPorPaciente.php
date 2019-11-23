<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount};
use \app\nucleo\Config;

class NumeroDeNotasDeIngresoPorPaciente
{
	private $_config,
			$_db,
			$_count,
			$_first;

	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount,
		Config $Config
	)
	{
		$this->_config = $Config;
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
	}

	public function obtener($paciente_id)
	{
		$datos = $this->_db->get(
			array(
				'table' => $this->_config->obtener('dbnombres/notaingreso'), 
				//'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('PAC_ID','=', $paciente_id),
				//'and' => array('', '', '')
				), 
			array(
				'NING_ID'
				)
		);

		return $this->_count->getCount($datos);
	}
}