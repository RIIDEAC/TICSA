<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosPacientesEgresados;
use \app\modelos\catalogos\{ObtenerDatosDeFormato,ObtenerDatosDeCentro};
/**
 * 
 */
class BitacoraDePacientesEgresados
{
	private $_vista,
			$_pacientes;
	
	public function __construct
	(
		Vista $Vista,
		DatosPacientesEgresados $DatosPacientesEgresados,
		ObtenerDatosDeFormato $ObtenerDatosDeFormato,
		ObtenerDatosDeCentro $ObtenerDatosDeCentro
	)
	{
		$this->_vista = $Vista;
		$this->_pacientes = $DatosPacientesEgresados;
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
	 				'expediente/BitacoraDePacientesEgresados',
	 			), (object) array(
	 				'PACIENTES' => $pacientes,
	 				'FORMATO' => $this->_formato->obtener('DAT_BITACORAPACEGRE_BPE'),
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