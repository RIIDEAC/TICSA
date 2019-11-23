<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;

class SinPermisos
{
	private $_vista,
			$_menu;

	public function __construct(Vista $Vista, MenuporPermisos $MenuporPermisos)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		$this->_vista->ver('plantilla/SinPermisos');
		$this->_vista->ver('plantilla/Footer');
	}
}