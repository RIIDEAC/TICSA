<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosPacientesEgresados;
/**
 * 
 */
class BitacoraDeEgresos
{
	private $_vista,
			$_expedientes;
	
	public function __construct
	(
		Vista $Vista,
		DatosPacientesEgresados $DatosPacientesEgresados
	)
	{
		$this->_vista = $Vista;
		$this->_expedientes = $DatosPacientesEgresados;
	}

	public function Index(): void
	{
		$this->_vista->ver(
			array(
					'template/HeaderTablesButtons',
					'template/Nav',
				)
		);

		if($expedientes = $this->_expedientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'expediente/ListaDeEgresos',
	 			), (object) $expedientes);
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
					'template/FooterTablesButtons',
				)
		);

	}	
}