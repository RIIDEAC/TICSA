<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosNotaDeEgreso;
/**
 * 
 */
class EditarDatosNotaDeEgreso
{
	private $_vista,
			$_paciente,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosNotaDeEgreso $DatosNotaDeEgreso
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeEgreso;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index($id = null): void
	{
	 	if($id && $paciente = $this->_paciente->obtener($id))
	 	{
 			$this->_vista->ver(
 				array(
 					'template/HeaderSelect',
	 				'template/Nav',
 					'expediente/EditarDatosNotaDeEgreso',
 					'template/FooterSelect'
 				), (object)[
 			'CATALOGOS' => 
 			$this->_catalogos->obtener(
 			array(
 				'CAT_TIPOEGRESO_TIE', 
 			)), 
 			'PACIENTE' => $paciente
	 		]);
	 	}
	 	else
	 	{
	 		//
	 	}
	}	
}