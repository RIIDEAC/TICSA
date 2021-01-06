<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\catalogos\{ObtenerCatalogos,ObtenerDatosDeCentro};
use \app\modelos\paciente\DatosDeAportacion;
/**
 * 
 */
class VerAportacion
{
	private $_vista,
			$_catalogo,
			$_centro,
			$_aportacion;
	
	public function __construct
	(
		Vista $Vista,
		ObtenerCatalogos $ObtenerCatalogos,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro,
		DatosDeAportacion $DatosDeAportacion
	)
	{
		$this->_vista = $Vista;
		$this->_centro = $ObtenerDatosDeCentro;
		$this->_catalogo = $ObtenerCatalogos;
		$this->_aportacion = $DatosDeAportacion;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		//BUSCAR APORTACION
	 		if($aportacion = $this->_aportacion->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/HeaderEditor',
		 				'template/Nav',
		 				'expediente/VerAportacion',
		 				'template/FooterEditorReadOnly'
		 			),(object) array(
		 				'CATALOGOS' => $this->_catalogo->obtener(array(
		 					'CAT_TIPOAPORTACION_TIA',
		 					'CAT_TIPOMONEDA_TIM',
		 				)),
		 				'CENTRO' => $this->_centro->obtener(),
		 				'APORTACION' => $aportacion
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}