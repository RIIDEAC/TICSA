<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosExpedientes;
/**
 * 
 */
class CapturarDatosTicket
{
	private $_vista,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosExpedientes $DatosExpedientes
	)
	{
		$this->_vista = $Vista;
		$this->_catalogos = $ObtenerCatalogos;
		$this->_pacientes = $DatosExpedientes;
	}

	public function Index(): void
	{
	 	$this->_vista->ver(
	 		array(
	 				'template/HeaderSelect',
	 				'template/Nav',
	 				'expediente/CapturarTicket',
	 				'template/FooterSelect'
	 			), (object) array(
	 				'CATALOGOS' => $this->_catalogos->obtener(
			 			array(
			 				'CAT_TIPOTICKET_TIT', 
			 				'CAT_ESTADOTICKET_ETI',
			 			)),
	 				'PACIENTES' => $this->_pacientes->obtener()
	 			)
	 	);
	}	
}
