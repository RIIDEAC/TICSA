<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\paciente\DatosPacientesActivos;
use \app\modelos\usuario\DatosDeUsuariosPsicologos;
/**
 * 
 */
class CapturarDatosAsignarPsicologo
{
	private $_vista,
			$_Psicologos,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		DatosPacientesActivos $DatosPacientesActivos,
		DatosDeUsuariosPsicologos $DatosDeUsuariosPsicologos
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientesActivos;
		$this->_Psicologos = $DatosDeUsuariosPsicologos;
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
	 				'psicologia/CapturarDatosAsignarPsicologo',
	 			)
	 			,(object)[
	 		'PACIENTES' => $pacientes,
	 		'PSICOLOGOS' => $this->_Psicologos->obtener() 
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