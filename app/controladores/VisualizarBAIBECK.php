<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerBAIBECK;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarBAIBECK
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerBAIBECK $ObtenerBAIBECK
	)
	{
		$this->_formato = $ObtenerBAIBECK;
		$this->_vista = $Vista;
	}

	public function Index($formato_id = null)
	{
		if($formato_id)
		{
			if($formato = $this->_formato->obtener($formato_id))
			{
				$this->_vista->ver('formatos/BAIBECK',$formato);
			}
		}
	}
}