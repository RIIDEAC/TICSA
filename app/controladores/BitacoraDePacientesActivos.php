<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosPacientesActivos;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class BitacoraDePacientesActivos
{
	private $_vista,
			$_pacientes;
	
	public function __construct
	(
		Vista $Vista,
		DatosPacientesActivos $DatosPacientesActivos,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientesActivos;
		$this->_formato = $ObtenerDatosDeFormato;
		$this->_centro = $ObtenerDatosDeCentro;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
				'template/HeaderEditor',
	 			'template/Nav'
	 		)
		);
		if($pacientes = $this->_pacientes->obtener())
		{
			$this->_vista->ver(
	 		array(
	 				'expediente/BitacoraDePacientesActivos',
	 			), (object) array(
	 				'PACIENTES' => $pacientes,
	 				'FORMATO' => $this->_formato->obtener('DAT_BITACORAPACTRA_BPT'),
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
