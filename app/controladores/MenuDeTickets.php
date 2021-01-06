<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\tickets\ObtenerTodosLosTickets;
/**
 * 
 */
class MenuDeTickets
{
	private $_vista,
			$_tickets;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerTodosLosTickets $ObtenerTodosLosTickets
	)
	{
		$this->_vista = $Vista;
		$this->_tickets = $ObtenerTodosLosTickets;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
					'template/HeaderTables',
					'template/Nav',
					'template/MenuDeTickets',
				)
		);

		if($tickets = $this->_tickets->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'expediente/ListaDeTickets',
	 			), (object) $tickets);
	 	}

	 	$this->_vista->ver(
			array(
					'template/FooterTables',
				)
		);

	}	
}