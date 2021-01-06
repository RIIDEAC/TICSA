<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\formatos\ObtenerDatosNotaDeEvolucionConsejeriaIndividual;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerNotaDeEvolucionConsejeriaIndividual
{
	private $_vista,
			$_nota,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosNotaDeEvolucionConsejeriaIndividual $ObtenerDatosNotaDeEvolucionConsejeriaIndividual,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_nota = $ObtenerDatosNotaDeEvolucionConsejeriaIndividual;
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
		 				'consejeria/VerNotaDeEvolucionConsejeriaIndividual',
		 				'template/FooterEditor'
		 			),(object) array(
		 				'DATOS' => $entrevista,
		 				'FORMATO' => $this->_formato->obtener('DAT_NOTACONIND_NCI'),
		 				'CENTRO' => $this->_centro->obtener()
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}