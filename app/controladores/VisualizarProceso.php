<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\nucleo\{Config};
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\redirigir\Redirigir;
use \app\modelos\pacientes\ObtenerProcesoPaciente;

class VisualizarProceso
{
	private $_vista,
			$_menu,
			$_valoracion,
			$_formatos,
			$_redirigir,
			$_config;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,	
		Redirigir $Redirigir,
		Config $Config,
		ObtenerProcesoPaciente $ObtenerProcesoPaciente
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_redirigir = $Redirigir;
		$this->_config = $Config;
		$this->_proceso = $ObtenerProcesoPaciente;		
	}

	public function Index($id = null)
	{
		if(!$id && !is_numeric($id))
		{
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}

		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		$this->_vista->ver('paciente/VisualizarProceso',(object) $this->_proceso->obtener($id));
		$this->_vista->ver('plantilla/Footer');
	}
}