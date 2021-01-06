<?php
namespace app\modelos\redirigir;
use \app\nucleo\Config;

class Redirigir
{
	private $_config;

	public function __construct(Config $Config)
	{
		$this->_config = $Config;
	}

	/**
	 * @param null|string $metodo
	 */
	public function a(string $location, ?string $metodo = null): void
	{
		header('Location: ' . $this->_config->obtener('app/webbase').$location.'/'.$metodo);
		exit();
	}
}