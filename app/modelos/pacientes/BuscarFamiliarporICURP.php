<?php
namespace app\modelos\pacientes;
use \app\modelos\sql\{DBGet, DBResultCount, DBResultFirst};
use \app\nucleo\Config;

class BuscarFamiliarporICURP 
{
	private $_config,
			$_db,
			$_count,
			$_first;

	public function __construct
	(
		DBGet $DBGet, 
		DBResultCount $DBResultCount, 
		DBResultFirst $DBResultFirst,
		Config $Config
	)
	{
		$this->_config = $Config;
		$this->_db = $DBGet;
		$this->_count = $DBResultCount;
		$this->_first =$DBResultFirst;
	}

	public function obtener($icurp)
	{
		$datos = $this->_db->get(
			array(
				'table' => $this->_config->obtener('dbnombres/familiar'), 
				//'limit' =>  1, 
				//'orderby' => '', 
				//'order' => '', 
				'where' => array('FAM_ICURP','=', $icurp),
				//'and' => array('', '', '')
				), 
			array(
				'FAM_ID'
				)
		);

		if($this->_count->getCount($datos) == 0)
		{
			return true;
		}

		return false;
	}
}