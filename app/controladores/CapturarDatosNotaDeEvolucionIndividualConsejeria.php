<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\paciente\DatosPacientesActivos;
/**
 * 
 */
class CapturarDatosNotaDeEvolucionIndividualConsejeria
{
	private $_vista,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		DatosPacientesActivos $DatosPacientesActivos
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientesActivos;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
				'template/HeaderSelect',
	 			'template/Nav'
	 		)
		);
	 	if($pacientes = $this->_pacientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'consejeria/CapturarDatosNotaDeEvolucionIndividualConsejeria',
	 			)
	 			,(object)[
	 		'PACIENTES' => $pacientes, 
	 		]);
	 	}
	 	else
	 	{
	 		$this->_vista->ver(
				array(
					'template/SinRegistros'
		 		)
			);
	 	}
	 	$this->_vista->ver(
			array(
				'template/FooterSelect'
	 		)
		);
	}	
}