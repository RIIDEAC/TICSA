<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\formatos\ObtenerDatosScl;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerScl
{
	private $_vista,
			$_Scl,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosScl $ObtenerDatosScl,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_Scl = $ObtenerDatosScl;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		if($entrevista = $this->_Scl->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/HeaderEditor',
		 				'template/Nav',
		 				'consejeria/VerScl',
		 				'template/FooterEditor'
		 			),(object) array(
		 				'DATOS' => $entrevista,
		 				'FORMATO' => $this->_formato->obtener('DAT_SCL90_SCL'),
		 				'CENTRO' => $this->_centro->obtener()
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}