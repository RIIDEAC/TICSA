<?php
namespace app\controladores;
use \app\modelos\formatos\ObtenerConsentimientoInformado;
use \app\modelos\vista\Vista;
/**
 * 
 */
class VisualizarConsentimientoInformadoInvoluntarioAyudaMutua
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerConsentimientoInformado $ObtenerConsentimientoInformado
	)
	{
		$this->_formato = $ObtenerConsentimientoInformado;
		$this->_vista = $Vista;
	}

	public function Index($ningreso = null)
	{
		if($ningreso)
		{
			if($formato = $this->_formato->obtener($ningreso))
			{
				$this->_vista->ver('formatos/ConsentimientoInformadoInvoluntarioAyudaMutua',(object) $formato);
			}
		}
	}
}