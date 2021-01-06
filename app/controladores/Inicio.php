<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\seguridad\ControladorSeguro;
/**
 * 
 */
class Inicio
{
	private $_vista;
	
	public function __construct(Vista $Vista)
	{
		$this->_vista = $Vista;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
					'template/Header',
					'template/Nav',
					'template/Inicio',
					'template/Footer'
				)
		);
		
	}	
}