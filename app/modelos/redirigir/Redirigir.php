<?php
namespace app\modelos\redirigir;

class Redirigir
{
	private $_config;

	public function __construct(\app\nucleo\Config $Config)
	{
		$this->_config = $Config;
	}

	public function a($location,$metodo = null)
	{
		header('Location: ' . $this->_config->obtener('app/webbase').$location.'/'.$metodo);
		exit();
	}
}