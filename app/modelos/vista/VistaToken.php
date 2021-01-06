<?php
namespace app\modelos\vista;
use \app\nucleo\Config;
use \app\modelos\token\Token;

class VistaToken
{
	private $_config,
			$_token;
	
	public function __construct(Config $Config, Token $Token)
	{
		$this->_config = $Config;
		$this->_token = $Token;
	}

	public function ver(array $vistas, ?\stdClass $datos = null): void
	{
		foreach ($vistas as $vista)
		{
			if(file_exists($this->_config->obtener('dir/vistas') . $vista . '.php'))
			{
				require_once $this->_config->obtener('dir/vistas') . $vista . '.php';
			}
		}	
	}
}