<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\paciente\DatosPacientesActivos;
use \app\modelos\usuario\DatosDeUsuariosConsejeros;
/**
 * 
 */
class CapturarDatosAsignarConsejero
{
	private $_vista,
			$_consejeros,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		DatosPacientesActivos $DatosPacientesActivos,
		DatosDeUsuariosConsejeros $DatosDeUsuariosConsejeros
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientesActivos;
		$this->_consejeros = $DatosDeUsuariosConsejeros;
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
	 				'consejeria/CapturarDatosAsignarConsejero',
	 			)
	 			,(object)[
	 		'PACIENTES' => $pacientes,
	 		'CONSEJEROS' => $this->_consejeros->obtener() 
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