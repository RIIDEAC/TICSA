<?php
namespace app\modelos\token;

class GenerarToken
{
	private $_config;
	
	public function __construct(\app\nucleo\Config $Config)
	{
		$this->_config = $Config;
	}
	
	public function generar()
	{
	    unset($_SESSION[$this->_config->obtener('sesion/token')]);
		return $_SESSION[$this->_config->obtener('sesion/token')] = md5(time());
	}
}