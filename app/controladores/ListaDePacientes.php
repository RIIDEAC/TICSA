<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosPacientes;
/**
 * 
 */
class ListaDePacientes
{
	private $_vista,
			$_pacientes;
	
	public function __construct
	(
		Vista $Vista,
		DatosPacientes $DatosPacientes
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientes;
	}

	public function Index(): void
	{
	 	if($pacientes = $this->_pacientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'template/Header',
	 				'template/Menu',
	 				'paciente/ListaDePacientes',
	 				'template/Footer'
	 			), (object)$pacientes);
	 	}
	 	else
	 	{
	 		//Return
	 	}
	}	
}
