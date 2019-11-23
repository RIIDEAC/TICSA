<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerSCL90;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarSCL90
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerSCL90 $ObtenerSCL90
	)
	{
		$this->_formato = $ObtenerSCL90;
		$this->_vista = $Vista;
	}

	public function Index($formato_id = null)
	{
		if($formato_id)
		{
			if($formato = $this->_formato->obtener($formato_id))
			{
				$this->_vista->ver('formatos/SCL90',$formato);
			}
		}
	}
}