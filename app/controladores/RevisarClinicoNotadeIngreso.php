<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\RegistrarNotadeIngreso;
use \app\nucleo\Config;
/**
 * AQUI SE COMPRUEBAN Y REGISTRAN LOS DATOS DE UN NUEVO PACIENTE
 */
class RevisarClinicoNotadeIngreso
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
		RegistrarNotadeIngreso $RegistrarNotadeIngreso,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarClinicoNotadeIngreso.php';
		$this->_entrada = $Entrada;
		$this->_paciente = $RegistrarNotadeIngreso;
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
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Nota de ingreso registrada con éxito';
				
				$this->_redirigir->a($this->_config->obtener('dir/realizado'));
			}

			$_SESSION[$this->_config->obtener('sesion/error')] = 'El paciente ya tiene un proceso activo';
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
		else
		{
			$_SESSION[$this->_config->obtener('sesion/error')] = $this->_validar->errors()->all();
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
	}
}