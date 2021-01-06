<?php
namespace app\modelos\vista;
use \app\nucleo\Config;

class Vista
{
	private $_config;
	
	public function __construct(Config $Config)
	{
		$this->_config = $Config;
	}

	/**
	 * @param string[] $vistas
	 */
	public function ver(array $vistas, ?\stdClass $datos = null): void
	{
		if(is_array($vistas))
		{
			foreach ($vistas as $vista)
			{
				if(file_exists($this->_config->obtener('dir/vistas') . $vista . '.php'))
				{
					require_once $this->_config->obtener('dir/vistas') . $vista . '.php';
				}
			}
		}
		else
		{
			if(file_exists($this->_config->obtener('dir/vistas') . $vistas . '.php'))
			{
				require_once $this->_config->obtener('dir/vistas') . $vistas . '.php';
			}
		}
	}

	public function fechaMx(string $fecha): string
	{
		$fecha = explode('-', $fecha);

		return $fecha[2].'-'.$fecha[1].'-'.$fecha[0];
	}
}