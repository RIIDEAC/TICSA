<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosExpedientes;
/**
 * 
 */
class BitacoraDeIngresos
{
	private $_vista,
			$_expedientes;
	
	public function __construct
	(
		Vista $Vista,
		DatosExpedientes $DatosExpedientes
	)
	{
		$this->_vista = $Vista;
		$this->_expedientes = $DatosExpedientes;
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
	 				'expediente/ListaDeExpedientes',
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