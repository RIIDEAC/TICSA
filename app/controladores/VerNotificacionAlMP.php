<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosNotaDeIngresoConRl;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerNotificacionAlMP
{
	private $_vista,
			$_paciente,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		DatosNotaDeIngresoConRl $DatosNotaDeIngresoConRl,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeIngresoConRl;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
		$this->_vista->ver(
 			array(
 				'template/HeaderEditor',
 				'template/Nav'
 			)
 		);
	 	if($id)
	 	{
	 		if($paciente = $this->_paciente->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'expediente/VerNotificacionAlMP',
		 			),(object) array(
		 				'DATOS' => $paciente,
		 				'FORMATO' => $this->_formato->obtener('DAT_NOTIFICACIONALMP_NMP'),
		 				'CENTRO' => $this->_centro->obtener(),
		 			) 
		 		);
	 		}
	 		else
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/SinRegistros'
		 			)
		 		);
	 		}
	 	}

	 	$this->_vista->ver(
 			array(
 				'template/FooterEditor'
 			)
 		);
	}	
}