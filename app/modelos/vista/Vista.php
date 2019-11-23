<?php
namespace app\modelos\vista;
use \app\nucleo\Config;
use \app\libreria\traductor\Formatos;

class Vista
{
	private $_config;
	
	public function __construct(Config $Config,Formatos $Formatos)
	{
		$this->_config = $Config;
		$this->_formatos = $Formatos;
	}

	public function ver($vista, $datos = null)
	{
		if(file_exists($this->_config->obtener('dir/vistas') . $vista . '.php'))
		{
			require_once $this->_config->obtener('dir/vistas') . $vista . '.php';
		}
	}
}