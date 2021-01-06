<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosPacientesEgresados;
/**
 * 
 */
class CapturarAportacionPacientesEgresados
{
	private $_vista,
			$_catalogos,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosPacientesEgresados $DatosPacientesEgresados
	)
	{
		$this->_vista = $Vista;
		$this->_catalogos = $ObtenerCatalogos;
		$this->_pacientes = $DatosPacientesEgresados;
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
	 				'expediente/CapturarAportacionPacientesNoActivos',
	 			), (object) array(
	 				'PACIENTES' => $pacientes,
	 				'CATALOGOS' => $this->_catalogos->obtener(
			 			array(
			 				'CAT_TIPOAPORTACION_TIA', 
			 				'CAT_TIPOMONEDA_TIM',
			 			))
	 			)
	 		);
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
