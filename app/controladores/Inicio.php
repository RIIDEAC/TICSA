<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\ticket\ObtenerTodoslosTicketsAbiertosporUsuario;

class Inicio
{
	private $_vista,
			$_menu,
			$_tickets;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodoslosTicketsAbiertosporUsuario $ObtenerTodoslosTicketsAbiertosporUsuario
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_tickets = $ObtenerTodoslosTicketsAbiertosporUsuario;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		$this->_vista->ver('usuario/Inicio', $this->_tickets->obtener());
		$this->_vista->ver('plantilla/Footer');
	}
}