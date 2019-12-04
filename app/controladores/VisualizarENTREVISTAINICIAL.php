<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerENTREVISTAINICIAL;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarENTREVISTAINICIAL
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerENTREVISTAINICIAL $ObtenerENTREVISTAINICIAL
	)
	{
		$this->_formato = $ObtenerENTREVISTAINICIAL;
		$this->_vista = $Vista;
	}

	public function Index($parte = null, $formato_id = null)
	{
		if($formato_id && $parte)
		{
			if($formato = $this->_formato->obtener($formato_id, $parte))
			{
				$this->_vista->ver('formatos/ENTREVISTAINICIAL'.$parte,$formato);
			}
		}
	}
}