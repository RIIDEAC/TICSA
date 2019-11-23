<?php
namespace app\modelos\log;
use \app\modelos\sql\DBInsert;
/**
 * 
 */
class RegistrarMovimientoDB
{
	private $_db;
	
	public function __construct
	(
		DBInsert $DBInsert
	)
	{
		$this->_db = $DBInsert;
	}

	public function log($DB,$movimiento,$id_usu)
	{
		$this->_db->registrar('DAT_LOG_LOG', array(
			'MOVIMIENTO' => $movimiento,
			'BASE_DATOS' => $DB,
			'USU_ID' => $id_usu,
		));
	}
}