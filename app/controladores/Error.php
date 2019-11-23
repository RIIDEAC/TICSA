<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\nucleo\Config;
use \app\modelos\redirigir\Redirigir;

class Error
{
	private $_vista,
			$_menu,
			$_config;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos, 
		Config $Config,
		Redirigir $Redirigir
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_config = $Config;
		$this->_redirigir = $Redirigir;
	}

	public function Index()
	{
		if(!isset($_SESSION[$this->_config->obtener('sesion/error')]))
		{
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		$this->_vista->ver('plantilla/Error');
		$this->_vista->ver('plantilla/Footer');
		unset($_SESSION[$this->_config->obtener('sesion/error')]);
	}
}