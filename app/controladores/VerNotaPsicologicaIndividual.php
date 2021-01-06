<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\formatos\ObtenerDatosNotaPsicologicaIndividual;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerNotaPsicologicaIndividual
{
	private $_vista,
			$_nota,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosNotaPsicologicaIndividual $ObtenerDatosNotaPsicologicaIndividual,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_nota = $ObtenerDatosNotaPsicologicaIndividual;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		if($entrevista = $this->_nota->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/HeaderEditor',
		 				'template/Nav',
		 				'expediente/VerNotaPsicologicaIndividual',
		 				'template/FooterEditor'
		 			),(object) array(
		 				'DATOS' => $entrevista,
		 				'FORMATO' => $this->_formato->obtener('DAT_NOTAPSIIND_NPI'),
		 				'CENTRO' => $this->_centro->obtener()
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}