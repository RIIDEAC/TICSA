<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\RegistrarNuevoFamiliar;
use \app\nucleo\Config;
/**
 * AQUI SE COMPRUEBAN LOS DATOS DE UN NUEVO FAMILIAR Y SE REGISTRAN
 */
class RevisarNuevoFamiliar
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_familiar,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		RegistrarNuevoFamiliar $RegistrarNuevoFamiliar,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarNuevoFamiliar.php';
		$this->_entrada = $Entrada;
		$this->_familiar = $RegistrarNuevoFamiliar;
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
			if($this->_familiar->registrar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Familiar registrado con éxito';
				
				$this->_redirigir->a($this->_config->obtener('dir/realizado'));
			}

			$_SESSION[$this->_config->obtener('sesion/error')] = 'Familiar ya registrado';
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
		
			$_SESSION[$this->_config->obtener('sesion/error')] = $this->_validar->errors()->all();
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		
	}
}