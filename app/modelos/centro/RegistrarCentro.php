<?php
namespace app\modelos\centro;
use \app\nucleo\Config;
use \app\modelos\sql\{DBInsert};
/**
 * 
 */
class RegistrarCentro
{
	private $_config,	
			$_db,
			$_usu,
			$_ingresos,
			$_egresos,
			$_icurp;
	
	public function __construct
	(
		Config $Config,
		DBInsert $DBInsert
	)
	{
		$this->_config = $Config;
		$this->_db = $DBInsert;
	}

	public function registrar($data = array())
	{
		unset($data['TOKEN']);

		if($this->_db->registrar($this->_config->obtener('dbnombres/centro'), $data))
		{
			return true;
		}
		
		return false;
	}
}
