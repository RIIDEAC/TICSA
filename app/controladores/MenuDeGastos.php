<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
/**
 * 
 */
class MenuDeGastos
{
	private $_vista;
	
	public function __construct
	(
		Vista $Vista
	)
	{
		$this->_vista = $Vista;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
					'template/Header',
					'template/Nav',
					'template/MenuDeGastos',
					'template/Footer'
				)
		);
	}	
}