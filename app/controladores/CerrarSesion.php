<?php
namespace app\controladores;
use \app\modelos\sesion\Sesion;
use \app\modelos\redirigir\Redirigir;
/**
 * 
 */
class CerrarSesion
{
	private $_sesion,
			$_redirigir;

	public function __construct(Sesion $Sesion, Redirigir $Redirigir)
	{
		$this->_sesion = $Sesion;
		$this->_redirigir = $Redirigir;
	}

	public function Index(): void
	{
		$this->_sesion->cerrar();
		$this->_redirigir->a('Login');
	}	
}