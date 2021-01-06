<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
/**
 * 
 */
class CapturarDatosPaciente
{
	private $_vista,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos
	)
	{
		$this->_vista = $Vista;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index(): void
	{
	 	$this->_vista->ver(
	 		array(
	 				'template/HeaderSelect',
	 				'template/Nav',
	 				'paciente/CapturarDatos',
	 				'template/FooterSelect'
	 			), 
	 		$this->_catalogos->obtener(
	 			array(
	 				'CAT_ENTIDADFEDERATIVA_ENF', 
	 				'CAT_NACIONALIDAD_NAC',
	 				'CAT_SEXO_SEX'
	 			))
	 	);
	}	
}
