<?php
namespace app\controladores;
use \app\modelos\centro\ObtenerDatosCentro;
use \app\modelos\vista\Vista;
use \app\modelos\aportaciones\ObtenerAportacionPacienteporAPO_ID;
use \app\modelos\redirigir\Redirigir;
/**
 * 
 */
class VisualizarAportacionPaciente
{
	
	public function __construct
	(
		Vista $Vista,
		ObtenerDatosCentro $ObtenerDatosCentro,
		ObtenerAportacionPacienteporAPO_ID $ObtenerAportacionPacienteporAPO_ID,
		Redirigir $Redirigir
	)
	{
		$this->_vista = $Vista;
		$this->_centro = $ObtenerDatosCentro;
		$this->_formato = $ObtenerAportacionPacienteporAPO_ID;
		$this->_redirect = $Redirigir;
	}

	public function Index($id = null)
	{
		if($id)
		{
			if($formato = $this->_formato->obtener($id))
			{
				$this->_vista->ver('formatos/AportacionPaciente',["FORMATO" => $formato, "CENTRO" => $this->_centro->obtener()]);
			}
			else
			{
				$this->exit();
			}
		}
		else
		{
			$this->exit();
		}
	}

	public function exit()
	{
		$this->_redirect->a('Inicio');
	}
}