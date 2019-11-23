<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerASSIST;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarASSIST
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerASSIST $ObtenerASSIST
	)
	{
		$this->_formato = $ObtenerASSIST;
		$this->_vista = $Vista;
	}

	public function Index($assist_id = null)
	{
		if($assist_id)
		{
			if($formato = $this->_formato->obtener($assist_id))
			{
				$this->_vista->ver('formatos/ASSIST',$formato);
			}
		}
	}
}