<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\RegistrarConsentimientoInformado;
use \app\nucleo\Config;
/**
 * 
 */
class RevisarConsentimientoInformado
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_consentimiento,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		RegistrarConsentimientoInformado $RegistrarConsentimientoInformado,
		Config $Config

	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarConsentimientoInformado.php';
		$this->_entrada = $Entrada;
		$this->_consentimiento = $RegistrarConsentimientoInformado;
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
			if($this->_consentimiento->registrar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Consentimiento Informado registrado con éxito';
				
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