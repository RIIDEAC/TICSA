<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\formatos\ObtenerDatosAssist;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerAssist
{
	private $_vista,
			$_assist,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosAssist $ObtenerDatosAssist,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_assist = $ObtenerDatosAssist;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		if($entrevista = $this->_assist->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/HeaderEditor',
		 				'template/Nav',
		 				'expediente/VerAssist',
		 				'template/FooterEditor'
		 			),(object) array(
		 				'DATOS' => $entrevista,
		 				'FORMATO' => $this->_formato->obtener('DAT_ASSIST_ASS'),
		 				'CENTRO' => $this->_centro->obtener()
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}