<?php
namespace app\controladores;
use \app\modelos\entradas\Entrada;
use \app\modelos\validar\Validar;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\ticket\CerrarTicket;
use \app\nucleo\Config;
/**
 * 
 */
class RevisarCerrarTicket
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
		CerrarTicket $CerrarTicket,
		Config $Config
	)
	{
		$this->_validar = $Validar;
		$this->_redirigir = $Redirigir;
		$this->_entrada = $Entrada;
		$this->_ticket = $CerrarTicket;
		$this->_config = $Config;
	}

	public function Index($id_ticket = null)
	{
		if(!$id_ticket)
		{
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}

		//Actualizamos
		if($this->_ticket->cerrar($id_ticket))
		{
			$_SESSION[$this->_config->obtener('sesion/realizado')] = 'Ticket cerrado con éxito';
			
			$this->_redirigir->a($this->_config->obtener('dir/realizado'));
		}

		$_SESSION[$this->_config->obtener('sesion/error')] = 'Ups, ocurrio un error desconocido';
		$this->_redirigir->a($this->_config->obtener('dir/error'));
	}
}