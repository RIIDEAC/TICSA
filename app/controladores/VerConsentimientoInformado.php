<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\{DatosNotaDeIngresoConRl,DatosNotaDeIngresoSinRl,DatosConvenioPeriodico,DatosConvenioIngreso};
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class VerConsentimientoInformado
{
	private $_vista,
			$_paciente,
			$_pacienteSinRl,
			$_conIngreso,
			$_conPeriodico,
			$_formato,
			$_centro;
	
	public function __construct
	(
		Vista $Vista,
		DatosNotaDeIngresoConRl $DatosNotaDeIngresoConRl,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		DatosConvenioIngreso $DatosConvenioIngreso,
		DatosConvenioPeriodico $DatosConvenioPeriodico,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeIngresoConRl;
		$this->_pacienteSinRl = $DatosNotaDeIngresoSinRl;
		$this->_conPeriodico = $DatosConvenioPeriodico;
		$this->_conIngreso = $DatosConvenioIngreso;
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
	 		if($this->_conPeriodico->obtener($id) && $this->_conIngreso->obtener($id))
	 		{
	 			$tipoingreso = $this->_pacienteSinRl->obtener($id)->TII_ID;
	 		

	 			if($tipoingreso !== '1')
		 		{
			 		//con RP
			 		if($paciente = $this->_paciente->obtener($id))
			 		{
			 			$this->_vista->ver(
				 			array(
				 				'expediente/VerConsentimientoInformadoConRepresentante',
				 			),(object) array(
				 				'DATOS' => $paciente,
				 				'FORMATO' => $this->_formato->obtener('DAT_CONSENTIMIENTO_CON'),
				 				'CENTRO' => $this->_centro->obtener(),
				 				'INGRESO' => $this->_conIngreso->obtener($id),
				 				'PERIODICO' => $this->_conPeriodico->obtener($id)
				 			) 
				 		);
			 		}

		 		}
		 		else
		 		{
		 			if($paciente = $this->_pacienteSinRl->obtener($id))
			 		{
			 			$this->_vista->ver(
				 			array(
				 				'expediente/VerConsentimientoInformadoSinRepresentante',
				 			),(object) array(
				 				'DATOS' => $paciente,
				 				'FORMATO' => $this->_formato->obtener('DAT_CONSENTIMIENTO_CON'),
				 				'CENTRO' => $this->_centro->obtener(),
				 				'INGRESO' => $this->_conIngreso->obtener($id),
				 				'PERIODICO' => $this->_conPeriodico->obtener($id)
				 			) 
				 		);
			 		}
		 		}
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