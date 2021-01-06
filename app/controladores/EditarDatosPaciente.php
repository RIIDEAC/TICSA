<?php
namespace app\controladores;
use \app\modelos\vista\VistaToken;
use \app\modelos\catalogos\ObtenerCatalogos;
use \app\modelos\paciente\DatosPaciente;
/**
 * 
 */
class EditarDatosPaciente
{
	private $_vista,
			$_paciente,
			$_catalogos;
	
	public function __construct
	(
		VistaToken $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		DatosPaciente $DatosPaciente
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosPaciente;
		$this->_catalogos = $ObtenerCatalogos;
	}

	public function Index($id = null): void
	{
	 	if($id && $paciente = $this->_paciente->obtener($id))
	 	{
 			$this->_vista->ver(
 				array(
 					'template/Header',
	 				'template/Nav',
 					'paciente/EditarDatos',
 					'template/Footer'
 				), (object)[
 			'CATALOGOS' => 
 			$this->_catalogos->obtener(
 			array(
 				'CAT_ENTIDADFEDERATIVA_ENF', 
 				'CAT_NACIONALIDAD_NAC',
 				'CAT_SEXO_SEX'
 			)), 
 			'PACIENTE' => $paciente
	 		]);
	 	}
	 	else
	 	{
	 		echo 'NO EXISTE ESE PACIENTE';
	 	}
	}	
}