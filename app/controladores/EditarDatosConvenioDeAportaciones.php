<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosConvenioDeAportaciones;
/**
 * 
 */
class EditarDatosConvenioDeAportaciones
{
	private $_vista,
			$_convenio,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosConvenioDeAportaciones $DatosConvenioDeAportaciones
	)
	{
		$this->_vista = $Vista;
		$this->_convenio = $DatosConvenioDeAportaciones;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index($id = null): void
	{
		$this->_vista->ver(
				array(
					'template/HeaderSelect',
	 				'template/Nav',
		 		)
			);


	 	if($id && $convenio = $this->_convenio->obtener($id))
	 	{
	 		
 			$this->_vista->ver(
 				array(
 					'expediente/EditarDatosConvenioDeAportaciones',
 				), (object)[
 			'CATALOGOS' => 
 			$this->_catalogos->obtener(
 			array(
 				'CAT_BECA_BECA', 
	 			'CAT_TIPOMONEDA_TIM',
	 			'CAT_PERIODOAPORTACION_PER',
 			)), 
 			'CONVENIO' => $convenio
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