<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosNotaDeIngresoSinRl;
/**
 * 
 */
class EditarDatosNotaDeIngreso
{
	private $_vista,
			$_paciente,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
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
 					'expediente/EditarDatosNotaDeIngreso',
 					'template/FooterSelect'
 				), (object)[
 			'CATALOGOS' => 
 			$this->_catalogos->obtener(
 			array(
 				'CAT_TIPOINGRESO_TII', 
	 			'CAT_ESTADOCIVIL_ESC',
	 			'CAT_ESCOLARIDAD_ESO',
	 			'CAT_OCUPACION_OCU',
	 			'CAT_CONSUMEACTUALDROGA_CAD',
 				'CAT_FORMAADMINISTRACIONDROGA_FAD',
 				'CAT_FRECUENCIACONSUMODROGA_FCD',
 				'CAT_SISVEASUS_SIS',
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