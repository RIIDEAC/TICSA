<?php
namespace app\controladores;
use \app\nucleo\Config;
use \app\modelos\redirigir\Redirigir;

class CerrarSesion
{
	public function __construct(Redirigir $Redirigir, Config $Config)
	{
		$this->_config = $Config;
		$this->_redirigir = $Redirigir;

		unset($_SESSION[$this->_config->obtener('sesion/tiempo')]);
		unset($_SESSION[$this->_config->obtener('sesion/correo')]);
		session_destroy();	
		
		$this->_redirigir->a('Login');
	}

	public function Index()
	{
		
	}
}