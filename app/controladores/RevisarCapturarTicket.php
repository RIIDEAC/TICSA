<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\ticket\RegistrarTicket;
use \app\nucleo\Config;
/**
 * 
 */
class RevisarCapturarTicket
{
	private 	$_validar,
				$_redirigir,
				$_campos,
				$_ticket,
				$_config;

	function __construct
	(
		Validar $Validar,
		Redirigir $Redirigir,
		Entrada $Entrada,
		RegistrarTicket $RegistrarTicket,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_campos = require_once 'app/libreria/comprobacion/RevisarAbrirTicket.php';
		$this->_entrada = $Entrada;
		$this->_ticket = $RegistrarTicket;
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
			if($this->_ticket->registrar($_POST))
			{
				$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Ticket registrado con éxito';
				
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