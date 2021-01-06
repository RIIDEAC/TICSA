<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\{DatosNotaDeIngresoConRl,DatosNotaDeIngresoSinRl};
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerNotaDeIngreso
{
	private $_vista,
			$_paciente,
			$_pacienteSinRl,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		DatosNotaDeIngresoConRl $DatosNotaDeIngresoConRl,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeIngresoConRl;
		$this->_pacienteSinRl = $DatosNotaDeIngresoSinRl;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		if(!$paciente = $this->_paciente->obtener($id) )
	 		{
		 		$paciente = $this->_pacienteSinRl->obtener($id);
	 		}	 		

	 		if($paciente)
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'template/HeaderEditor',
		 				'template/Nav',
		 				'expediente/VerNotaDeIngreso',
		 				'template/FooterEditor'
		 			),(object) array(
		 				'DATOS' => $paciente,
		 				'FORMATO' => $this->_formato->obtener('DAT_NINGRESO_NING'),
		 				'CENTRO' => $this->_centro->obtener()
		 			) 
		 		);
	 		}
	 		
	 	}
	}	
}