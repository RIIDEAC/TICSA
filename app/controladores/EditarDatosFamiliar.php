<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosFamiliar;
/**
 * 
 */
class EditarDatosFamiliar
{
	private $_vista,
			$_familiar,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosFamiliar $DatosFamiliar
	)
	{
		$this->_vista = $Vista;
		$this->_familiar = $DatosFamiliar;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index($id = null): void
	{
	 	if($id && $familiar = $this->_familiar->obtener($id))
	 	{
 			$this->_vista->ver(
 				array(
 					'template/HeaderSelect',
	 				'template/Nav',
 					'paciente/EditarDatosFamiliar',
 					'template/FooterSelect'
 				), (object)[
 			'CATALOGOS' => 
 			$this->_catalogos->obtener(
 			array(
 				'CAT_ENTIDADFEDERATIVA_ENF', 
 				'CAT_NACIONALIDAD_NAC',
 				'CAT_SEXO_SEX',
 				'CAT_PARENTESCO_PAE',
 				'CAT_REPRESENTANTELEGAL_RPR',
 			)), 
 			'FAMILIAR' => $familiar
	 		]);
	 	}
	 	else
	 	{
	 		//
	 	}
	}	
}