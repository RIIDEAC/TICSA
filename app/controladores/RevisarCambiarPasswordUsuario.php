<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\usuarios\CambiarPasswordUsuario;
use \app\nucleo\Config;
/**
 * 
 */
class RevisarCambiarPasswordUsuario
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_password,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		CambiarPasswordUsuario $CambiarPasswordUsuario,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarCambiarPasswordUsuario.php';
		$this->_entrada = $Entrada;
		$this->_password = $CambiarPasswordUsuario;
		$this->_config = $Config;
	}

	public function Index()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}

		if(!$this->_validar->entrada($_POST, $this->_campos)->fails())
		{
			//Registramos con el modelo
			if($this->_password->cambiar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Contraseña actualizada con éxito';
				
				$this->_redirigir->a($this->_config->obtener('dir/realizado'));
			}

			$_SESSION[$this->_config->obtener('sesion/error')] = 'Ups, ocurrio un error desconocido';
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
		else
		{
			$_SESSION[$this->_config->obtener('sesion/error')] = $this->_validar->errors()->all();
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
	}
}