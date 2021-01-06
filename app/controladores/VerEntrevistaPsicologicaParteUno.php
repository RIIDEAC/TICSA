<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\formatos\ObtenerDatosEntrevistaPsicologicaParteUno;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerEntrevistaPsicologicaParteUno
{
	private $_vista,
			$_entrevista,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosEntrevistaPsicologicaParteUno $ObtenerDatosEntrevistaPsicologicaParteUno,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_entrevista = $ObtenerDatosEntrevistaPsicologicaParteUno;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		if($entrevista = $this->_entrevista->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/HeaderEditor',
		 				'template/Nav',
		 				'expediente/VerEntrevistaPsicologicaParteUno',
		 				'template/FooterEditor'
		 			),(object) array(
		 				'DATOS' => $entrevista,
		 				'FORMATO' => $this->_formato->obtener('DAT_ENTPSIINI_EPI'),
		 				'CENTRO' => $this->_centro->obtener()
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}