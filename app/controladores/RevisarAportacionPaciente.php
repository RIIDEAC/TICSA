<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\aportaciones\RegistrarAportacionPaciente;
use \app\nucleo\Config;
/**
 * 
 */
class RevisarAportacionPaciente
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_aportacion,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		RegistrarAportacionPaciente $RegistrarAportacionPaciente,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarAportacionPaciente.php';
		$this->_entrada = $Entrada;
		$this->_aportacion = $RegistrarAportacionPaciente;
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
			if($id = $this->_aportacion->registrar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 
				"Aportación registrada con éxito, puede visualizarla 
				<h1><a target='_blank' href='{$this->_config->obtener('app/webbase')}VisualizarAportacionPaciente/{$id}'>AQUÍ</a></h1>";
				
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