<?php
namespace app\modelos\token;

class RevisarToken
{
	private $_config;
	
	public function __construct(\app\nucleo\Config $Config)
	{
		$this->_config = $Config;
	}

	public function revisar($token = null)
	{
		if
		(
			isset($_SESSION[$this->_config->obtener('sesion/token')]) 
			&& 
			$token === $_SESSION[$this->_config->obtener('sesion/token')]
		)
		{
			unset($_SESSION[$this->_config->obtener('sesion/token')]);
			return true;
		}

		return false;
	}
}