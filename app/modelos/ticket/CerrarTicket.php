<?php
namespace app\modelos\ticket;
use \app\modelos\sql\{DBUpdate};

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

	public function cerrar($id_ticket)
	{
		return $this->_db->update(
		array(
				'TABLE' => 'DAT_TICKET_TIC',
				'SET' => array(
					'TIC_ESTADO' => 2,
					'FECHA_CIERRE' => date("Y-m-d")
				),
				'WHERE' => array('TIC_ID','=',$id_ticket)
			)
		);
	}
}