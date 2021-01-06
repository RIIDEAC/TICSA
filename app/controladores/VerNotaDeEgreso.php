<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosNotaDeEgreso;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerNotaDeEgreso
{
	private $_vista,
			$_paciente,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		DatosNotaDeEgreso $DatosNotaDeEgreso,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeEgreso;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index($id = null): void
	{
	 	if($id)
	 	{
	 		$this->_vista->ver(
				array(
					'template/HeaderEditor',
		 			'template/Nav'
		 		)
			);
	 		if($paciente = $this->_paciente->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'expediente/VerNotaDeEgreso',
		 			),(object) array(
		 				'DATOS' => $paciente,
		 				'FORMATO' => $this->_formato->obtener('DAT_NEGRESO_NEGR'),
		 				'CENTRO' => $this->_centro->obtener()
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
	 		$this->_vista->ver(
				array(
					'template/FooterEditor'
		 		)
			);
	 		
	 	}
	}	
}