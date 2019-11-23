<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodosLosPacientesSinEgreso;

class BitacoraPacientesActivos
{
	private $_vista,
			$_menu,
			$_pacientes,
			$_formatos;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodosLosPacientesSinEgreso $ObtenerTodosLosPacientesSinEgreso
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_pacientes = $ObtenerTodosLosPacientesSinEgreso;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($pacientes = $this->_pacientes->obtener())
		{
			$this->_vista->ver('pacientes/BitacoraPacientesActivos', $pacientes);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}