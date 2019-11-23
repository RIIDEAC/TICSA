<?php
namespace app\modelos\vista;
use \app\nucleo\Config;
use \app\modelos\token\GenerarToken;
use \app\libreria\traductor\Formatos;

class VistaConToken
{
	private		$_token,
				$_config,
				$_formatos;

	public function __construct
	(
		GenerarToken $GenerarToken,
		Config $Config,
		Formatos $Formatos

	)
	{
		$this->_token = $GenerarToken;
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