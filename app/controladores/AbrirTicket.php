<?php
namespace app\controladores;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\tickets\AbrirTicket as CTicket;
/**
 * 
 */
class AbrirTicket
{
	private	$_redirigir,
			$_ticket;
	
	public function __construct
	(
		Redirigir $Redirigir, 
		CTicket $CTicket
	)
	{
		$this->_redirigir = $Redirigir;
		$this->_ticket = $CTicket;
	}

	public function Index($idTicket = null): void
	{
		if(is_numeric($idTicket))
		{
			if($this->_ticket->cerrar($idTicket))
			{
				$this->_redirigir->a('MenuDeTickets/Hecho');
			}
		}		
		

		$this->_redirigir->a('MenuDeTickets', 'Error');
	}
}