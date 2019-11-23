<?php
namespace app\modelos\sesion;

class RevisarSesion
{
	private $_config;

	public function __construct(\app\nucleo\Config $Config)
	{
		$this->_config = $Config;
	}

	public function revisar()
	{
		if(
			isset($_SESSION[$this->_config->obtener('sesion/tiempo')]) 
			&& !empty($_SESSION[$this->_config->obtener('sesion/tiempo')]) 
			&& isset($_SESSION[$this->_config->obtener('sesion/correo')]) 
			&& !empty($_SESSION[$this->_config->obtener('sesion/correo')])
			)
		{
			$time = time() - $_SESSION[$this->_config->obtener('sesion/tiempo')];
			
			if($time < $this->_config->obtener('sesion/regular'))
			{
				$_SESSION[$this->_config->obtener('sesion/tiempo')] = time();

				return true;
			}
			else
			{
				unset($_SESSION[$this->_config->obtener('sesion/tiempo')]);
				session_destroy();
			}
		}

		return false;
		
	}
}