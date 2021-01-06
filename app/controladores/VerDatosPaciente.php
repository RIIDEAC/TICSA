<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\ObtenerDatosPaciente;
/**
 * 
 */
class VerDatosPaciente
{
	private $_vista,
			$_paciente;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosPaciente $ObtenerDatosPaciente
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $ObtenerDatosPaciente;
	}

	public function Index($id = null): void
	{
	 	if($id && $paciente = $this->_paciente->obtener($id))
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'template/Header',
	 				'template/Nav',
	 				'paciente/VerDatosPaciente',
	 				'template/Footer'
	 			), $paciente
	 		);
	 	}
	}	
}