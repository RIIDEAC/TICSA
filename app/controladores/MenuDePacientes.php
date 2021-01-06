<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\{DatosPacientes,DatosFamiliares};
/**
 * 
 */
class MenuDePacientes
{
	private $_vista,
			$_pacientes,
			$_familiares;
	
	public function __construct
	(
		Vista $Vista,
		DatosPacientes $DatosPacientes,
		DatosFamiliares $DatosFamiliares
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientes;
		$this->_familiares = $DatosFamiliares;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
					'template/HeaderTables',
					'template/Nav',
					'template/MenuDePacientes',
				)
		);

		if($pacientes = $this->_pacientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'paciente/ListaDePacientes',
	 			), (object)$pacientes);
	 	}
	 	if($familiares = $this->_familiares->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'paciente/ListaDeFamiliares',
	 			), (object)$familiares);
	 	}

	 	$this->_vista->ver(
			array(
					'template/FooterTables',
				)
		);

	}	
}