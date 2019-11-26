<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerBDIBECK;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarBDIBECK
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerBDIBECK $ObtenerBDIBECK
	)
	{
		$this->_formato = $ObtenerBDIBECK;
		$this->_vista = $Vista;
	}

	public function Index($formato_id = null)
	{
		if($formato_id)
		{
			if($formato = $this->_formato->obtener($formato_id))
			{
				$this->_vista->ver('formatos/BDIBECK',$formato);
			}
		}
	}
}