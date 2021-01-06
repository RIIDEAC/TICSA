<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosExpedientes;
/**
 * 
 */
class MenuDeExpedientes
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
					'template/HeaderTables',
					'template/Nav',
					'template/MenuDeExpedientes',
				)
		);

		if($expedientes = $this->_expedientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'expediente/ListaDeExpedientes',
	 			), (object) $expedientes);
	 	}

	 	$this->_vista->ver(
			array(
					'template/FooterTables',
				)
		);

	}	
}