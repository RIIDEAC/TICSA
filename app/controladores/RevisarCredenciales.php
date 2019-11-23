<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\sesion\ActivarSesion;
use \app\nucleo\Config;
/**
 * AQUI SE COMPRUEBAN LAS CREDENCIALES DE LOS USUARIOS
 */
class RevisarCredenciales
{
	private 	$_validar,
				$_redirigir,
				$_sesion,
				$_campos,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		ActivarSesion $ActivarSesion,
		Entrada $Entrada,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_sesion = $ActivarSesion;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarCredenciales.php';
		$this->_entrada = $Entrada;
		$this->_config = $Config;
	}

	public function Index()
	{
		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/login'));
		}

		if(!$this->_validar->entrada($_POST, $this->_campos)->fails())
		{
			$this->_sesion->activar($_POST['USU_CORREO']);
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}
		else
		{
			$_SESSION[$this->_config->obtener('sesion/error')] = $this->_validar->errors()->all();
			$this->_redirigir->a($this->_config->obtener('dir/login'));
		}
	}
}