<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\paciente\DatosExpedientes;
use \app\modelos\paciente\sistemaviejo\ObtenerDatosNotasDeIngreso;

/**
 * 
 */
class CapturarDatosVincularExpedienteViejo
{
	private $_vista,
			$_expedientes,
			$_expedientesViejos;
	
	public function __construct
	(
		VistaToken $Vista,
		DatosExpedientes $DatosExpedientes,
		ObtenerDatosNotasDeIngreso $ObtenerDatosNotasDeIngreso
	)
	{
		$this->_vista = $Vista;
		$this->_expedientes = $DatosExpedientes;
		$this->_expedientesViejos = $ObtenerDatosNotasDeIngreso;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
					'template/HeaderSelect',
					'template/Nav',
				)
		);

		if($expedientes = $this->_expedientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'expediente/CapturarDatosVincularExpedienteViejo',
	 			), (object)
	 			array(
	 				'PACIENTES' => $expedientes,
	 				'VIEJOS' => $this->_expedientesViejos->obtener()
	 			));
	 	}

	 	$this->_vista->ver(
			array(
					'template/FooterSelect',
				)
		);

	}	
}