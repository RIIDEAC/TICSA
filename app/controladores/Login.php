<?php
namespace app\controladores;
use \app\nucleo\Config;
use \app\modelos\vista\VistaConToken;

class Login
{
	private $_config,
			$_vista;

	public function __construct
	(
		VistaConToken $VistaConToken,
		Config $Config
	)
	{
		$this->_vista = $VistaConToken;
		$this->_config = $Config;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Login');
		unset($_SESSION[$this->_config->obtener('sesion/error')]);
	}
}