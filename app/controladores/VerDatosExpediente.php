<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\{DatosNotaDeIngresoSinRl,DatosAportacionesPorExpediente,DatosConvenioPeriodico,DatosConvenioIngreso};
use \app\modelos\formatos\ObtenerTodosLosFormatosDeUnExpediente;
use \app\modelos\catalogos\ObtenerDatosDeFormato;
use \app\modelos\redirigir\Redirigir;
/**
 * 
 */
class VerDatosExpediente
{
	private $_vista,
			$_paciente,
			$_redirigir,
			$_expediente,
			$_formato,
			$_aportaciones,
			$_convenioPeriodico,
			$_convenioIngreso;
			
	public function __construct
	(
		Vista $Vista,
		DatosNotaDeIngresoSinRl $DatosNotaDeIngresoSinRl,
		ObtenerTodosLosFormatosDeUnExpediente $ObtenerTodosLosFormatosDeUnExpediente,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		DatosAportacionesPorExpediente $DatosAportacionesPorExpediente,
		DatosConvenioPeriodico $DatosConvenioPeriodico,
		DatosConvenioIngreso $DatosConvenioIngreso,
		Redirigir $Redirigir
	)
	{
		$this->_vista = $Vista;
		$this->_paciente = $DatosNotaDeIngresoSinRl;
		$this->_redirigir = $Redirigir;
		$this->_expediente = $ObtenerTodosLosFormatosDeUnExpediente;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_aportaciones = $DatosAportacionesPorExpediente;
		$this->_convenioPeriodico = $DatosConvenioPeriodico;
		$this->_convenioIngreso = $DatosConvenioIngreso;
	}

	public function Index($id = null): void
	{
		$this->_vista->ver(
 			array(
 				'template/HeaderTables',
		 		'template/Nav',
 			)
		);
		if(is_numeric($id) or isset($_POST['EXP']))
	 	{
	 		if(!$id and is_numeric($_POST['EXP']))
	 		{ 
	 			$id = $_POST['EXP']; 
	 		}
	 		
	 		if($paciente = $this->_paciente->obtener($id))
	 		{
	 			$this->_vista->ver(
		 			array(
		 				'expediente/VerDatosExpediente',
		 			),(object) array(
		 				'PACIENTE' => $paciente,
		 				'PERIODICO' => $this->_convenioPeriodico->obtener($id),
		 				'INGRESO' => $this->_convenioIngreso->obtener($id)
		 			) 
	 			);

	 			$this->_vista->ver(
		 			array(
		 				'expediente/TablaDeFormatosDelExpediente'
		 			), (object) $this->_expediente->obtener($paciente->NING_ID)	
	 			);
	 		}
	 		else
	 		{
	 			
	 		}
	 		$this->_vista->ver(
	 			array(
 				'template/FooterTables'
	 			)
 			);	
	 	}
	 	else
	 	{
	 		$this->_redirigir->a('Inicio');
	 	}	
	}
}