<?php
namespace app\controladores;
use \app\modelos\vista\Vista;
use \app\modelos\permisos\MenuporPermisos;
use \app\modelos\pacientes\ObtenerTodosLosPacientesConEgreso;

class BitacoraPacientesEgresados
{
	private $_vista,
			$_menu,
			$_pacientes,
			$_formatos;

	public function __construct
	(
		Vista $Vista, 
		MenuporPermisos $MenuporPermisos,
		ObtenerTodosLosPacientesConEgreso $ObtenerTodosLosPacientesConEgreso
	)
	{
		$this->_vista = $Vista;
		$this->_menu = $MenuporPermisos;
		$this->_pacientes = $ObtenerTodosLosPacientesConEgreso;
	}

	public function Index()
	{
		$this->_vista->ver('plantilla/Header');
		$this->_menu->ver();
		if($pacientes = $this->_pacientes->obtener())
		{
			$this->_vista->ver('pacientes/BitacoraPacientesEgresados', $pacientes);
		}
		else 
		{
			$this->_vista->ver('plantilla/NoExistenRegistros');
		}		
		$this->_vista->ver('plantilla/Footer');
	}
}