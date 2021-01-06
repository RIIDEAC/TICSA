<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\{DatosPacientes,DatosFamiliares};
/**
 * 
 */
class MenuDeBitacoras
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
					'template/Header',
					'template/Nav',
					'template/MenuDeBitacoras',
					'template/Footer'
				)
		);
	}	
}