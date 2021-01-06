<?php
namespace app\modelos\tickets;
use \app\modelos\sql\DBUpdate;
/**
 * 
 */
class CerrarTicket
{
	private $_db;
	
	public function __construct
	(
		DBUpdate $DBUpdate
	)
	{
		$this->_db = $DBUpdate;
	}

	public function cerrar(int $idTicket): bool
	{
		if($this->_db->update(
			array(
				'TABLE' => 'DAT_TICKET_TIC',
				'SET' => array('ETI_ID' => 2, 'FECHA_CIERRE' => date("Y-m-d")),
				'WHERE' => array('TIC_ID','=',$idTicket)
			)
		))
		{
			return true;
		}

		return false;
	}
}