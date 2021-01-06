<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosPacientesActivos;
/**
 * 
 */
class CapturarGastosPacientesActivos
{
	private $_vista,
			$_catalogos,
			$_pacientes;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosPacientesActivos $DatosPacientesActivos
	)
	{
		$this->_vista = $Vista;
		$this->_catalogos = $ObtenerCatalogos;
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
	 				'expediente/CapturarGastosPacientesActivos',
	 			), (object) array(
	 				'PACIENTES' => $pacientes,
	 				'CATALOGOS' => $this->_catalogos->obtener(
			 			array(
			 				'CAT_TIPOMONEDA_TIM',
			 				'CAT_TIPOGASTO_TIG',
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
