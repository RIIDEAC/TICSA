<?php
namespace app\modelos\tickets;
use \app\modelos\sql\DBUpdate;
/**
 * 
 */
class AbrirTicket
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
				'SET' => array('ETI_ID' => 1, 'FECHA_CIERRE' => '0000-00-00'),
				'WHERE' => array('TIC_ID','=',$idTicket)
			)
		))
		{
			return true;
		}

		return false;
	}
}