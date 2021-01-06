<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosFamiliares;
/**
 * 
 */
class ListaDeFamiliares
{
	private $_vista,
			$_familiares;
	
	public function __construct
	(
		Vista $Vista,
		DatosFamiliares $DatosFamiliares
	)
	{
		$this->_vista = $Vista;
		$this->_familiares = $DatosFamiliares;
	}

	public function Index(): void
	{
	 	if($familiares = $this->_familiares->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'template/Header',
	 				'template/Menu',
	 				'paciente/ListaDeFamiliares',
	 				'template/Footer'
	 			), (object)$familiares);
	 	}
	 	else
	 	{
	 		//Return
	 	}
	}	
}
