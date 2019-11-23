<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\RegistrarNotadeEgreso;
use \app\nucleo\Config;
/**
 * 
 */
class RevisarClinicoNotadeEgreso
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_paciente,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		RegistrarNotadeEgreso $RegistrarNotadeEgreso,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarClinicoNotadeEgreso.php';
		$this->_entrada = $Entrada;
		$this->_paciente = $RegistrarNotadeEgreso;
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
			if($this->_paciente->registrar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Nota de egreso registrada con éxito';
				
				$this->_redirigir->a($this->_config->obtener('dir/realizado'));
			}

			$_SESSION[$this->_config->obtener('sesion/error')] = 'El paciente no tiene un proceso activo';
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
		else
		{
			$_SESSION[$this->_config->obtener('sesion/error')] = $this->_validar->errors()->all();
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
	}
}