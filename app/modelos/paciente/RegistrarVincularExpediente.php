<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBInsert;
/**
 * 
 */
class RegistrarVincularExpediente
{
	private $_db;
	
	public function __construct
	(
		DBInsert $DBInsert
	)
	{
		$this->_db = $DBInsert;
	}

	public function registrar(array $datos): bool
	{
		unset($datos['TOKEN']);
		
		if($this->_db->registrar('DAT_SISTEMAVIEJO_SIV', $datos))
		{
			return true;
		}

		return false;
	}
}