<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerNotadeIngreso;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarNotaIngreso
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerNotadeIngreso $ObtenerNotadeIngreso
	)
	{
		$this->_formato = $ObtenerNotadeIngreso;
		$this->_vista = $Vista;
	}

	public function Index($ningreso = null)
	{
		if($ningreso)
		{
			if($formato = $this->_formato->obtener($ningreso))
			{
				$this->_vista->ver('formatos/NotadeIngreso',(object) $formato);
			}
		}
	}
}