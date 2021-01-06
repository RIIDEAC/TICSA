<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\paciente\DatosExpedientes;
/**
 * 
 */
class ListaDeExpedientes
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
	 	if($expedientes = $this->_expedientes->obtener())
	 	{
	 		$this->_vista->ver(
	 			array(
	 				'template/Header',
	 				'template/Menu',
	 				'expediente/ListaDeExpedientes',
	 				'template/Footer'
	 			), (object) $expedientes);
	 	}
	 	else
	 	{
	 		//return
	 	}
	}	
}
