<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\consejeria\RegistrarSATISFACCIONVIDA;
use \app\nucleo\Config;
/**
 * 
 */
use \app\modelos\helper\ComprobacionDB;
class RevisarConsejeriaSATISFACCIONVIDA
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_satisf,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		RegistrarSATISFACCIONVIDA $RegistrarSATISFACCIONVIDA,
		Config $Config,
		ComprobacionDB $ComprobacionDB

	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarConsejeriaSATISFACCIONVIDA.php';
		$this->_entrada = $Entrada;
		$this->_satisf = $RegistrarSATISFACCIONVIDA;
		$this->_config = $Config;
		$this->_helper = $ComprobacionDB;
	}

	public function Index()
	{
		//$this->_helper->do('DAT_SATISFACCIONVIDA_SAT');
		//die();

		if(!$this->_entrada->existe())
		{
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}

		if(!$this->_validar->entrada($_POST, $this->_campos)->fails())
		{
			//Registramos con el modelo
			if($this->_satisf->registrar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Prueba registrada con éxito';
				
				$this->_redirigir->a($this->_config->obtener('dir/realizado'));
			}

			$_SESSION[$this->_config->obtener('sesion/error')] = 'Error desconocido, reportar a administración';
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
		else
		{
			$_SESSION[$this->_config->obtener('sesion/error')] = $this->_validar->errors()->all();
			$this->_redirigir->a($this->_config->obtener('dir/error'));
		}
	}
}