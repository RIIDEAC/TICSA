<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
/**
 * 
 */
class RegistroRealizado
{
	private $_vista;
	
	public function __construct(Vista $Vista)
	{
		$this->_vista = $Vista;
	}

	public function Index($registro = null, $ver = null): void
	{
	 	$this->_vista->ver(
	 		array(
	 			'template/Header',
	 			'template/Nav',
	 			'template/RegistroRealizado',
	 			'template/Footer',
	 		),(object)array('REGISTRO' => $registro,'VER' => $ver)
	 	);
	}	
}