<?php
namespace app\modelos\sesion;
use \app\modelos\usuarios\ObtenerDatosUsuarioporCorreo;
use \app\nucleo\Config;
/**
 * 
 */
class ActivarSesion
{
	private $_config,
			$_usuario;

	public function __construct(Config $Config, ObtenerDatosUsuarioporCorreo $ObtenerDatosUsuarioporCorreo)
	{
		$this->_config = $Config;
		$this->_usuario = $ObtenerDatosUsuarioporCorreo;
	}
	
	public function activar($correo)
	{
		$_SESSION[$this->_config->obtener('sesion/tiempo')] = time();
		$_SESSION[$this->_config->obtener('sesion/correo')] = $correo;
		$_SESSION[$this->_config->obtener('sesion/rol')] = $this->_usuario->obtener($_SESSION[$this->_config->obtener('sesion/correo')])->USU_ROL;
	}
}