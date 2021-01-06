<?php
namespace app\controladores;
use \app\modelos\paciente\sistemaviejo\CopiarAportaciones;
/**
 * 
 */
class Prueba
{
	private CopiarAportaciones $_apo;
	
	public function __construct
	(
		CopiarAportaciones $CopiarAportaciones
		
	)
	{
		$this->_apo = $CopiarAportaciones;
	}

	public function Index(): void
	{
		
		//$this->_apo->obtener();
	}	
}