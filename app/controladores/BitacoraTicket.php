<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\ticket\ObtenerTodoslosTickets;

class BitacoraTicket
{
	private $_vista,
			$_menu,
			$_ticket,
			$_formatos;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodoslosTickets $ObtenerTodoslosTickets
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_ticket = $ObtenerTodoslosTickets;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($ticket = $this->_ticket->obtener())
		{
			$this->_vista->ver('ticket/BitacoraTicket', $ticket);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}