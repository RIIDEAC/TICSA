<?php
namespace app\modelos\paciente;
use \app\modelos\sql\DBUpdate;
/**
 * 
 */
class ActualizarConvenioIngreso
{
	private $_db;
	
	public function __construct
	(
		DBUpdate $DBUpdate
	)
	{
		$this->_db = $DBUpdate;
	}

	public function actualizar(array $datos): bool
	{
		unset($datos['TOKEN']);

		$id = $datos['CIN_ID'];

		unset($datos['CIN_ID']);

		if($this->_db->update(
			array(
				'TABLE' => 'DAT_CONVENIOINGRESO_CIN',
				'SET' => $datos,
				'WHERE' => array('CIN_ID','=',$id)
			)
		))
		{
			return true;
		}

		return false;
	}
}