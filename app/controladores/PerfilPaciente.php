<?php
namespace app\controladores;
use \app\nucleo\{Config};
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\{ObtenerNotasIngresoporPacienteID};
use \app\modelos\redirigir\Redirigir;

class PerfilPaciente
{
	private $_vista,
			$_menu,
			$_formatos,
			$_redirigir,
			$_config;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,
		ObtenerNotasIngresoporPacienteID $ObtenerNotasIngresoporPacienteID,
		Redirigir $Redirigir,
		Config $Config
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_redirigir = $Redirigir;
		$this->_config = $Config;
		$this->_ingresos = $ObtenerNotasIngresoporPacienteID;
	}

	public function Index($id = null)
	{
		if(!$id && !is_numeric($id))
		{
			$this->_redirigir->a($this->_config->obtener('dir/principal'));
		}

		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($ingresos = $this->_ingresos->obtener($id))
		{
			$this->_vista->ver('paciente/PerfilPaciente',$ingresos);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}
		
		$this->_vista->ver('plantilla/Footer');
	}
}