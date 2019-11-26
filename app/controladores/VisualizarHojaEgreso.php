<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerNotadeEgreso;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarHojaEgreso
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerNotadeEgreso $ObtenerNotadeEgreso
	)
	{
		$this->_formato = $ObtenerNotadeEgreso;
		$this->_vista = $Vista;
	}

	public function Index($negreso = null)
	{
		if($negreso)
		{
			if($formato = $this->_formato->obtener($negreso))
			{
				$this->_vista->ver('formatos/HojadeEgreso',(object) $formato);
			}
		}
	}
}