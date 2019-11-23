<?php
namespace app\modelos\permisos;
use \app\nucleo\{Config};
use \app\modelos\vista\Vista;
/**
 * 
 */
class MenuporPermisos
{
	private $_vista,
			$_config;
	
	public function __construct(Vista $Vista, Config $Config)
	{
		$this->_vista = $Vista;
		$this->_config = $Config;
	}

	public function ver()
	{
		
		$menus = $this->_config->obtener('permisos/'.$_SESSION[$this->_config->obtener('sesion/rol')]);

		foreach ($menus as $key => $value) {
			$this->_vista->ver('menus/'.$value);
		}
	}
}